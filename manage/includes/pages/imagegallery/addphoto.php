<?php
$pk = (int) extractGet('info_pk');

$group_id = (int) extractGet('id');

//add gallery
if (extractPost('doAddImage') == $TRANSLATION['save']) {
	
	// Grab Variables
	$title = extractPost('title');
	$description = extractPost('description');
	$thumbnail = extractPost('thumbnail');
	$active = extractPost('active');
	$top = extractPost('top');
	$date = extractPost('date');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
	}

if($_FILES['photo']['name'][0]!=''){
	
	foreach($_FILES['photo']['name'] as $key => $value){
		
		$photo = rand(1000,9999).$_FILES['photo']['name'][$key];
		$photo = str_replace(' ','',$photo);
		
		$remote_file = $_FILES['photo']['type'][$key];
		
		switch ($remote_file)
		{
			case 'image/jpeg':
				$src = imagecreatefromjpeg($_FILES['photo']['tmp_name'][$key]);
			break;
			case 'image/gif':
				$src = imagecreatefromgif($_FILES['photo']['tmp_name'][$key]);
			break;
			case 'image/png':
				$src = imagecreatefrompng($_FILES['photo']['tmp_name'][$key]);
			break;
			case "image/bmp":
				$src = imagecreatefromwbmp($_FILES['photo']['tmp_name'][$key]);
			break;
		}
	$max_width = 800; 
	$max_height = 600; 
	list($width, $height) = getimagesize($_FILES['photo']['tmp_name'][$key]);
	$dimm = max_dimm($max_width, $max_height, $width, $height);
	
	$tmp_full = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
	//save big image 
		switch ($remote_file)
			{
				case 'image/jpeg':
					imagejpeg($tmp_full, $config['fpath'].$photo, 100);
				break;
				case 'image/gif':
					imagegif($tmp_full, $config['fpath'].$photo, 100);
				break;
				case 'image/png':
					imagepng($tmp_full, $config['fpath'].$photo, 9);
				break;
				case "image/bmp":
					imagewbmp($tmp_full, $config['fpath'].$photo, 100);
				break;
			}
	//======================= small image ===========================
		
	$src = imagecreatefrom($config['fpath'].$photo);
	
	$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_images']['width'], $config['gallery_images']['height']); // crop & scale
	createIMAGE ($config['fpath'].$photo, $tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 100); // save image 
	
	
	//destroy temporary images 
	imagedestroy($src); 
	imagedestroy($tmp2);
	
	
	// Selecting Max Section ID
	
	$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_gallery`";
	
	if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_id = 0;
   			
   		}
		// Get Next ID
   		$real_id = $max_id + 1;
		
			// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_gallery` WHERE `language` = '" . $content_language . "'";
   			
   			if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
   			
   				$max_sort_data = DBM::fetchObject($max_sort_result);
   				
   				$max_sort = $max_sort_data->max_sort;
   				
   			} else {
   			
   				$max_sort = 0;
   				
   			}
   			
   			$real_sort = $max_sort + 1;
			
			// Cycle of Languages
   		foreach ($config['languages'] as $key => $val){
			
			// Generating Name
   			if ($val != $content_language) {
   				$real_title = $title . ' (' . $val . ')';
   			} else {
	   			$real_title = $title;
   			}
			
			$query = "SELECT `id` FROM `bc_gallery_group` WHERE pk = ". $pk ."";
			
			$result = DBM::queryData($query);
						
			$gallery_group = DBM::fetchObject($result);
			
			//set thumbnail			
			if($gallery_group->thumbnail == ''){
			
			$update_query = "UPDATE `bc_gallery_group` SET `thumbnail` = '". $photo ."' WHERE `id` = ".$gallery_group->id;
			
			DBM::query($update_query, $database_link);
			
			$src = imagecreatefrom($config['fpath'].$photo);
			$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_cover']['width'], $config['gallery_cover']['height']); // crop & scale
			createIMAGE ($config['fpath'].$photo, $tmp2, $config['fpath'].$config['thumb_folder_name'].'thumb_'.$photo, 100); // save image
			imagedestroy($src); 
			imagedestroy($tmp2); 			
			}

	$query = "INSERT INTO 
				`bc_gallery` 
					SET
				`id` = ". $real_id .",
				`file` = '". $photo ."',
				`title` = '". DBM::escape($title) ."',
				`description` = '". DBM::escape($description) ."',
				`language` = '". $val. "',
				`group_id` = ". $gallery_group->id .",
				`display` = '". DBM::escape($active) ."',
				`top` = '". DBM::escape($top) ."',
				`date` = '". $date ."',
				`sort` = ". $real_sort ."";
				
		DBM::query($query, $database_link);
		}}
		
		header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=content&info_pk='.$pk);   		
   		die();
	}
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $gallery_info->title; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['file']; ?></th>
				<td>
					<input type="file" name="photo[]" multiple="multiple"/>
				</td>
				
			</tr>
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['important']; ?></th>
				<td>
					<select name="top">
						<option value="N"><?php echo $TRANSLATION['no']; ?></option>
						<option value="Y"><?php echo $TRANSLATION['yes']; ?></option>
					</select>
				</td>
				
			</tr>
            
            
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo date("Y-m-d H:i:s"); ?>"/>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td>
					<select name="active">
						<option value="Y"><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doAddImage" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>