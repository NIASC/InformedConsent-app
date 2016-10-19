<?php

$info_id = (int) extractGet('info_id');

$per_page = $setting_data['news_pp'];

$today = date('Y-m-d');

if ($info_id > 0 || $siteData['slug_END']) {

	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
						  `description`,
						  `content`,
						  `start_date`,
						  `end_date`,
						  `thumbnail`,
						  `published`,
						  `connected_gall`
					FROM
						  `bc_info`
					WHERE
						  `language` = '" . $siteData['language'] . "'";
	if($siteData['slug_END']) $get_info_query .= " AND `slug` = '" . $siteData['slug_END']."'";
	
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
		
		$files_query = "SELECT * FROM `bc_info_files` WHERE `info_id` = ".$get_info_data->id." AND `language` = '".$siteData['language']."'";	
		
		if ($info_files_result = DBM::queryData($files_query, $database_link)) {
		
			while($info_files_data = DBM::fetchObject($info_files_result)){
			
			$info_files[] = $info_files_data;
			
			}
		
		}
		
		$smarty->assign('info_img', $get_info_data->thumbnail);		
		$smarty->assign('related_infos', $related_info);		
		$smarty->assign('related_gall', $related_gall);	
		$smarty->assign('info_files', $info_files);		
		$smarty->assign('info_title', $get_info_data->title);		
		$smarty->assign('start_date', datemutation($get_info_data->start_date, $language));		
		$smarty->assign('date', substr($get_info_data->start_date, 0, 10));		
		$smarty->assign('info_content', $get_info_data->content);		
		$smarty->assign('info_description', $get_info_data->description);
		
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
	
	$smarty->assign('content_file', 'news_single_page.tpl');
	
} else {
	
	if( isset($_GET['date']) ) {
		
		if(checkdate(str_replace('_', ',', $_GET['date']))) {
		
		$date = extractGet('date');
		
		$addQuery = " AND `start_date` < '".$date." 59:59' AND '".$date." 00:00' < `start_date`";
		}
	}
	
	$get_info_query = "SELECT `pk` FROM `bc_info` WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' ".$addQuery."
					ORDER BY `start_date` DESC";
	
	$pagination = pagination($get_info_query, $per_page);
	
	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
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
						  `language` = '" . $siteData['language'] . "' ".$addQuery."
					ORDER BY `start_date` DESC
					LIMIT ".($pagination['current_page']-1)*$per_page.", ".$per_page."";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
			
			$i++;
			
			$thumbnail = $get_info_data->thumbnail;
			
			$list_data[] = array (
								'title'	=> $get_info_data->title,
								'description' => trim_text($get_info_data->description, $language['char_size']*200),
								'thumbnail' => $thumbnail,
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
	
	$smarty->assign('content_file', 'category_list.tpl');
	
}

$recent_posts = recent_posts($current_post = (int)$get_info_data->id);

$smarty->assign('recent_posts', $recent_posts);

$smarty->assign('sectionData', $sectionData);

?>