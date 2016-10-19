<?php

function clear_html($str){
	$str = str_replace("'",'&#39;',$str);
	$str = str_replace("&nbsp;",' ',$str);
	$str = str_replace("
",'\n',$str);
	return $str;
}

$info_id = (int) extractGet('info_id');

if ($info_id > 0) {

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
						  `id` = " . $info_id . " AND
						  `language` = '" . $siteData['language'] . "'";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$get_info_data = DBM::fetchObject($get_info_result);
		
		$related_info = get_related_info($get_info_data->id, $siteData['language'], $database_link);
		
		$smarty->assign('related_infos', $related_info);
		
		$smarty->assign('info_title', $get_info_data->title);
		
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
						  `content`,
						  `start_date`,
						  `end_date`,
						  `thumbnail`,
						  `published`,
						  `important`,
						  `lat`,
						  `lng`,
						  `important_type`,
						  `connected_gall`
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' AND 
						  `published` = 'Y'
					ORDER BY `important_type`, `sort` DESC";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		while ($point = DBM::fetchObject($get_info_result)) {
			
			$list_data[] = $point;
			
			if($point->thumbnail) $thumbnail = '<img src="images/'.$point->thumbnail.'" alt="'.clear_html($point->title).'"/>';
			else $thumbnail = '';
			$points .= "['".clear_html($point->title)."', ".$point->lat.", ".$point->lng.", 999, ".$point->id.", ".$point->important_type.", '".$point->important."'],
";
			
		}
		
		
		//Get UN Agencies
		$get_settings_query = "SELECT * FROM `bc_info` WHERE `section_id` = 21 AND `language`='".$siteData['language']."'";
							
                if ($get_settings_result = DBM::queryData($get_settings_query)){
                    
				while ($get_settings_data = DBM::fetchObject($get_settings_result))
                    
					$category_names[] = $get_settings_data;
                }
				
				
		$smarty->assign('points', $points);
		
		$smarty->assign('layers', $city_names);
		
		$smarty->assign('category_names', $category_names);
				
		$smarty->assign('info_content', $list_data);
		
	} else {
		
		$smarty->assign('info_title', $language['under_construction']);
	
		$smarty->assign('info_content', $language['under_construction_text']);
		
	}
	
	//meta tags info
	$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'objects.tpl');
	
}

?>