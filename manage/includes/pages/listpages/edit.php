<?php
if(INSYS != 'pc777') die('404');

$info_pdf = info_flies_by_description ($get_info_data->id, $content_language, 'pdf');
$info_ppt = info_flies_by_description ($get_info_data->id, $content_language, 'ppt');

// Edit Section
if (extractPost('doEdit') == 'დამახსოვრება') {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractPost('section_id');
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
		
		if($_FILES['photo']['name']!=''){ 	
	 	
		if(file_exists($config['fpath'].$get_info_data->thumbnail))
	 	@unlink($config['fpath'].$get_info_data->thumbnail);
		
		if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
		@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
		
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
		
		//upload && scale image
		$max_width = 800; 
		$max_height = 600; 
		list($width, $height) = getimagesize($_FILES['photo']['tmp_name']);
		$dimm = max_dimm($max_width, $max_height, $width, $height);
		
		$tmp_full = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
		//save big image 
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
		
		$tmp2 = ResizeSemiAbstractTop($src, 246, 196);
		//save image 
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp2,$config['fpath'].'thumb/'.$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp2,$config['fpath'].'thumb/'.$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp2,$config['fpath'].'thumb/'.$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp2,$config['fpath'].'thumb/'.$photo, 100);
			break;
		}
		
		
		//destroy temporary images 
		imagedestroy($src); 
		imagedestroy($tmp2);
		
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
							`slug` = '" . $get_info_data->id.'-'.$slug . "',
							`section_id` = '" . $section_id . "',
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
							`url` = '".DBM::escape($url)."',
   							`start_date` = '" . DBM::escape($start_date) . "',
   							`end_date` = '" . DBM::escape($end_date) . "',
   							`important` = '" . DBM::escape($important) . "',
   							`published` = '" . DBM::escape($published) . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
		
		
			if($_FILES['pdf_file']['name'] != '') {
				
				if($info_pdf) {
					
					@unlink($config['file_path'] .'files/'. $info_pdf[0]->file);
					
					$del_query = "DELETE FROM `bc_info` WHERE `info_id` = ".$get_info_data->id." AND `description` = 'pdf'";
					
					DBM::query($del_query, $database_link);
				}
				
				$pdf = rand(1000,9999).$_FILES['pdf_file']['name'];
				
				$pdf = str_replace(' ','',$pdf);
				
				$upload = move_uploaded_file($_FILES['pdf_file']['tmp_name'], $config['fpath'].'files/'.$pdf);
				
				$insert_pdf = "INSERT INTO `bc_info_files` 
									SET `file` = '".$pdf."', 
										`info_id` = '".$real_info_id."', 
										`description` = 'pdf', 
										`language` = '".$val."'";
				
				DBM::query($insert_pdf, $database_link);
			}
			
			
			if($_FILES['ppt_file']['name'] != '') {
				
				if($info_pdf) {
					
					@unlink($config['file_path'] .'files/'. $info_ppt[0]->file);
					
					$del_query = "DELETE FROM `bc_info` WHERE `info_id` = ".$get_info_data->id." AND `description` = 'ppt'";
					
					DBM::query($del_query, $database_link);
				}
				
				$ppt = rand(1000,9999).$_FILES['ppt_file']['name'];
				
				$ppt = str_replace(' ','',$ppt);
				
				$upload = move_uploaded_file($_FILES['ppt_file']['tmp_name'], $config['fpath'].'files/'.$ppt);
				
				$insert_ppt = "INSERT INTO `bc_info_files` 
									SET `file` = '".$ppt."', 
										`info_id` = '".$real_info_id."', 
										`description` = 'ppt', 
										`language` = '".$val."'";
				
				DBM::query($insert_ppt, $database_link);
			}	
   		   			  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
   		
   	}
   	
}


// delete IMAGE
if (isset($_GET['deleteImg'])){
	
	@unlink($config['fpath'].$get_info_data->thumbnail);
	
	if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
	
	@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
	
	$query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;
	
	DBM::query($query, $database_link);

	header('location: ?page='.$current_page_id.'&act='.$current_act.'&language='.$content_language.'&section_id=' . $section_id . '&info_pk=' . $info_pk);
	
	die();
}

if (isset($_GET['deleteFile'])){
	
	if($_GET['deleteFile'] == 'pdf'){
	
		@unlink($config['file_path'] .'files/'. $info_pdf[0]->file);
		
		$del_query = "DELETE FROM `bc_info` WHERE `info_id` = ".$get_info_data->id." AND `description` = 'pdf'";
	
	} elseif($_GET['deleteFile'] == 'ppt'){
	
		@unlink($config['file_path'] .'files/'. $info_ppt[0]->file);
		
		$del_query = "DELETE FROM `bc_info` WHERE `info_id` = ".$get_info_data->id." AND `description` = 'ppt'";
	}
	
	DBM::query($del_query, $database_link);

	header('location: ?page='.$current_page_id.'&act='.$current_act.'&language='.$content_language.'&section_id=' . $section_id . '&info_pk=' . $info_pk);
	
	die();
}


//
if($get_info_data->thumbnail!='') {
	
	$photo = '<td><img src="' . $config['file_path'] .'thumb/'. $get_info_data->thumbnail . '"/></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteImg" class="btn btn-mini btn-danger" title="სურათის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}

?>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
    <div class="row-fluid panel-title">
        
        <div class="span6">
            <h4><?php echo $TRANSLATION['edit_post']; ?></h4>
        </div>
        
        <div class="span6 text-right"><?php echo $TRANSLATION['page']; ?> - 
            <select name="section_id">
                    <?php
                    
                    echo getSectionsByType($get_section_data->type, $content_language, $database_link, $section_id);
                    
                    ?>
            </select>
            
            <a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; if(isset($_GET['section_id'])) echo '&act=list&section_id='.extractGet('section_id');?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
		<a href="<?php echo $config['site_address'].$get_pages_data->language.''.$get_section_data->slug.'?info_id=' . $get_pages_data->id . '&preview'; ?>" target="_blank" class="btn btn-warning"><?php echo $TRANSLATION['view']; ?></a>
        </div>
        
    </div>
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right">სათაური</th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>         
			
			<tr class="hidden">
				
				<th class="text-right">თანამდებობა</th>
				<td>
					<input type="text" name="url" class="input-xxlarge" value="<?php echo $get_info_data->url; ?>"/>
				</td>
				
			</tr>       
			
			<tr class="hidden">
				
				<th class="text-right">PDF</th>
				<td>
					<input type="file" name="pdf_file" class="input-xxlarge"/>
					<?php 
					if($info_pdf)
					echo '<a href="' . $config['file_path'] .'files/'. $info_pdf[0]->file . '" target="_blank" title="view">'.$info_pdf[0]->file.'</a>
					<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteFile=pdf" class="btn btn-mini btn-danger" title="ფაილის წაშლა">
					<i class="icon-remove"></i>
				</a>'; ?>
				</td>
				
			</tr>       
			
			<tr class="hidden">
				
				<th class="text-right">PPT</th>
				<td>
					<input type="file" name="ppt_file" class="input-xxlarge"/>
					<?php 					
					if($info_ppt)
					echo '<a href="' . $config['file_path'] .'files/'. $info_ppt[0]->file . '" target="_blank" title="view">'.$info_ppt[0]->file.'</a>
					<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteFile=ppt" class="btn btn-mini btn-danger" title="ფაილის წაშლა">
					<i class="icon-remove"></i>
				</a>'; ?>
				</td>
				
			</tr>
            
            <tr class="hidden">
				
				<th class="text-right">გამოჩნდეს მთავარ გვერდზე</th>
				<td>
					<select name="important">
                    	<option value="Y"<?php echo dropDown('Y', $get_info_data->important); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_info_data->important); ?>>არა</option>
                    </select>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $get_info_data->description, 'full', 200); ?>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">ტექსტი</th>
				<td>
					<?php echo getEditor('content', $get_info_data->content, 'full', 400); ?>
				</td>
				
			</tr> 
			
            <tr>
				
				<th class="text-right">საწყისი თარიღი</th>
				<td>
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">ბოლოო თარიღი</th>
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
                    <td><label for="photo_to_language">აისახოს ფოტო სხვა ენებზეც</label></td>
                    <td><input type="checkbox" id="photo_to_language" name="photo_to_language" checked="checked"/></td>
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