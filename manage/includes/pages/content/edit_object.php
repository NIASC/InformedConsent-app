<?php

if(INSYS != 'pc777') die('404');


// Add Section
if (extractPost('doEdit') == 'დამახსოვრება') {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$url = extractPost('url');
	$category = extractPost('category');
	$important = extractPost('important');
	$address = extractPost('address');
	$important_type = extractPost('important_type');
	//ადგილმდებარეობის მონაცემები
	$lng = extractPost('lng');
	$lat = extractPost('lat');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
   		
   		// Updating
		
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
		
		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`thumbnail` = '" . $photo . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`section_id` = " . $section_id . " AND
   							`language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
	}
	
		
   	$update_query = "UPDATE
   							`bc_info`
   								SET
   							`title` = '" . DBM::escape($title) . "',
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
							`connected_gall` = '" . DBM::escape($category)."',
   							`important_type` = '" . (int)DBM::escape($important_type) . "'
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
@unlink($config['fpath'].'small_thumb_'.$get_info_data->thumbnail);
@unlink($config['fpath'].'small_'.$get_info_data->thumbnail);

$query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;

DBM::query($query, $database_link);

header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
}


//
if($get_info_data->thumbnail!='')
{$photo = '<td><img src="' . $config['file_path'] .'small_'. $get_info_data->thumbnail . '"/></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteImg" class="btn btn-mini btn-danger" title="სურათის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}


?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>ობიექტის ცვლილება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">არსებული ობიექტები</a>
		<a href="<?php echo $config['site_address'].$get_pages_data->language.''.$get_section_data->slug.'?info_id=' . $get_pages_data->id . '&preview'; ?>" target="_blank" class="btn btn-warning"><?php echo $TRANSLATION['view']; ?></a>
	</div>
	
</div>

<form name="section_edit_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">მნიშვნელოვანი მარკერი</th>
				<td>
					<select name="important">
						<option value="Y" <?php echo dropDown('Y', $get_info_data->important); ?>>დიახ</option>
						<option value="N" <?php echo dropDown('N', $get_info_data->important); ?>>არა</option>
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
					<input type="text" placeholder="გრძედი" name="lng" id="lng" class="input-small" value="<?php echo $get_info_data->lng; ?>"/>
                    <input type="text" placeholder="განედი" name="lat" id="lat" class="input-small" value="<?php echo $get_info_data->lat; ?>"/>
                    <input type="text" placeholder="მისამართი" name="address" id="address" class="input-xxlarge" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $get_info_data->description, 'full'); ?>
				</td>
				
			</tr>
			
            <tr class="hidden">
				
				<th class="text-right">საწყისი თარიღი</th>
				<td>
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">საბოლოო თარიღი</th>
				<td>
					<input type="text" name="end_date" value="<?php echo $get_info_data->end_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>		
			
			<tr>
				
				<th class="text-right">ფოტო</th>
				<td>
                	<table><tr>
                    <td><input type="file" name="photo"/></td>
					<?php echo $photo; ?>
                    </tr></table>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td>
					<select name="published">
						<option value="Y"<?php echo dropDown('Y', $get_info_data->published); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_info_data->published); ?>>არა</option>
					</select>
				</td>
				
			</tr>
            
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="დამახსოვრება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>