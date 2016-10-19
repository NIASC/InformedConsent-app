<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}
$get_section_query = "SELECT * FROM
						`bc_banner`
							WHERE
						`bc_banner`.`pk` = " . $pk;
						
if ($get_section_result = DBM::queryData($get_section_query, $database_link)){

$get_section_data = DBM::fetchObject($get_section_result);

@unlink($config['fpath'] . $get_section_data->file);
}

// Delete Current Section
$query = "DELETE
				FROM
			`bc_banner`
				WHERE
			`bc_banner`.`pk` = " . $pk;

$result = DBM::query($query, $database_link);

if(isset($_GET['section_id']))
header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=list&section_id='.extractGet('section_id'));

else
header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
