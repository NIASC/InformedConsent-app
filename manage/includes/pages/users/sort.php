<?php

// Grab ID
$pk = (int) extractGet('pk');
$dir = extractGet('dir');

if (!($pk > 0 && ($dir == 'up' || $dir == 'down'))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Get Data for Current Section
$get_section_query = "SELECT * FROM	`bc_info` WHERE `pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);

//

if ($dir == 'down') {
	
	// Get Data for Current Section
	$get_sort_query = "SELECT *	FROM
						`bc_info`
							WHERE
						`language` = '" . $get_section_data->language . "' AND
						`section_id` = '" . $get_section_data->section_id . "' AND
						`sort` < " . $get_section_data->sort . "
							ORDER BY
						`sort` DESC
							LIMIT 1";
	
} else if ($dir == 'up') {
	
	// Get Data for Current Section
	$get_sort_query = "SELECT * FROM
						`bc_info`
							WHERE
						`language` = '" . $get_section_data->language . "' AND
						`section_id` = '" . $get_section_data->section_id . "' AND
						`sort` > " . $get_section_data->sort . "
							ORDER BY
						`sort` ASC
							LIMIT 1";
	
}

if (!($get_sort_result = DBM::queryData($get_sort_query, $database_link))) {

	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
   	
}

$get_sort_data = DBM::fetchObject($get_sort_result);

//

$update_sort1_query = "UPDATE `bc_info` SET `sort` = " . $get_sort_data->sort . " WHERE `pk` = " . $get_section_data->pk;

DBM::query($update_sort1_query);

//

$update_sort2_query = "UPDATE `bc_info` SET `sort` = " . $get_section_data->sort . " WHERE `pk` = " . $get_sort_data->pk;

DBM::query($update_sort2_query);

//

if(isset($_GET['section_id']))
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=list&section_id='.extractGet('section_id'));
	
else
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>