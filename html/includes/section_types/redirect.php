<?php

$get_info_query = "SELECT `pk`,
						  `id`,
						  `slug`
					FROM
						  `bc_sections`
					WHERE
						  `parent_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "'
					ORDER BY `sort`";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	header('location: ' .SITE_URL.$siteData['language'].'/'. $get_info_data->slug);
	
	die();
	
}

$smarty->assign('content_file', 'text_page.tpl');

?>