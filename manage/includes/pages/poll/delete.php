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

//deleete thumbnail
$info_query = "SELECT *
				FROM
					`bc_info`
				WHERE
					`bc_info`.`pk` = " . $info_pk . " AND
					`bc_info`.`section_id` = " . $section_id . " AND
					`bc_info`.`language` = '" . $content_language . "'";
					
if($info_result = DBM::queryData($info_query, $database_link)){

$info_data = DBM::fetchObject($info_result);

@unlink($config['fpath'].$info_data->thumbnail);
@unlink($config['fpath'].'small_'.$info_data->thumbnail);
if(file_exists($config['fpath'].'small_thumb_'.$info_data->thumbnail))
@unlink($config['fpath'].'small_thumb_'.$info_data->thumbnail);	
	
}
// Get Current Info
$delete_info_query = "DELETE
				FROM
					`bc_info`
				WHERE
					`bc_info`.`pk` = " . $info_pk . " AND
					`bc_info`.`section_id` = " . $section_id . " AND
					`bc_info`.`language` = '" . $content_language . "'";

$delete_info_result = DBM::query($delete_info_query, $database_link);

if($section_id > 0)
	header('location: ?page=' . $current_page_id . '&act=list&language=' . $content_language.'&section_id='.$section_id);

else
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>