<?php

if(INSYS != 'pc777') die('404');

//

$info_pk = (int) extractGet('info_pk');


	$delete_info_query = "DELETE FROM `bc_info` WHERE `bc_info`.`id` = " . $info_data->id . "";
	
	$delete_info_result = DBM::query($delete_info_query, $database_link);

	header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
