<?php

if(INSYS != 'pc777') die('404');



//================ get images =====================

	$image_query = "SELECT * FROM `bc_info_files` WHERE `info_id` = ".$get_info_data->id." AND `language` = '".$content_language."' ORDER BY `id`";

	if($image_result = DBM::queryData($image_query, $database_link)){

	while($image_row = DBM::fetchObject($image_result)){

		$image_files[] = $image_row;

		$isThumbnail = $get_info_data->thumbnail !== $image_row->file ? '' : 'checked';

		$inf_image_arr .= '<tr class="info_images">
							<td><img src="' . $config['file_path'] .'thumb/'. $image_row->file . '"/></td>
							<td><label>
									<input type="radio" name="thumbnail" value="' . $image_row->file . '" required ' . $isThumbnail . '/>
									Thumbnail
								</label>
								<input type="text" name="edit_photo_desc['.$image_row->id.']" class="img_desc" value="'.$image_row->name.'"/>
							</td>
							<td><a id="'.$image_row->id.'" class="btn btn-mini btn-danger" title="სურათის წაშლა"><i class="icon-remove"></i></a></td>
						</tr>';
	}
	$photo = $inf_image_arr;
	
	} else if($get_info_data->thumbnail != '') {

		$photo = '<tr>
					<td><img src="' . $config['file_path'] .'thumb/'. $get_info_data->thumbnail . '"/></td>
					<td>
						<a class="thumbnail-remove-button btn btn-mini btn-danger" title="სურათის წაშლა"><i class="icon-remove"></i></a>
					</td>
				</tr>';
	}


// edit Section
if (isset($_POST['doEdit'])) {
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractPost('section_id');
	$title = extractPost('title');
	$slug = convert_to_slug(date('Y-m-d', strtotime(extractPost('start_date'))).'-'.DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$slider = extractPost('slider');
	$important = extractPost('important');
	$important_type = extractPost('important_type');
	$albums = extractPost('albums');
	$post_news = extractPost('post_news');
	$photo_to_language = extractPost('photo_to_language');
	$url = extractPost('url');
	$photo_desc = extractPost('photo_desc');
	$edit_photo_desc = extractPost('edit_photo_desc');
	$thumbnail = extractPost('thumbnail');

	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}

	//deleting images
	if (isset($_POST['deleteImgs'])){
		$deleted_images_array = array();

		if($_POST['deleteImgs'][0] != '') {
			$info_images_query = "SELECT * FROM `bc_info_files` WHERE `id` IN(";
			foreach($_POST['deleteImgs'] as $image_id) {
				$info_images_query .= "'" . $image_id . "',";
			}
			$info_images_query = substr($info_images_query, 0, -1);
			$info_images_query .= ')';

			if($result = DBM::queryData($info_images_query, $database_link)) {
				$info_image_delete_query = "DELETE FROM `bc_info_files` WHERE id IN(";

				while($row = DBM::fetchObject($result)) {
					$info_image = $row;

					if($get_info_data->thumbnail == $info_image->file) {
						$thumbnail_remove_query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;
					}

					$deleted_images_array[] = $info_image->file;

					$info_image_delete_query .= "'" . $info_image->id . "',";
				}

				$info_image_delete_query = substr($info_image_delete_query, 0, -1);
				$info_image_delete_query .= ')';

				DBM::query($info_image_delete_query, $database_link);
			}
		} else {
			$thumbnail_remove_query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;

			$deleted_images_array[] = $get_info_data->thumbnail;
		}
		DBM::query($thumbnail_remove_query, $database_link);
		

		foreach($deleted_images_array as $image_file) {
			
			@unlink($config['fpath'].$image_file);

			if(file_exists($config['fpath'].'thumb/'.$image_file))
			@unlink($config['fpath'].'thumb/'.$image_file);
		}
	} //deleting images end

	$file_types_array = array(
		'jpg' => 'image/jpeg',
		'jpeg' => 'image/jpeg',
		'gif' => 'image/gif',
		'png' => 'image/png',
		'bmp' => 'image/bmp'
	);

	$file_index = 0;
	foreach($_POST['photo'] as $image_name) {
		
		$image_info = pathinfo($image_name);
		if(array_key_exists(strtolower($image_info['extension']), $file_types_array)) {
			$_FILES['photo']['name'][$file_index] = $image_info['basename'];
			$_FILES['photo']['type'][$file_index] = $file_types_array[strtolower($image_info['extension'])];
			$_FILES['photo']['tmp_name'][$file_index] = $config['temp_file_folder'] . $image_info['basename'];
			$_FILES['photo']['thumbnail'][$file_index] = ($thumbnail !== $image_name ? false : true);
			$file_index++;
		}
	}

	if (strlen($title) > 0) {

   		// Updating
		foreach($_FILES['photo']['name'] as $key => $value) {

		if($_FILES['photo']['name'][$key] != ''){

		$photo = rand(1000,9999).$_FILES['photo']['name'][$key];
		$photo = str_replace(' ', '', $photo);

		if($_FILES['photo']['thumbnail'][$key]) $thumbnail = $photo;

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

		//upload && scale image
		$max_width = 800;
		$max_height = 600;
		list($width, $height) = getimagesize($_FILES['photo']['tmp_name'][$key]);
		$dimm = max_dimm($max_width, $max_height, $width, $height);
		//remove temp image
		@unlink($_FILES['photo']['tmp_name'][$key]);

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

	//===================================================================
		$src = imagecreatefrom($config['fpath'].$photo);	
		$tmp = ResizeSemiAbstractTop($src, $config['post_images']['width'], $config['post_images']['height']); // crop & scale
		createIMAGE ($config['fpath'].$photo, $tmp, $config['fpath'].$config['thumb_folder_name'].$photo, 100); // save image
		
	//===================================================================
		if(in_array($important_type, array(1,2,3)) && $_FILES['photo']['thumbnail'][$key]) {
			
			$src = imagecreatefrom($config['fpath'].$photo);	
			$tmp = ResizeSemiAbstractTop($src, $config['slider_post_images']['width'], $config['slider_post_images']['height']); // crop & scale
			createIMAGE ($config['fpath'].$photo, $tmp, $config['fpath'].$config['slider_folder_name'].$photo, 100); // save image 
		}

	//destroy temporary images
		imagedestroy($src);
		imagedestroy($tmp);

		foreach ($config['languages'] as $index => $val) {

		$insert_img_query = "INSERT INTO
										`bc_info_files`
									SET
										`file`='".$photo."',
										`info_id`=".$get_info_data->id.",
										`name`='".$photo_desc[$key]."',
										`language` = '".$val."'";

		DBM::query($insert_img_query, $database_link);

		}
	}

} 

//thumbnail update
if($thumbnail !== false && $get_info_data->thumbnail !== $thumbnail) {
	
	$thumbnail_update_query = "UPDATE `bc_info` SET `thumbnail` = '" . $thumbnail . "' WHERE `id` = '" . $get_info_data->id . "'";
	
	if(!$photo_to_language)
		$thumbnail_update_query .= " AND `language` = '" . $content_language . "'";

	DBM::query($thumbnail_update_query, $database_link);
	
	//generate slider photo
	if(in_array($important_type, array(1,2,3)) && $thumbnail != '') {
			
		$src = imagecreatefrom($config['fpath'].$thumbnail);	
		$tmp = ResizeSemiAbstractTop($src, $config['slider_post_images']['width'], $config['slider_post_images']['height']); // crop & scale
		createIMAGE ($config['fpath'].$thumbnail, $tmp, $config['fpath'].$config['slider_folder_name'].$thumbnail, 100); // save image 
	}
}


	if($edit_photo_desc) {

		foreach($edit_photo_desc as $key => $desc) {
			$key = (int)$key;
			$update_query = "UPDATE `bc_info_files` SET `name` = '".$desc."' WHERE id = '".$key."' AND `language` = '".$content_language."'";

			DBM::query($update_query, $database_link);
		}

	}

   	$update_query = "UPDATE `bc_info` SET `section_id` = '".DBM::escape($section_id)."' WHERE `id` = ".$get_info_data->id;

	DBM::query($update_query, $database_link);

   	$update_query = "UPDATE
   							`bc_info`
   								SET
							`title` = '" . DBM::escape($title) . "',
							`slug` = '" . $slug . "',
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
   							`published` = '" . DBM::escape($published) . "',
   							`start_date` = '" . DBM::escape($start_date) . "',
   							`end_date` = '" . DBM::escape($end_date) . "',
							`connected_info` = '".$news."',
							`connected_gall` = ".(int)$albums.",
   							`important` = '" . DBM::escape($important) . "',
							`important_type` = '". (int)$important_type ."',
							`url` = '". $url ."'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`language` = '" . $content_language . "'";

   		DBM::query($update_query, $database_link);
		}
		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
		echo "error";
		//updating end
}
?>

<form id="edit-form" name="section_edit_form" enctype="multipart/form-data" method="post">
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

				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>

			</tr>

			<tr class="hidden">

				<th class="text-right"><?php echo $TRANSLATION['in_calendar']; ?></th>
				<td>
					<select name="important">
                    	<option value="Y" <?php dropDown('Y', $get_info_data->important) ?>><?php echo $TRANSLATION['yes']; ?></option>
                        <option value="N" <?php dropDown('N', $get_info_data->important) ?>><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>

            </tr>
			<tr>

				<th class="text-right"><?php echo $TRANSLATION['display_in']; ?></th>
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

				<th class="text-right"><?php echo $TRANSLATION['image']; ?></th>
				<td>
                	<table><tr>
                    <td><input class="upload_button" name="photo[]" type="file" multiple="multiple" id="myFiles" />
						<table id="fileList" ></table>
                    </td>
										<td id="images-container"><table><?php echo $photo; ?></table></td>
                    <td><label for="photo_to_language"><?php echo $TRANSLATION['displayed_other_languages']; ?></label></td>
                    <td><input type="checkbox" id="photo_to_language" name="photo_to_language" checked="checked"/></td>
                    </tr></table>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('description', $get_info_data->description, 'basic', 200); ?>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
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

<script type="text/javascript">

var AllowedTypes = ['image/png', 'image/jpg', 'image/gif', 'image/jpeg'];

$('.upload_button').change(function() {

    var $fileList = $("#fileList");
    //$fileList.empty();

		for (var i = 0; i < this.files.length; i++) {
			var file = this.files[i];

			if($.inArray(file.type, AllowedTypes) === -1) {

				alert('<?php echo $TRANSLATION['file_type_error']; ?>');
				$(this).val('');
				return;
			}
		}

	var uploadImageCounter = 0;
    for (var i = 0; i < this.files.length; i++) {
				var file = this.files[i];
				var postData = new FormData();
				postData.append("upload_image", "true");
				postData.append("image", file);
				$.ajax({
					type: "POST",
					url: "ajax/image_uploader.php",
					data: postData,
					processData: false,
					contentType: false,
					success: function(data){
						$fileList.append(
							'<tr class="upload-image"><td><img width="128px" src="' + data.src + '"/></td>' +
							'<td><label><input type="radio" name="thumbnail" value="'+ data.name +'" required>Thumbnail</input></label><input type="hidden" name="photo[]" value="' + data.name + '"/>' +
							'<input type="text" name="photo_desc[]"/></td>' +
							'<td><button id="remove-button-for-' + uploadImageCounter + '" class="btn btn-mini btn-danger"><i class="icon-remove"></i></button></td></tr>'
						);
						$("#remove-button-for-" + uploadImageCounter).click(function() {
							$(this).closest("tr").remove();
							var postData = new FormData();
							postData.append("remove_image", data.name);
							$.ajax({
								type: "POST",
								url: "ajax/image_uploader.php",
								data: postData,
								processData: false,
								contentType: false
							});
						});

						uploadImageCounter++;
					}
				});
    }
		$(this).val('');
});

$(".info_images a").click(function() {
	var id = $(this).attr('id');
	$(this).closest("tr").html('<input type="hidden" name="deleteImgs[]" value="' + id + '"/>');
});

$(".thumbnail-remove-button").click(function() {
	$(this).closest("tr").html('<input type="hidden" name="deleteImgs[]"/>');
});

$("#file-selector-button").click(function() {
	if($("#file-selector .modal-body").html() == '') {
		xhttp = getXHR();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState !== XMLHttpRequest.DONE) {
				return;
			}
			if (xhttp.status !== 200) {
				return;
			}
			$("#file-selector .modal-body").html(xhttp.responseText);
		};
		xhttp.open("GET", "ajax/compact_fm.php", true);
		xhttp.send();
		//?page=99&language=en&mode=compact&
	}
});

</script>
