<?php

//

$section_id = (int) extractGet('section_id');

// Get Current Section

$get_section_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`sort`
				FROM
					`bc_sections`
				WHERE
					`bc_sections`.`id` = " . $section_id . " AND
					`bc_sections`.`language` = '" . $content_language . "'";

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

//

$get_section_data = DBM::fetchObject($get_section_result);

//

$info_pk = (int) extractGet('info_pk');

//

// Get Current Info

$get_info_query = "SELECT
					`bc_info`.`pk`,
					`bc_info`.`id`,
					`bc_info`.`section_id`,
					`bc_info`.`language`,
					`bc_info`.`title`,
					`bc_info`.`description`,
					`bc_info`.`content`,
					`bc_info`.`url`,
					`bc_info`.`start_date`,
					`bc_info`.`end_date`,
					`bc_info`.`thumbnail`,
					`bc_info`.`published`,
					`bc_info`.`slider`,
					`bc_info`.`lng`,
					`bc_info`.`lat`,
					`bc_info`.`important_type`,
					`bc_info`.`important`,
					`bc_info`.`connected_gall`
				FROM
					`bc_info`
				WHERE
					`bc_info`.`pk` = " . $info_pk . " AND
					`bc_info`.`section_id` = " . $section_id . " AND
					`bc_info`.`language` = '" . $content_language . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	if ($get_section_data->type == 5) {
		
		require_once('includes/pages/contact/edit.php');
		
	} 
	
} else {
	
	if ($get_section_data->type == 5) {
		
		require_once('includes/pages/contact/add.php');
		
	} 
}

?>