<?php

if(INSYS != 'pc777') die('404');


$info_pk = (int) extractGet('info_pk');


// Get Current Info
$get_info_query = "SELECT * FROM `bc_disease` WHERE `id` = " . (int)$info_pk . " AND `language` = '" . $content_language . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	require_once('includes/pages/disease/edit.php');
	
} else {
		
	require_once('includes/pages/disease/add.php');	
}

?>