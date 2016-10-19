<?php
	
	$get_group_query = "SELECT 
							`bc_gallery_group`.`id`,
							`bc_gallery_group`.`title`,
							`bc_gallery_group`.`description`,
							`bc_gallery_group`.`thumbnail`,
							`bc_gallery_group`.`section_id`,
							`bc_gallery_group`.`date`,
							`bc_sections`.`name`,
							`bc_sections`.`slug` AS `section_slug` 
						FROM 
							`bc_gallery_group`, `bc_sections` 
						WHERE 
							`bc_gallery_group`.`language` = '" . $siteData['language'] . "' AND 
							`bc_gallery_group`.`active` = 'Y' AND 
							`bc_sections`.`parent_id` = ".DBM::escape($siteData['section'])." AND 
							`bc_sections`.`language` = '" . $siteData['language'] . "' AND 
							`bc_sections`.`id` = `bc_gallery_group`.`section_id`
						 ORDER BY `bc_gallery_group`.`date` DESC";
	
	if ($get_group_result = DBM::queryData($get_group_query, $database_link)){
		
		while($get_group_data = DBM::fetchObject($get_group_result)){
	
		if($get_group_data->thumbnail == '')		
			$thumbnail = 'gallery_default.png';
	
		else
			$thumbnail = $get_group_data->thumbnail;
	
		$group[$get_group_data->section_id][] = array('title' => $get_group_data->title,
						'description' => $get_group_data->description,
						'file' => $thumbnail,
						'date' => datemutation($get_group_data->date, $language),
						'section_slug' => $get_group_data->section_slug,
						'name' => $get_group_data->name,
						'id' => $get_group_data->id
					);
			}		
		}
	
	
	//meta tags info
	$og_array = array(		
						'title'	=> $siteData['section_description'],
						'description' => $siteData['section_name'],
						'thumbnail' => $siteData['section_img'],
						'id' => $siteData['section']
										);
										
	$smarty->assign('og_array', $og_array);
		
	
	$smarty->assign('content_file', 'gallery_list_union.tpl');
	


$smarty->assign('page_class', 'main-page');

$smarty->assign('group', $group);

?>