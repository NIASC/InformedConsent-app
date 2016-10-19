<?php

$query = urldecode(extractGet('que'));
$category = (int)extractGet('category');
$active_year = (int)extractGet('year');

if (strlen($query) >= 3) {
	
	if( $category > 0 ) {
	
		if($arr = submenus_arr($category, $siteData['language']))
		
		foreach($arr as $item) {
			
			if($item)
		
			$category_id[] = $item->id;			
		}	
		
		$category_id[] = $category;
		
		$add_query = " AND `bc_info`.`section_id` IN (".join(",",$category_id).")";
	}
	
	if($active_year > 0) {
	
		$add_query .= " AND YEAR(`bc_info`.`start_date`) = ".DBM::escape($active_year)."";
	}
	
	$get_info_query = "SELECT
						`bc_info`.`pk`,
						`bc_info`.`id`,
						`bc_info`.`section_id`,
						`bc_info`.`language`,
						`bc_info`.`title`,
						`bc_info`.`description`,
						`bc_info`.`content`,
						`bc_info`.`start_date`,
						`bc_info`.`end_date`,
						`bc_info`.`thumbnail`,
						`bc_info`.`published`,						
						`bc_info`.`slug` AS `info_slug`,
						`bc_sections`.`name`,
						`bc_sections`.`slug`
					FROM
						`bc_info`,
						`bc_sections`
					WHERE
						`bc_sections`.`id` = `bc_info`.`section_id` AND
						`bc_sections`.`language` = `bc_info`.`language` AND
						`bc_info`.`language` = '" . $siteData['language'] . "' AND
						`bc_info`.`published` = 'Y' AND
						`bc_info`.`content` IS NOT NULL AND
						(`bc_info`.`title` LIKE '%" . DBM::escape($query) . "%' OR
						`bc_info`.`description` LIKE '%" . DBM::escape($query) . "%' OR
						`bc_info`.`content` LIKE '%" . DBM::escape($query) . "%') ".$add_query."
					ORDER BY `bc_sections`.`id`, `bc_info`.`start_date` DESC";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
		$list_data = array();
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
			
			$short_description = trim_text($get_info_data->description, $language['char_size']*200);
			
			$list_data[$get_info_data->id][] = array(
					'id' => $get_info_data->id,
					'title'	=> preg_replace("/($query)/i","<span class='found'>".$query."</span>",$get_info_data->title),
					'description' => preg_replace("/($query)/i","<span class='found'>".$query."</span>", $short_description),
					'thumbnail' => $thumbnail,
					'section_slug' => $get_info_data->slug,
					'section_name' => $get_info_data->name,
					'info_slug' => $get_info_data->info_slug,
					'start_date' => datemutation($get_info_data->start_date,$language)
				);
			
		}
		
		$smarty->assign('info_content', $list_data);
		
		
	} else {
		
		$smarty->assign('info_content', $language['search_no_results_found']);
		
	}
	//assign searching query
	$smarty->assign('search_key', $query);
	
} else {
	
	$smarty->assign('info_content', $language['search_query_too_short']);
	
}


$cat_query = "SELECT * FROM `bc_sections` WHERE `type` IN (3,4,7,14) AND `language` = '".DBM::escape($siteData['language'])."'";

if($result = DBM::queryData($cat_query, $database_link)) {

	while($row = DBM::fetchArray($result)) {
	
		$categories[] = $row;
	}
}


//************************ year group ***************************
$query = "SELECT YEAR(`start_date`) AS `year` FROM `bc_info` WHERE `start_date` > '1970-01-01' AND `language` = '".$siteData['language']."' GROUP BY `year`";
if($result = DBM::queryData($query, $database_link)) {
	
	while($row = DBM::fetchObject($result))
	
	$years[] = $row->year;
}


		
$og_array = array('thumbnail' => 'def_og.jpg');
	
$smarty->assign('og_array', $og_array);
$smarty->assign('categories', $categories);
$smarty->assign('years', $years);
$smarty->assign('info_title', $siteData['section_name']);
$smarty->assign('current_category', $category);
$smarty->assign('active_year', $active_year);
$smarty->assign('content_file', 'search_page.tpl');

?>