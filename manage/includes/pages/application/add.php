<?php

// Add Section
if (extractPost('doAdd') == 'დამატება') {
	
	// Grab Variables
	
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$section_id = (int) extractGet('section_id');
	$published = extractPost('published');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
   		
		//upload image
   		if($_FILES['photo']['name']!=''){ 	
	 
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
			
		$tmp2 = ResizeSemiAbstractTop($src,297,210);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp2,$config['fpath'].'small_'.$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp2,$config['fpath'].'small_'.$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp2,$config['fpath'].'small_'.$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp2,$config['fpath'].'small_'.$photo, 100);
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
   								`description` = '" . DBM::escape($description) . "',
   								`content` = '" . DBM::escape($content) . "',
   								`published` = '" . DBM::escape($published) . "',
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
		<h4>გვერდის დამატება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">არსებული გვერდები</a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right">სათაური</th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $description, 'basic', 200); ?>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">სრული ტექსტი</th>
				<td>
					<?php echo getEditor('content', $content, 'full', 400); ?>
				</td>
				
			</tr>
			
            <tr>
				
				<th class="text-right">ფოტო</th>
				<td>
					<input type="file" name="photo"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td>
					<select name="published">
						<option value="Y">კი</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doAdd" value="დამატება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>