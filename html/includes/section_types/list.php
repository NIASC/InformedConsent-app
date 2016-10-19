<?php

$info_id = (int) extractGet('info_id');

if ($info_id > 0 || $siteData['slug_END']) {

	$get_info_query = "SELECT `bc_info`.`pk`,
						  `bc_info`.`id`,
						  `bc_info`.`section_id`,
						  `bc_info`.`language`,
						  `bc_info`.`title`,
						  `bc_info`.`description`,
						  `bc_info`.`content`,
						  `bc_info`.`start_date`,
						  `bc_info`.`url`,
						  `bc_info`.`thumbnail`,
						  `bc_info`.`published`,
						  `files`.`file` AS `pdf`,
						  `ppt_files`.`file` AS `ppt`
					FROM
						  `bc_info`
					LEFT JOIN `bc_info_files` AS `files` ON 
							`files`.`info_id` = `bc_info`.`id` AND 
							`bc_info`.`language` = `files`.`language` AND 
							`files`.`description` = 'pdf'					
					LEFT JOIN `bc_info_files` AS `ppt_files` ON 
							`ppt_files`.`info_id` = `bc_info`.`id` AND 
							`bc_info`.`language` = `ppt_files`.`language` AND 
							`ppt_files`.`description` = 'ppt'
					WHERE
						  `bc_info`.`language` = '" . $siteData['language'] . "'";
						  
	if($siteData['slug_END']) $get_info_query .= " AND `slug` = '" . $siteData['slug_END']."'";
	
	else if ($info_id > 0) $get_info_query .= " AND `id` = " . $info_id;
	
	$sectionData['info_slug'][$siteData['language']] = $siteData['slug_END'];
	
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$get_info_data = DBM::fetchObject($get_info_result);
		
		$related_info = get_related_info($get_info_data->id, $siteData['language'], $database_link);
		
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
		$smarty->assign('info_description', $get_info_data->description);
		$smarty->assign('job', $get_info_data->url);
		$smarty->assign('pdf', $get_info_data->pdf);
		$smarty->assign('ppt', $get_info_data->ppt);
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	//meta tags info
	$og_array = array(		
					'title'	=> strip_tags($get_info_data->title),
					'description' => strip_tags($get_info_data->description),
					'thumbnail' => $get_info_data->thumbnail,
					'id' => $get_info_data->id
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'list_single_page.tpl');
	
} else {
	
	if($siteData['section_type'] == 20) {
	
		$sort_type = "ORDER BY `title` ASC";
	
	} else $sort_type = "ORDER BY `sort` DESC";
		
		
	
	$get_info_query = "SELECT `pk`,
						  `id`,
						  `section_id`,
						  `language`,
						  `title`,
						  `description`,
						  `content`,
						  `start_date`,
						  `end_date`,
						  `url` AS `job`,
						  `thumbnail`,
						  `slug` AS `info_slug`
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' AND 
						  `published` = 'Y'
					".$sort_type;
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
			
			$i++;
			
			$list_data[] = array(
								'id' => $get_info_data->id,
								'title' => $get_info_data->title,
								'description' => $get_info_data->description,
								'start_date' => explode(' ', str_replace(':', '/', $get_info_data->start_date)),
								'end_date' => explode(' ', str_replace(':', '/', $get_info_data->end_date, $language)),
								'content' => $get_info_data->content,
								'thumbnail' => $get_info_data->thumbnail,
								'job' => $get_info_data->job,
								'info_slug' => $get_info_data->info_slug
								);
								
			
		}
		
		$smarty->assign('info_title', $siteData['section_name']);		
		$smarty->assign('info_thumbnail', $get_info_data->thumbnail);		
		$smarty->assign('info_content', $list_data);
		$smarty->assign('top_info_content', $top_list_data);
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	//meta tags info
	$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $get_info_data->thumbnail ? $get_info_data->thumbnail : $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'list_page.tpl');
	
}

$smarty->assign('sectionData', $sectionData);

?>