<?php

if(INSYS != 'pc777') die('404');
//

$info_id = (int) extractGet('info_id');

// Get Current Info
$get_info_query = "SELECT * FROM `bc_users` WHERE `bc_users`.`id` = " . $info_id . "";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	require_once('includes/pages/users/edit.php');	
	
} else {
	
	require_once('includes/pages/users/add.php');	
}

?>