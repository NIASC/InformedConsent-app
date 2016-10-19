<?php
$pk = (int) extractGet('pk');

$group_id = (int) extractGet('id');

//add gallery
if (extractPost('doAddImage') == 'დამატება') {
	
	// Grab Variables
	$title = extractPost('title');
	$description = extractPost('description');
	$embed = extractPost('embed');
	$thumbnail = extractPost('thumbnail');
	$active = extractPost('active');
	$top = extractPost('top');
	$date = date("Y-m-d H:i:s");
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
	}

if($_FILES['file']['name']!=''||$embed!=''){
	
	if($_FILES['file']['name']!=''){ 	
	 
		$file = rand(1000,9999).$_FILES['file']['name'];
		$file = str_replace(' ','',$file);
		$upload = move_uploaded_file($_FILES['file']['tmp_name'],$config['fpath'].$file);	
		}	
	// copy thumbnail from youtube 213x160
	if($embed != ''){	
	
	$image = youtube_id($embed).'_0.jpg';
	$photo = youtube_id($embed).'_0.jpg';
	file_put_contents ($config['fpath']. $photo, 
					file_get_contents('http://img.youtube.com/vi/'.youtube_id($embed).'/0.jpg')
		);	
		
	$src = imagecreatefromjpeg($config['fpath'].$photo);
	$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_images']['width'], $config['gallery_images']['height']);
	imagejpeg($tmp2,$config['fpath'].$config['thumb_folder_name'].'small_'.$photo, 100);
	imagedestroy($src); 
	imagedestroy($tmp2);
	
	
	
	}
	// Selecting Max Section ID
	
	$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_video_gal`";
	
	if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_id = 0;
   			
   		}
		// Get Next ID
   		$real_id = $max_id + 1;
		
			// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_video_gal` WHERE `language` = '" . $content_language . "'";
   			
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
			
			$query = "SELECT `id`, `thumbnail` FROM `bc_video_gal_group` WHERE pk = ". $pk ."";
			
			$result = DBM::queryData($query);
						
			$gallery_group = DBM::fetchObject($result);
			
			if($gallery_group->thumbnail == '') {
				
				$update_thumbnail = "UPDATE `bc_video_gal_group` SET `thumbnail` = '".$image."' WHERE `id` = '".$gallery_group->id."'";
				
				DBM::query($update_thumbnail, $database_link);
			}
			

	$query = "INSERT INTO 
				`bc_video_gal` 
					SET
				`id` = ". $real_id .",
				`file` = '". $file ."',
				`image` = '". $image ."',
				`embed` = '". $embed ."',
				`title` = '". DBM::escape($title) ."',
				`description` = '". DBM::escape($description) ."',
				`language` = '". $val. "',
				`group_id` = ". $gallery_group->id .",
				`display` = '". DBM::escape($active) ."',
				`top` = '". DBM::escape($top) ."',
				`date` = '". $date ."',
				`sort` = ". $real_sort ."";
				
		DBM::query($query, $database_link);
		}
	header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=content&pk='.$pk);
   		
   		die();
	}
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>გვერდის დამატება</h4>
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
				
				<th class="text-right">URL</th>
				<td>
					<input type="text" name="embed"/>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">ფაილი</th>
				<td>
					<input type="file" name="file"/>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">გამოჩნდეს ტოპ ვიდეოდ</th>
				<td>
					<select name="top">
						<option value="Y">კი</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td>
					<select name="active">
						<option value="Y">კი</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doAddImage" value="დამატება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>