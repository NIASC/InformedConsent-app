<?php
if (isset($_GET['gallery_id'])){
	
	$get_gallery_query = "SELECT 
							`bc_gallery`.`file`, 
							`bc_gallery`.`title`, 
							`bc_gallery`.`description`, 
							`bc_gallery_group`.`title` as gall_title, 
							`bc_gallery_group`.`description` as gall_desc
						FROM 
							`bc_gallery`,
							`bc_gallery_group` 
						WHERE 
							`bc_gallery`.`language` = '" . $siteData['language'] . "' AND
							`bc_gallery_group`.`language` = `bc_gallery`.`language` AND 
							`bc_gallery_group`.`id` = `bc_gallery`.`group_id` AND 
							`bc_gallery`.`group_id`= ".$_GET['gallery_id']." AND 
							`bc_gallery`.`display` = 'Y' 
						ORDER BY `bc_gallery`.`date` DESC";

	if ($get_group_result = DBM::queryData($get_gallery_query, $database_link)){
		
		$group = array();
		
		while($get_group_data = DBM::fetchObject($get_group_result)){	
		
		$gallery_title = $get_group_data->gall_title;
		$gallery_desc = $get_group_data->gall_desc;
		
		array_push($group, array('title' => $get_group_data->title,
								'description' => $get_group_data->description,
								'file' => $get_group_data->file)
					);	
			}
		}

	//meta tags info
	$og_array = array(		
					'title'	=> $gallery_title,
					'description' => $gallery_desc,
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
		
	$smarty->assign('gall_title', $gallery_title);
	
	$smarty->assign('gall_desc', $gallery_desc);
		
	$smarty->assign('content_file', 'gallery.tpl');

} else {
		
	//paging
	$per_page = $setting_data['gallery_album_pp'];
	
	$get_gallery_query = "SELECT * FROM `bc_gallery_group` WHERE `section_id` = '".$siteData['section']."' AND`language` = '" . $siteData['language'] . "' AND `active` = 'Y'";
	
	if ($get_group_result = DBM::queryData($get_gallery_query, $database_link))
	
		$numb = DBM::numRows($get_group_result);
		
		if($numb == 1) {
		
			$row = DBM::fetchObject($get_group_result);
			
			header("Location: ".SITE_URL.$siteData['language'].'/'.$siteData['section_slug'].'?gallery_id='.$row->id);
		}
	
	if ($numb > $per_page)
	
		$page_count = ceil($numb/$per_page);
	
	if($page_count > 5) {
		
		if($_GET['page'] < 3)
	
		$smarty->assign('pages', array(1, 2, 3, 4, 5));			
			
			
		elseif($_GET['page'] > ($page_count-2))
	
		$smarty->assign('pages', array($page_count-4,
										$page_count-3, 
										$page_count-2, 
										$page_count-1, 
										$page_count));	
	
	else
		$smarty->assign('pages', array($_GET['page']-2, 
										$_GET['page']-1, 
										$_GET['page'], 
										$_GET['page']+1, 
										$_GET['page']+2)
										);
		
	} else {
		
		$pages = array();
	
		for ($i = 1; $i <= $page_count; $i++)
		array_push($pages, $i);
		
		$smarty->assign('pages', $pages);
	}
	
	
	if(!isset($_GET['page']))$_GET['page'] = 1;
	/*-----------------------*/
	
	$get_group_query = "SELECT * FROM 
							`bc_gallery_group` 
						WHERE 
							`language` = '" . $siteData['language'] . "' AND 
							`active` = 'Y' AND 
							`section_id` = ".DBM::escape($siteData['section'])."
						 ORDER BY `date` DESC 
						 LIMIT ".($_GET['page']-1)*$per_page.",$per_page";
	
	if ($get_group_result = DBM::queryData($get_group_query, $database_link)){
		
		$group = array();
		
		while($get_group_data = DBM::fetchObject($get_group_result)){
	
		if($get_group_data->thumbnail=='')		
			$thumbnail = 'gallery_default.png';
	
		else
			$thumbnail = $get_group_data->thumbnail;
	
		array_push($group, array('title' => $get_group_data->title,
								'description' => $get_group_data->description,
								'file' => $thumbnail,
								'date' => datemutation($get_group_data->date, $language),
								'id' => $get_group_data->id)
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
		
	
	$smarty->assign('content_file', 'gallery_list.tpl');
	
}

$smarty->assign('group', $group);

?>