<?php

$query = "SELECT 
				`bc_sections`.`id`,
				`bc_sections`.`name`,
				`bc_sections`.`slug`,
				`bc_info`.`title`,
				`bc_info`.`description`
			FROM 
				`bc_sections`
			LEFT JOIN `bc_info` ON `bc_sections`.`id` = `bc_info`.`section_id` AND `bc_sections`.`language` = `bc_info`.`language`
			WHERE 
				`bc_sections`.`type` = 5 AND 
				`bc_sections`.`language` = '".$siteData['language']."' 
			LIMIT 1";

if( $result = DBM::queryData($query) ) {

	while ($row = DBM::fetchObject($result))
	
	$contact_info = $row;

}

$smarty->assign('contact_info', $contact_info);



?>