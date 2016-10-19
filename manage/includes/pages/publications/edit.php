<?php

// Add Section
if (isset($_POST['doEdit'])) {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$url = extractPost('url');
	$slug = convert_to_slug(date('Y-m-d', strtotime(extractPost('start_date'))).'-'.DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$photo_to_language = extractPost('photo_to_language');
	$important_type = extractPost('important_type');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
		
		//upload file
   		if($_FILES['file']['name'] != '') {
			
			if(checkForUpload($_FILES['file']['name'])) {
				
				if($get_info_data->description != '' && file_exists($config['fpath'].$config['docs_folder_name'].$get_info_data->description))
				@unlink($config['fpath'].'files/'.$get_info_data->description);
				
				$file = rand(1000,9999).$_FILES['file']['name'];
				$file = str_replace(' ', '', $file);
				$upload_file = move_uploaded_file($_FILES['file']['tmp_name'], $config['fpath'].$config['docs_folder_name'].$file);	
				
				$file_update_query = "UPDATE
   							`bc_info`
   								SET
   							`description` = '" . $file . "'
   						WHERE
   							`id` = " . $get_info_data->id . " AND
   							`section_id` = " . $section_id . "
							";
				if($photo_to_language != 'on')
				
				$file_update_query .= " AND `language` = '" . $content_language . "'";
				
				DBM::query($file_update_query, $database_link);
			
			} else echo '<h3>'.$TRANSLATION['file_type_error'].'</h3>';
		}
		
   		// Updating		
		if( $_FILES['photo']['name'] != '' ) { 	
	 	
		if( file_exists($config['fpath'].$get_info_data->thumbnail) )
	 	@unlink($config['fpath'].$get_info_data->thumbnail);
		
		if(file_exists($config['fpath'].$config['thumb_folder_name'].$get_info_data->thumbnail))
		@unlink($config['fpath'].$config['thumb_folder_name'].$get_info_data->thumbnail);
		
		$photo = rand(1000,9999).$_FILES['photo']['name'];
		$photo = str_replace(' ', '', $photo);
		$upload = move_uploaded_file($_FILES['photo']['tmp_name'], $config['fpath'].$photo);	
		
	
		$remote_file = $_FILES['photo']['type'];
		//$headers = get_headers($remote_file, 1);
	
		switch ($remote_file)
		{
			case 'image/jpeg':
				$src = imagecreatefromjpeg($config['fpath'].$photo);
			break;
			case 'image/gif':
				$src = imagecreatefromgif($config['fpath'].$photo);
			break;
			case 'image/png':
				$src = imagecreatefrompng($config['fpath'].$photo);
			break;
			case "image/bmp":
				$src = imagecreatefromwbmp($config['fpath'].$photo);
			break;
		}
			
		$tmp1 = ResizeSemiAbstractTop($src, 223, 344);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp1, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp1, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp1, $config['fpath'].$config['thumb_folder_name'].$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp1, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
		}
		
		//destroy temporary images 
		imagedestroy($src); 
		imagedestroy($tmp1);
		
		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`thumbnail` = '" . $photo . "'
   						WHERE
   							`id` = " . $get_info_data->id . " AND
   							`section_id` = " . $section_id . "
							";
		if($photo_to_language != 'on')
		
		$update_query .= " AND `language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
	}
		
		
		// Updating
   			
   		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`title` = '" . DBM::escape($title) . "',
							`slug` = '" . DBM::escape($slug) . "',
							`url` = '" . DBM::escape($url) . "',
   							`content` = '" . DBM::escape($content) . "',
							`important_type` = '". (int)$important_type ."',
							`start_date` = '". DBM::escape($start_date) ."',
							`end_date` = '". DBM::escape($end_date) ."',
   							`published` = '" . DBM::escape($published) . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`section_id` = " . $section_id . " AND
   							`language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
   		   			  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
   		
   	}
   	
}


// delete IMAGE
if (isset($_GET['deleteImg'])){
	
	@unlink($config['fpath'].$get_info_data->thumbnail);
	if(file_exists($config['fpath'].$config['thumb_folder_name'].$get_info_data->thumbnail))
	@unlink($config['fpath'].$config['thumb_folder_name'].$get_info_data->thumbnail);
	
	$query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;
	
	DBM::query($query, $database_link);
	
	header('location: ?page='.$current_page_id.'&act='.$current_act.'&language='.$content_language.'&section_id=' . $section_id . '&info_pk=' . $info_pk);
	die();
}

// delete file
if (isset($_GET['deleteFile'])){
	
	if(file_exists($config['fpath'].$config['docs_folder_name'].$get_info_data->description))
	@unlink($config['fpath'].$config['docs_folder_name'].$get_info_data->description);
	
	$query = "UPDATE `bc_info` SET `description` = '' WHERE id = ".$get_info_data->id;
	
	DBM::query($query, $database_link);
	
	header('location: ?page='.$current_page_id.'&act='.$current_act.'&language='.$content_language.'&section_id=' . $section_id . '&info_pk=' . $info_pk);
	die();
}

//
if($get_info_data->thumbnail!='') {
	
	$photo = '<td><img src="' . $config['file_path'] .$config['thumb_folder_name']. $get_info_data->thumbnail . '"/></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteImg" class="btn btn-mini btn-danger" title="სურათის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}

if($get_info_data->description!='') {
	
	$file = '<td><a href="' . $config['file_path'] .$config['docs_folder_name']. $get_info_data->description . '" target="_blank">'. $get_info_data->description . '</a></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteFile" class="btn btn-mini btn-danger" title="ფაილის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['edit_publication']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
		<a href="<?php echo $config['site_address'].$get_pages_data->language.''.$get_section_data->slug.'?info_id=' . $get_pages_data->id . '&preview'; ?>" target="_blank" class="btn btn-warning"><?php echo $TRANSLATION['view']; ?></a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>
            
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['category']; ?></th>
				<td>
					<select name="important_type">
                    	<option value="0"></option>			
						<?php
                        $get_settings_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'important_post_type' ORDER BY `value`";
                                    
                        if ($get_settings_result = DBM::queryData($get_settings_query)){
                            
                            while ($get_settings_data = DBM::fetchObject($get_settings_result))
                            
                            echo '<option value="'.$get_settings_data->value.'" '.dropDown($get_settings_data->value, $get_info_data->important_type).'>'.$get_settings_data->description.'</option>';
                            
                            }
                        ?>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['cover']; ?></th>
				<td>
                	<table><tr>
                    <td><input type="file" name="photo"/></td>
					<?php echo $photo; ?>
                    <td><label for="photo_to_language"><?php echo $TRANSLATION['displayed_other_languages']; ?></label></td>
                    <td><input type="checkbox" id="photo_to_language" name="photo_to_language" checked="checked"/></td>
                    </tr></table>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['file']; ?></th>
				<td>
                	<table><tr>
                    <td><input type="file" name="file"/></td>
					<?php echo $file; ?>
                    <td></td>
                    <td></td>
                    </tr></table>
				</td>
				
			</tr>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['url']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge" value="<?php echo $get_info_data->url; ?>"/>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('content', $get_info_data->content, 'full', 400); ?>
				</td>
				
			</tr>	
			
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td>
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['end_date']; ?></th>
				<td>
					<input type="text" name="end_date" value="<?php echo $get_info_data->end_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td>
					<select name="published">
						<option value="Y"<?php echo dropDown('Y', $get_info_data->published); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_info_data->published); ?>><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>