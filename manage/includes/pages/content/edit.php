<?php

if(INSYS != 'pc777') die('404');


// Add Section
if (extractPost('doAdd') == 'დამატება') {
	
	// Grab Variables
	$pk = (int) extractGet('pk');
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	
	if (strlen($title) > 0) {
   		
   		// Updating
		if($_FILES['photo']['name']!=''){ 	
	 
		$photo = rand(1000,9999).$_FILES['photo']['name'];
		$photo = str_replace(' ','',$photo);
		$upload = move_uploaded_file($_FILES['photo']['tmp_name'],$fpath.$photo);	
		}
	
		$remote_file=$_FILES['photo']['type'];
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
			
		//$src = imagecreatefromjpeg($config['fpath'].$photo);
		$tmp2 = ResizeSemiAbstractTop($src,327,200);
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
		//imagejpeg($tmp2,$config['fpath'].'small_'.$photo, 100); 
		//destroy temporary images 
		imagedestroy($src); 
		imagedestroy($tmp2);
		
		
		
   			
   		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`title` = '" . DBM::escape($real_title) . "',
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
							`thumbnail` = '" . $photo . "'
   							`published` = '" . DBM::escape($published) . "'
   						WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
   		   			  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&pk=' . $pk);
   		
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
			
			<tr>
				
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