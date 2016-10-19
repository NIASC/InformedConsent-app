<?php

if(INSYS != 'pc777') die('404');


// Add Section
if (isset($_POST['doAdd'])) {

	// Grab Variables

	$title = extractPost('title');
	$slug = convert_to_slug(date('Y-m-d', strtotime(extractPost('start_date'))).'-'.DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$section_id = (int) extractGet('section_id');
	$published = extractPost('published');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$slider = extractPost('slider');
	$important = extractPost('important');
	$albums = extractPost('albums');
	$important_type = extractPost('important_type');
	$url = extractPost('url');
	$photo_desc = extractPost('photo_desc');
	$thumbnail = extractPost('thumbnail');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}


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

		//================================insert post multy images=========================
		foreach($_FILES['photo']['name'] as $key => $value) {

		//upload image
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
	//======================================================================================

		$src = imagecreatefrom($config['fpath'].$photo);	
		$tmp = ResizeSemiAbstractTop($src, $config['post_images']['width'], $config['post_images']['height']); // crop & scale
		createIMAGE ($config['fpath'].$photo, $tmp, $config['fpath'].$config['thumb_folder_name'].$photo, 100); // save image
		
	//===================================================================
		if(in_array($important_type, array(1,2,3)) && $_FILES['photo']['thumbnail'][$key]) {
			
			$src = imagecreatefrom($config['fpath'].$photo);	
			$tmp = ResizeSemiAbstractTop($src, $config['slider_post_images']['width'], $config['slider_post_images']['height']); // crop & scale
			createIMAGE ($config['fpath'].$photo, $tmp, $config['fpath'].$config['slider_folder_name'].$photo, 100); // save image 
		}

	//======================================================================================
		//destroy temporary images
		imagedestroy($src);
		imagedestroy($tmp_full);
		imagedestroy($tmp);

		//save into db
		foreach ($config['languages'] as $index => $val) {

			$insert_query = "INSERT INTO
									`bc_info_files`
										SET
									`name` = '".$photo_desc[$key]."',
									`info_id` = ".$real_info_id.",
									`file` = '".$photo."',
									`language` = '".$val."'";

			DBM::query($insert_query, $database_link);

			$insert_id = DBM::insertID($database_link);
			}

		}}

		//insert relations
		$post_news = extractPost('post_news');

		if($post_news)
		foreach ($post_news as $news_id) {

			$insert_query = "INSERT INTO
								`bc_relationship`
									SET
								`description` = 'news_to_news',
								`from` = ".$real_info_id.",
								`to` = ".$news_id."";

			DBM::query($insert_query, $database_link);

   			$insert_id = DBM::insertID($database_link);
		}


   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {

   			// Generating Name
   			if ($val != $content_language) {
   				$real_title = $title . ' (' . $val . ')';
				$real_published = 'N';
   			} else {
	   			$real_title = $title;
				$real_published = $published;

   			}



   			// Inserting

   			$insert_query = "INSERT INTO
   								`bc_info`
   									SET
   								`id` = " . $real_info_id . ",
   								`section_id` = '" . $section_id . "',
   								`language` = '" . $val . "',
   								`title` = '" . DBM::escape($real_title) . "',
								`slug` = '" . $slug . "',
   								`description` = '" . DBM::escape($description) . "',
   								`content` = '" . DBM::escape($content) . "',
   								`published` = '" . DBM::escape($real_published) . "',
   								`start_date` = '" . DBM::escape($start_date) . "',
   								`end_date` = '" . DBM::escape($end_date) . "',
   								`important` = '" . DBM::escape($important) . "',
								`connected_gall` = ".(int)$albums.",
   								`thumbnail` = '". ($thumbnail !== false ? $thumbnail : '') ."',
								`important_type` = '". $important_type ."',
								`url` = '". $url ."'";

   			DBM::query($insert_query, $database_link);

   			$insert_id = DBM::insertID($database_link);
   			   			echo mysql_error();
   		}

   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);

   		die();

   	}

}


?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['new_post']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>

</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">

	<table class="table">

		<tbody>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
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

                        echo '<option value="'.$get_settings_data->value.'">'.$get_settings_data->description.'</option>';

						}
                    ?>
					</select>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('description', $description, 'basic', 200); ?>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
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

				<th class="text-right"><?php echo $TRANSLATION['image']; ?></th>
				<td>
                	<input class="upload_button" name="photo[]" type="file" multiple="multiple" id="myFiles" />
					<table id="fileList" ></table>
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
					<input type="submit" name="doAdd" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
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
    $fileList.empty();

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
							'<td><a id="remove-button-for-' + uploadImageCounter + '" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a></td></tr>'
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
