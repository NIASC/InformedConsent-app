<?php


$this_sectiion_menu = build_menu_by_id($database_link, $firstSection['id'], $siteData['language'], 2, 0);


$smarty->assign('this_sectiion_menu', $this_sectiion_menu);

$get_info_query = "SELECT * FROM
						  `bc_sections`
					WHERE
						  `parent_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "' AND 
						  `active` = 'Y' 
					ORDER BY `sort` ASC";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	while($get_info_data = DBM::fetchObject($get_info_result))
	
	$info[] = $get_info_data;
	
	$smarty->assign('info', $info);
	
}

$get_info_query = "SELECT `bc_info`.`pk`,
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
						  `bc_sections`.`description` AS `section_description`
					FROM
						  `bc_info`, `bc_sections`
					WHERE
						  `bc_info`.`section_id` = " . $siteData['section'] . " AND
						  `bc_info`.`language` = '" . $siteData['language'] . "' AND 
						  `bc_sections`.`id` = ". $siteData['section'] ." AND 
						  `bc_sections`.`language` = '" . $siteData['language'] . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	$smarty->assign('info_title', $get_info_data->title);
	
	$smarty->assign('thumbnail', $get_info_data->thumbnail);
	
	$smarty->assign('info_description', $get_info_data->description);
	
	$smarty->assign('info_content', $get_info_data->content);
	
	
}
	
	//array for meta tags
	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

	$smarty->assign('og_array', $og_array);

$smarty->assign('content_file', 'submenu_page.tpl');

?>