<?php

$allowed_files = array("pptx", "pptm",  "ppt",  "xls", "xlt", "xlm", "xlsx",  "xlsm", "xltx", "xltm", "xlsb", "xla", "xlam", "xll", "xlw", "doc", "dot", "docx", "docm", "dotx", "dotm", "docb", "pdf", "rar", "zip");

$info_id = (int) extractGet('info_id');

$per_page = $setting_data['news_pp'];

$today = date('Y-m-d');

if ($info_id > 0 || $siteData['slug_END']) {

	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
						  `url`,
						  `description`,
						  `content`,
						  `start_date`,
						  `end_date`,
						  `thumbnail`,
						  `published`
					FROM
						  `bc_info`
					WHERE
						  `language` = '" . $siteData['language'] . "'";
		
	$sectionData['info_slug'][$siteData['language']] = $siteData['slug_END'];
						  
	if($siteData['slug_END']) $get_info_query .= " AND `slug` = '"  .$siteData['slug_END']."'";
	
	else if ($info_id > 0) $get_info_query .= " AND `id` = " . $info_id;
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$get_info_data = DBM::fetchObject($get_info_result);
		
		//$related_info = get_related_info($get_info_data->id, $siteData['language'], $database_link);	
		
		//=============================================================
		
		$lang_info_query = "SELECT 
								`slug` AS `info_slug`, 
								`language` 
							FROM 
								`bc_info` 
							WHERE 
								`id` = '".$get_info_data->id."' AND 
								`language` != '".$siteData['language']."'";
		
		if ($lang_info_result = DBM::queryData($lang_info_query, $database_link)) {
		
		while ($lang_info_row = DBM::fetchObject($lang_info_result))
		
			$sectionData['info_slug'][$lang_info_row->language] = $lang_info_row->info_slug;
		
		}
		
		//=============================================================
		
		
		$smarty->assign('info_img', $get_info_data->thumbnail);		
		//$smarty->assign('related_infos', $related_info);
		$smarty->assign('info_title', $get_info_data->title);	
		$smarty->assign('info_url', $get_info_data->url);		
		$smarty->assign('start_date', datemutation($get_info_data->start_date, $language));		
		$smarty->assign('date', substr($get_info_data->start_date, 0, 10));		
		$smarty->assign('info_content', $get_info_data->content);	
		
		if($get_info_data->description) {
			
			$check_file = explode('.', $get_info_data->description);
			
			if(strtolower(end($check_file)) == 'pdf')
			$smarty->assign('info_description', $get_info_data->description);
		}
		
		$og_array = array (		
					'title'	=> strip_tags($get_info_data->title),
					'description' => strip_tags($get_info_data->description),
					'thumbnail' => $get_info_data->thumbnail,
					'id' => $get_info_data->id
									);
									
		$smarty->assign('og_array', $og_array);
		
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	$smarty->assign('content_file', 'publication_single.tpl');
	
} else {
	
	$get_info_query = "SELECT `pk` 
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' AND
						  `start_date` <= '".$today."'
					ORDER BY `start_date` DESC";
	
	$pagination = pagination($get_info_query, $per_page);
	
	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
						  `url`,
						  `slug` AS `info_slug`,
						  `description`,
						  `content`,
						  `start_date`,
						  `end_date`,
						  `thumbnail`,
						  `connected_gall`,
						  `published`
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "'
					ORDER BY `start_date` DESC
					LIMIT ".($pagination['current_page']-1)*$per_page.", ".$per_page."";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
							
			$check_file = explode('.', $get_info_data->description);
			
			if(in_array(strtolower(end($check_file)), $allowed_files)) {
			
				$file_url = $get_info_data->description;
				$file_type = strtolower(end($check_file));
			
			} else {
			
			}
			
			$list_data[] = array (
								'title'	=> $get_info_data->title,
								'url' => $url,
								'file_url' => $file_url,
								'file_type' => $file_type,
								'file' => $get_info_data->description,
								'thumbnail' => $get_info_data->thumbnail,
								'start_date' => datemutation($get_info_data->start_date, $language),
								'date' => substr($get_info_data->start_date, 0, 10),
								'info_slug' => $get_info_data->info_slug,
								'id' => $get_info_data->id
								);
					
		}
		
		
		$smarty->assign('pages', $pagination);
		
		$smarty->assign('info_title', $siteData['section_name']);
		
		$smarty->assign('info_content', $list_data);
		
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	//meta tags info
	$og_array = array (		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
					);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'publications.tpl');
	
}

$smarty->assign('sectionData', $sectionData);

?>