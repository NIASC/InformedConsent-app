<?php

// Add Section
if (isset($_POST['doAdd'])) {
	
	// Grab Variables
	
	$title = extractPost('title');
	$slug = convert_to_slug(date('Y-m-d', strtotime(extractPost('start_date'))).'-'.DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$url = extractPost('url');
	$section_id = (int) extractGet('section_id');
	$important_type = extractPost('important_type');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$published = extractPost('published');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
		
		//upload file
   		if($_FILES['file']['name'] != '') {
			
			if(checkForUpload($_FILES['file']['name'])) {
				
				$file = rand(1000,9999).$_FILES['file']['name'];
				$file = str_replace(' ', '', $file);
				$upload_file = move_uploaded_file($_FILES['file']['tmp_name'], $config['fpath'].$config['docs_folder_name'].$file);	
			
			} else echo '<h3>'.$TRANSLATION['file_type_error'].'</h3>';
		}
   		
		//upload image
   		if($_FILES['photo']['name']!=''){ 	
	 
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
			
		$tmp2 = ResizeSemiAbstractTop($src, 223, 344);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 100);
			break;
		}
		
		//destroy temporary images 
		imagedestroy($src); 
		imagedestroy($tmp1);
		imagedestroy($tmp2);
	}
		
   		// Selecting Max Info ID
   		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_info`";
   		
   		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_info_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_info_id = 0;
   			
   		}
   		
   		// Get Next ID
   		$real_info_id = $max_info_id + 1;
   		
   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {
   			
   			// Generating Name
   			if ($val != $content_language) {
   				$real_title = $title . ' (' . $val . ')';
   			} else {
	   			$real_title = $title;

   			}
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`bc_info`
   									SET
   								`id` = " . $real_info_id . ",
   								`section_id` = '" . $section_id . "',
   								`language` = '" . $val . "',
   								`title` = '" . DBM::escape($real_title) . "',
   								`slug` = '" . DBM::escape($slug) . "',
   								`url` = '" . DBM::escape($url) . "',
   								`description` = '" . DBM::escape($file) . "',
   								`content` = '" . DBM::escape($content) . "',
   								`start_date` = '" . DBM::escape($start_date) . "',
   								`end_date` = '" . DBM::escape($end_date) . "',
   								`published` = '" . DBM::escape($published) . "',
								`important_type` = '". (int)$important_type ."',
								`thumbnail` = '". $photo ."'";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
   			   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

// Get Current Section
$get_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`sort`
				FROM
					`bc_sections`
				WHERE
					`bc_sections`.`id` = " . (int) extractGet('section_id') . " AND
					`bc_sections`.`language` = '" . $content_language . "'";

if (!($get_result = DBM::queryData($get_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_data = DBM::fetchObject($get_result);

//

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['new_publication']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
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
                        
                        echo '<option value="'.$get_settings_data->value.'">'.$get_settings_data->description.'</option>';
                        
						}
                    ?>
					</select>
				</td>
				
			</tr>	
            		
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['cover']; ?></th>
				<td>
					<input type="file" name="photo"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['file']; ?></th>
				<td>
					<input type="file" name="file"/>
				</td>
				
			</tr>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['url']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('content', $content, 'full', 400); ?>
				</td>
				
			</tr>
			
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td>
					<input type="text" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['end_date']; ?></th>
				<td>
					<input type="text" name="end_date" class="input-large datetimepicker" value="<?php echo date("Y-m-d H:i:s"); ?>"/>
				</td>
				
			</tr>	
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td>
					<select name="published">
						<option value="Y"><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doAdd" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>