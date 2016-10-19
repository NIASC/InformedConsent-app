<?php

// Grab ID
$pk = (int) extractGet('pk');
$dir = extractGet('dir');

if (!($pk > 0 && ($dir == 'up' || $dir == 'down'))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Get Data for Current Section
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
					`bc_sections`.`pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);

//

if ($dir == 'up') {
	
	// Get Data for Current Section
	$get_sort_query = "SELECT
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
						`bc_sections`.`parent_id` = " . $get_section_data->parent_id . " AND
						`bc_sections`.`language` = '" . $get_section_data->language . "' AND
						`bc_sections`.`sort` < " . $get_section_data->sort . "
							ORDER BY
						`bc_sections`.`sort` DESC
							LIMIT 1";
	
} else if ($dir == 'down') {
	
	// Get Data for Current Section
	$get_sort_query = "SELECT
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
						`bc_sections`.`parent_id` = " . $get_section_data->parent_id . " AND
						`bc_sections`.`language` = '" . $get_section_data->language . "' AND
						`bc_sections`.`sort` > " . $get_section_data->sort . "
							ORDER BY
						`bc_sections`.`sort` ASC
							LIMIT 1";
	
}

if (!($get_sort_result = DBM::queryData($get_sort_query, $database_link))) {

	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
   	
}

$get_sort_data = DBM::fetchObject($get_sort_result);

//

$update_sort1_query = "UPDATE `bc_sections` SET `sort` = " . $get_sort_data->sort . " WHERE `pk` = " . $get_section_data->pk;

DBM::query($update_sort1_query);

//

$update_sort2_query = "UPDATE `bc_sections` SET `sort` = " . $get_section_data->sort . " WHERE `pk` = " . $get_sort_data->pk;

DBM::query($update_sort2_query);

//

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>