<?php

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
						  `bc_sections`.`style`,
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
//	$smarty->assign('info_content', handleShortcodes($get_info_data->content, $shortcodes));
	
	
} else {
	
	$smarty->assign('info_title', $language['under_construction']);
	
	$smarty->assign('info_content', $language['under_construction_text']);
	
}
	
	//array for meta tags
	
	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'thumbnail' => $get_info_data->thumbnail,
					'url' => ''
					);

	$smarty->assign('og_array', $og_array);
	



if($get_info_data->style == 2)
$smarty->assign('content_file', 'text_page_2.tpl');

else
$smarty->assign('content_file', 'text_page.tpl');

?>