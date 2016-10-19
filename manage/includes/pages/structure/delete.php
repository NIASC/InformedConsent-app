<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Delete Current Section
$query = "DELETE
				FROM
			`bc_sections`
				WHERE
			`bc_sections`.`pk` = " . $pk;

$result = DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
