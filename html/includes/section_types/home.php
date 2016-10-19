<?php
$per_page = $setting_data['home_posts_count'];

$query_registration = "SELECT * FROM `bc_sections` WHERE `type` = 96 AND `language` = '".$siteData['language']."'";

if($result = DBM::queryData($query_registration, $database_link)) {

	$row = DBM::fetchArray($result);
	
	$smarty->assign('registration_page', $row);
}


$query = "SELECT 
				`bc_info`.`slug` AS `info_slug`,
				`bc_info`.`title`,
				`bc_info`.`thumbnail`,
				`bc_info`.`description`,
				`bc_info`.`start_date`,
				`bc_sections`.`slug` AS `section_slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`language` = '".$siteData['language']."' AND 
				`bc_sections`.`language` = `bc_info`.`language` AND 
				`bc_info`.`section_id` = `bc_sections`.`id` AND 
				`bc_info`.`important_type` = 2
			ORDER BY `bc_info`.`start_date` DESC 
			LIMIT ".$per_page;

if($result = DBM::queryData($query, $database_link)) {

	while($row = DBM::fetchArray($result)) {
		
		$row['date'] = datemutation($row['start_date'], $language);
		$row['description'] = trim_text($row['description'], $language['char_size']*250);
	
		$news_1[] = $row;
	}
}


$smarty->assign('news_1', $news_1);

$about_study[1] = info_by_id($siteData['language'], 6, 1);
$about_study[2] = info_by_id($siteData['language'], 7, 1);
$about_study[3] = info_by_id($siteData['language'], 8, 10);
$about_study[4] = info_by_id($siteData['language'], 9, 1);

$smarty->assign('about_study', $about_study);

$siteData['section_img'] = '';

//meta tags info
$og_array = array(		
				'title' => $language['website_title'],
				'description' => $siteData['section_description'],
				'thumbnail' => $siteData['section_img'],
				'id' => $siteData['section']
			);
									
$smarty->assign('og_array', $og_array);

$smarty->assign('content_file', 'main_page.tpl');

?>