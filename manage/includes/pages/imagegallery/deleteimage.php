<?php

// Grab ID
$pk = (int) extractGet('info_pk');
$gall_id = (int) extractGet('gall_id');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Get Data for Current Section
$get_query = "SELECT * FROM
						`bc_gallery`
							WHERE
						`bc_gallery`.`pk` = " . $pk;
if (!($get_result = DBM::queryData($get_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}
$get_data = DBM::fetchObject($get_result);
//DELETE FILES
@unlink($config['fpath'].$get_data->file);
@unlink($config['fpath'].$config['thumb_folder_name'].$get_data->file);
if(file_exists($config['fpath'].$config['thumb_folder_name'].'thumb_'.$get_data->file))
@unlink($config['fpath'].$config['thumb_folder_name'].'thumb_'.$get_data->file);

// Delete Current data
$query = "DELETE
				FROM
			`bc_gallery`
				WHERE
			`bc_gallery`.`id` = " . $get_data->id;

$result = DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=content&info_pk='.$gall_id);

die();

?>
