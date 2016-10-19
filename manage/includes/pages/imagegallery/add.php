<?php
//add gallery
if (extractPost('doAdd') == $TRANSLATION['save']) {

	// Grab Variables
	$title = extractPost('title');
	$description = extractPost('description');
	$thumbnail = extractPost('thumbnail');
	$active = extractPost('active');
	$date = extractPost('date');
	$section_id = extractPost('section_id');

	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
	}

	if (strlen($title) > 0) {

		// Selecting Max Section ID
		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_gallery_group`";

		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
			$max_id_data = DBM::fetchObject($max_id_result);
			$max_id = $max_id_data->max_id;
		} else {
			$max_id = 0;

		}
		// Get Next ID
		$group_real_id = $max_id + 1;

		// Selecting Max Sort
		$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_gallery_group` WHERE `language` = '" . $content_language . "'";

		if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
			$max_sort_data = DBM::fetchObject($max_sort_result);
			$max_sort = $max_sort_data->max_sort;
		} else {
			$max_sort = 0;
		}
		$group_real_sort = $max_sort + 1;



		// Cycle of Languages
		foreach ($config['languages'] as $key => $val) {

			// Generating Name
			if ($val != $content_language) {
				$real_title = $title . ' (' . $val . ')';
			} else {
				$real_title = $title;
			}

			// Inserting
			$query = "INSERT INTO `bc_gallery_group`
						SET
							`id` = ". $group_real_id .",
							`section_id` = ". $section_id .",
							`title` = '". DBM::escape($title) ."',
							`description` = '". DBM::escape($description) ."',
							`language` = '". $val. "',
							`date` = '".DBM::escape($date)."',
							`active` = '". DBM::escape($active) ."',
							`sort` = ". $group_real_sort ."";

			DBM::query($query, $database_link);
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
		//add photos
		if($_FILES['photo']['name'][0]!='') {
			//foreach start
			foreach($_FILES['photo']['name'] as $key => $value) {

				$photo = rand(1000,9999).$_FILES['photo']['name'][$key];
				$photo = str_replace(' ','',$photo);

				if($_FILES['photo']['thumbnail'][$key]) $thumbnail = $photo;

				$remote_file = $_FILES['photo']['type'][$key];

				switch ($remote_file) {
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

				$max_width = 800;
				$max_height = 600;
				list($width, $height) = getimagesize($_FILES['photo']['tmp_name'][$key]);
				$dimm = max_dimm($max_width, $max_height, $width, $height);
				//remove temp image
				@unlink($_FILES['photo']['tmp_name'][$key]);

				$tmp_full = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
				//save big image
				switch ($remote_file) {
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
				//======================= small image ===========================

				$src = imagecreatefrom($config['fpath'].$photo);

				$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_images']['width'], $config['gallery_images']['height']); // crop & scale
				createIMAGE ($config['fpath'].$photo, $tmp2, $config['fpath'].$config['thumb_folder_name'].$photo, 100); // save image


				//destroy temporary images
				imagedestroy($src);
				imagedestroy($tmp2);


				// Selecting Max Section ID

				$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_gallery`";

				if($max_id_result = DBM::queryData($max_id_query, $database_link)) {
					$max_id_data = DBM::fetchObject($max_id_result);
					$max_id = $max_id_data->max_id;
				} else {
					$max_id = 0;
				}
				// Get Next ID
				$photo_real_id = $max_id + 1;

				// Selecting Max Sort
				$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_gallery` WHERE `language` = '" . $content_language . "'";

				if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
					$max_sort_data = DBM::fetchObject($max_sort_result);
					$max_sort = $max_sort_data->max_sort;
				} else {
					$max_sort = 0;
				}

				$photo_real_sort = $max_sort + 1;
				// Cycle of Languages
				foreach ($config['languages'] as $key => $val) {
					// Generating Name
					if ($val != $content_language) {
						$real_title = $title . ' (' . $val . ')';
					} else {
						$real_title = $title;
					}

					$query = "INSERT INTO
							`bc_gallery`
							SET
							`id` = ". $photo_real_id .",
							`file` = '". $photo ."',
							`title` = '". DBM::escape($title) ."',
							`description` = '". DBM::escape($description) ."',
							`language` = '". $val. "',
							`group_id` = ". $group_real_id .",
							`display` = '". DBM::escape($active) ."',
							`top` = '". DBM::escape($top) ."',
							`date` = '". $date ."',
							`sort` = ". $photo_real_sort ."";

					DBM::query($query, $database_link);
				}
			}//foreach end
		}//add photos end

		//set thumbnail
		if($thumbnail !== false) {
			$update_query = "UPDATE `bc_gallery_group` SET `thumbnail` = '". $thumbnail ."' WHERE `id` = ".$group_real_id;

			DBM::query($update_query, $database_link);

			$src = imagecreatefrom($config['fpath'].$thumbnail);
			$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_cover']['width'], $config['gallery_cover']['height']); // crop & scale
			createIMAGE ($config['fpath'].$thumbnail, $tmp2, $config['fpath'].$config['thumb_folder_name'].'thumb_'.$thumbnail, 100); // save image
			imagedestroy($src);
			imagedestroy($tmp2);
		}

		header('location: ?page=' . $current_page_id . '&language=' . $content_language);

		die();
	}
}
?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['new_gallery']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>

</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">

	<table class="table">

		<tbody>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['page']; ?></th>
				<td>
					<select name="section_id">
					<?php

                    echo getSectionsByType($page_type, $content_language, $database_link, $section_id);

                    ?>
                	</select>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>

			</tr>

			<tr class="hidden">

				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('description', $description, 'basic', 200); ?>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo date("Y-m-d H:i:s"); ?>"/>
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
					<select name="active">
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

</script>
