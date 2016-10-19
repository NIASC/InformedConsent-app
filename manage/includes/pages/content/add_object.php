<?php

if(INSYS != 'pc777') die('404');


// Add Section
if (isset($_POST['doAdd'])) {
	
	// Grab Variables
	
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$section_id = (int) extractGet('section_id');
	$published = extractPost('published');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$type = extractPost('type');
	$category = extractPost('category');
	$url = extractPost('url');
	$important = extractPost('important');	
	$important_type = extractPost('important_type');
	$address = extractPost('address');
	
	//ადგილმდებარეობის მონაცემები
	$lng = extractPost('lng');
	$lat = extractPost('lat');
	
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
		
		//$upload = move_uploaded_file($_FILES['photo']['tmp_name'],$config['fpath'].$photo);	
		
	
		$remote_file = $_FILES['photo']['type'];
	
		switch ($remote_file)
		{
			case 'image/jpeg':
				$src = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
			break;
			case 'image/gif':
				$src = imagecreatefromgif($_FILES['photo']['tmp_name']);
			break;
			case 'image/png':
				$src = imagecreatefrompng($_FILES['photo']['tmp_name']);
			break;
			case "image/bmp":
				$src = imagecreatefromwbmp($_FILES['photo']['tmp_name']);
			break;
		}
			
		$max_width = 640; 
		$max_height = 480; 
		list($width, $height) = getimagesize($_FILES['photo']['tmp_name']);
		$dimm = max_dimm($max_width, $max_height, $width, $height);
			
		$tmp_full = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
		//save image 
		switch ($remote_file)
			{
				case 'image/jpeg':
					imagejpeg($tmp_full,$config['fpath'].$photo, 100);
				break;
				case 'image/gif':
					imagegif($tmp_full,$config['fpath'].$photo, 100);
				break;
				case 'image/png':
					imagepng($tmp_full,$config['fpath'].$photo, 9);
				break;
				case "image/bmp":
					imagewbmp($tmp_full,$config['fpath'].$photo, 100);
				break;
			}
		
		$max_width = 85; 
		$max_height = 85; 
		$dimm = max_dimm($max_width, $max_height, $width, $height);
		
		$tmp1 = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp1,$config['fpath'].'small_thumb_'.$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp1,$config['fpath'].'small_thumb_'.$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp1,$config['fpath'].'small_thumb_'.$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp1,$config['fpath'].'small_thumb_'.$photo, 100);
			break;
		}
		
		$max_width = 153; 
		$max_height = 126; 
		$dimm = max_dimm($max_width, $max_height, $width, $height);
		
		$tmp2 = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
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
		imagedestroy($tmp_full);
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
								`url` = '" . DBM::escape($url) . "',
   								`published` = '" . DBM::escape($published) . "',
   								`start_date` = '" . DBM::escape($start_date) . "',
   								`end_date` = '" . DBM::escape($end_date) . "',
   								`slider` = '" . DBM::escape($slider) . "',
   								`important` = '" . DBM::escape($important) . "',
								`lng` = '" . DBM::escape($lng) . "',
								`lat` = '" . DBM::escape($lat) . "',
   								`thumbnail` = '". $photo ."',
								`connected_gall` = '" . DBM::escape($category)."',
								`important_type` = '" . (int)DBM::escape($important_type) . "'";
   			
   			DBM::query($insert_query, $database_link);   			
   			$insert_id = DBM::insertID($database_link);
   			   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>დამატება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">არსებული გვერდები</a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">მნიშვნელოვანი მარკერი</th>
				<td>
					<select name="important">
						<option value="Y">დიახ</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">მარკერი</th>
				<td>
					<select name="important_type">
                    <?php 
						$marker_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'marker_type'";
						
						if($marker_result = DBM::queryData($marker_query)) {
						
						while ( $marker = DBM::fetchObject ( $marker_result ) )
						
						echo '<option value="'.$marker->value.'" '.dropDown($marker->value, $get_info_data->important_type).'>
								'.$marker->description.'
							</option>';
						
						}
					
					?>
					</select>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right">მდებარეობა</th>
				<td>
                	<div id="mapCanvas"></div>
                      <div id="infoPanel">
                        <b>Marker status:</b>
                        <div id="markerStatus"><i>Click and drag the marker.</i></div>
                        <b>Current position:</b>
                        <div id="info"></div>
                        <b>Closest matching address:</b>
                        <div id="address1"></div>
                      </div>
					<input type="text" placeholder="გრძედი" name="lng" id="lng" class="input-small" />
                    <input type="text" placeholder="განედი" name="lat" id="lat" class="input-small" />
                    <input type="text" placeholder="მისამართი" name="address" id="address" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $description, 'full', 200); ?>
				</td>
				
			</tr>
			
            <tr class="hidden">
				
				<th class="text-right">საწყისი თარიღი</th>
				<td>
					<input type="text" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">საბოლოო თარიღი</th>
				<td>
					<input type="text" name="end_date" class="input-large datetimepicker" value="<?php echo date("Y-m-d H:i:s"); ?>"/>
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
					<input type="submit" name="doAdd" value="დამატება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
            
            
		
		</tbody>
		
	</table>
	
</form>