<?php
if (isset($_GET['gallery_id'])) {
	
	$get_gallery_query = "
					SELECT 
						bc_video_gal.title,
						bc_video_gal.description,
						bc_video_gal.file,
						bc_video_gal.image,						
						bc_video_gal.id,					
						bc_video_gal.date,					
						bc_video_gal.embed,
						bc_video_gal_group.title AS album_title,
						bc_video_gal_group.description AS album_description
					FROM 
						bc_video_gal, bc_video_gal_group
					WHERE 
						bc_video_gal.language = '".$siteData['language']."' AND 
						bc_video_gal.group_id = ".(int)extractGet('gallery_id')." AND 
						bc_video_gal.display = 'Y' AND 
						bc_video_gal_group.language = '".$siteData['language']."' AND 
						bc_video_gal_group.id = bc_video_gal.group_id 
					ORDER BY `bc_video_gal`.`date` DESC";
	
	if ($get_group_result = DBM::queryData($get_gallery_query, $database_link)){
		
		while($get_group_data = DBM::fetchObject($get_group_result))	
		
		$group[] = array(
						'title' => $get_group_data->title,
						'description' => $get_group_data->description,
						'file' => $get_group_data->file,
						'image' => $get_group_data->image,
						'embed' => $get_group_data->embed,
						'video_id' => youtube_id($get_group_data->embed),
						'date' => datemutation($get_group_data->date, $language),
						'album_title' => $get_group_data->album_title,
						'album_description' => $get_group_data->album_description,
						'id' => $get_group_data->id);	
		}	
	$smarty->assign('content_file', 'video_gallery.tpl');

} else {
	
	$get_group_query = "SELECT * FROM 
							`bc_video_gal_group` 
						WHERE 
							`language` = '" . $siteData['language'] . "' AND 
							`section_id` = '".$siteData['section']."' AND
							`active` = 'Y' 
						ORDER BY `date` DESC";
	
	if ($get_group_result = DBM::queryData($get_group_query, $database_link)){
		
		if(DBM::numRows($get_group_result) == 1) {
		
			$row = DBM::fetchObject($get_group_result);
			
			header("Location: ".SITE_URL.$siteData['language']."/".$siteData['section_slug']."?gallery_id=".$row->id);
		}
		
		while($get_group_data = DBM::fetchObject($get_group_result))	
		
		$group[] = array('title' => $get_group_data->title,
						'description' => $get_group_data->description,
						'file' => $get_group_data->file,
						'thumbnail' => $get_group_data->thumbnail,
						'date' => datemutation($get_group_data->date, $language),
						'id' => $get_group_data->id);
		
		}
	
	$smarty->assign('content_file', 'video_gallery_list.tpl');
}

$smarty->assign('group', $group);

?>