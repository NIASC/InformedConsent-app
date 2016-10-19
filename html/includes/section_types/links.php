<?php

$info_id = (int) extractGet('info_id');

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
						  `published`
					FROM
						  `bc_info`
					WHERE
						  `language` = '" . $siteData['language'] . "'";
						  
	if($siteData['slug_END']) $get_info_query .= " AND `slug` = '" . $siteData['slug_END']."'";
	
	else if ($info_id > 0) $get_info_query .= " AND `id` = " . $info_id;
	
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$get_info_data = DBM::fetchObject($get_info_result);
		
		
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
		
		$smarty->assign('related_infos', $related_info);
		
		$smarty->assign('info_title', $get_info_data->title);
		
		$smarty->assign('info_thumbnail', $get_info_data->thumbnail);
		
		$smarty->assign('info_content', $get_info_data->content);
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	//meta tags info
	$og_array = array(		
					'title'	=> strip_tags($get_info_data->title),
					'description' => strip_tags($get_info_data->description),
					'thumbnail' => $thumbnail,
					'id' => $get_info_data->id
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'list_single_page.tpl');
	
} else {
	
	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
						  `description`,
						  `url`,
						  `start_date`,
						  `thumbnail`,
						  `slug` AS `info_slug`
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' AND 
						  `published` = 'Y'
					ORDER BY `sort` DESC";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
			
			$list_data[] = array(
								'id' => $get_info_data->id,
								'title' => $get_info_data->title,
								'description' => $get_info_data->description,								
								'url' => 'http://'.str_replace('http://', '', $get_info_data->url),
								'thumbnail' => $get_info_data->thumbnail,
								'start_date' => $get_info_data->start_date,
								'info_slug' => $get_info_data->info_slug
								);
								
			
		}
		

		
		$smarty->assign('info_title', $siteData['section_name']);		
		$smarty->assign('info_thumbnail', $get_info_data->thumbnail);		
		$smarty->assign('info_content', $list_data);
		$smarty->assign('top_info_content', $top_list_data);
		
	} 
	
	//meta tags info
	$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
	$smarty->assign('content_file', 'links.tpl');
	
}
$smarty->assign('sectionData', $sectionData);

?>