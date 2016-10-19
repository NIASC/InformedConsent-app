<?php

// Grab ID
$pk = (int) extractGet('pk');
$gall_id = (int) extractGet('gall_id');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Get Data for Current Section
$get_query = "SELECT * FROM
						`bc_video_gal`
							WHERE
						`bc_video_gal`.`pk` = " . $pk;
if (!($get_result = DBM::queryData($get_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}
$get_data = DBM::fetchObject($get_result);
//DELETE FILES
if(file_exists($config['fpath'].$get_data->file))
@unlink($config['fpath'].$get_data->file);

if(file_exists($config['fpath'].$get_data->image))
@unlink($config['fpath'].$get_data->image);

// Delete Current data
$query = "DELETE
				FROM
			`bc_video_gal`
				WHERE
			`bc_video_gal`.`pk` = " . $pk;

$result = DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=content&pk='.$gall_id);

die();

?>
