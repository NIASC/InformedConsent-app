<?php

// Grab ID
$pk = (int)extractGet('info_pk');

if (!($pk > 0)) {

	header('location: ?page=' . $current_page_id . '&language=' . $content_language);

   	die();

}


$images_array = array();
//delate from db
$gallery_group_query = "SELECT * FROM `bc_gallery_group` WHERE `bc_gallery_group`.`pk` = " . $pk;
if($result = DBM::queryData($gallery_group_query, $database_link)) {
	$gallery_group = DBM::fetchObject($result, $database_link);
	$images_array[] = $gallery_group->thumbnail; //save thumbnail name

	$gallery_images_query = "SELECT * FROM `bc_gallery` WHERE `bc_gallery`.`group_id` = " . $gallery_group->id;
	if($result = DBM::queryData($gallery_images_query, $database_link)) {
		while($gallery_image = DBM::fetchObject($result, $database_link)) {
			$images_array[] = $gallery_image->file; //save image name
		}
		$images_remove_query = "DELETE FROM `bc_gallery` WHERE `bc_gallery`.`group_id` = " . $gallery_group->id;
		DBM::query($images_remove_query);
	}

	$group_remove_query = "DELETE FROM `bc_gallery_group` WHERE `bc_gallery_group`.`pk` = " . $pk;
	DBM::query($group_remove_query);
}

//delete images from disk
foreach($images_array as $image) {
	@unlink($config['fpath'].$image);
	@unlink($config['fpath'].'small_'.$image);
	if(file_exists($config['fpath'].'small_thumb_'.$image))
		@unlink($config['fpath'].'small_thumb_'.$image);
}

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();

?>
