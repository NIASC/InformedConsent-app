<?php

// Edit Section
if (isset($_POST['doEdit'])) {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$slug = convert_to_slug(DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$important = extractPost('important');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$photo_to_language = extractPost('photo_to_language');
	$url = extractPost('url');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
		
		// Updating
		
		if($_FILES['photo']['name'] != ''){ 	
	 	
		if(file_exists($config['fpath'].$get_info_data->thumbnail))
	 	@unlink($config['fpath'].$get_info_data->thumbnail);
		
		if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
		@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
		
		$photo = rand(1000,9999).$_FILES['photo']['name'];
		$photo = str_replace(' ','',$photo);
		$upload = move_uploaded_file($_FILES['photo']['tmp_name'],$config['fpath'].$photo);	
		
	
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
			
		$tmp1 = ResizeSemiAbstractTop($src, 297, 210);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp1,$config['fpath'].'thumb/'.$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp1,$config['fpath'].'thumb/'.$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp1,$config['fpath'].'thumb/'.$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp1,$config['fpath'].'thumb/'.$photo, 100);
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
							`slug` = '" . $slug . "',
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
							`url` = '".DBM::escape($url)."',
   							`start_date` = '" . DBM::escape($start_date) . "',
   							`end_date` = '" . DBM::escape($end_date) . "',
   							`important` = '" . DBM::escape($important) . "',
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

if (isset($_GET['deleteImg'])){
	
	@unlink($config['fpath'].$get_info_data->thumbnail);
	if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
	@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
	
	$query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;
	
	DBM::query($query, $database_link);
	
	header('location: ?page='.$current_page_id.'&act='.$current_act.'&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
}

if($get_info_data->thumbnail!=''){
	
	$photo = '<td><img src="' . $config['file_path'] .'thumb/'. $get_info_data->thumbnail . '"/></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteImg" class="btn btn-mini btn-danger" title="სურათის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}
?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['add_link']; ?>s</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>         
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['url']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge" value="<?php echo $get_info_data->url; ?>"/>
				</td>
				
			</tr>
            
            <tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['display_in']; ?></th>
				<td>
					<select name="important">
                    	<option value="Y"<?php echo dropDown('Y', $get_info_data->important); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_info_data->important); ?>><?php echo $TRANSLATION['no']; ?></option>
                    </select>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['dscription']; ?></th>
				<td>
					<?php echo getEditor('description', $get_info_data->description, 'basic', 200); ?>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td>
					<?php echo getEditor('content', $get_info_data->content, 'basic', 200); ?>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['image']; ?></th>
				<td>
                	<table><tr>
                    <td><input type="file" name="photo"/></td>
					<?php echo $photo; ?>
                    <td><label for="photo_to_language" class="hidden"><?php echo $TRANSLATION['displayed_other_languages']; ?></label></td>
                    <td><input type="checkbox" id="photo_to_language" class="hidden" name="photo_to_language" checked="checked"/></td>
                    </tr></table>
				</td>
				
			</tr>
			
            <tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['start_date']; ?></th>
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