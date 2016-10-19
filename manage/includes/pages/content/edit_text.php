<?php

if(INSYS != 'pc777') die('404');

// Add Section
if (isset($_POST['doEdit'])) {

	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$photo_to_language = extractPost('photo_to_language');

	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}

	if (strlen($title) > 0) {

   		// Updating

		if($_FILES['photo']['name'] != ''){

		if(file_exists($config['fpath'].$get_info_data->thumbnail))
	 	@unlink($config['fpath'].$get_info_data->thumbnail);

		if(file_exists($config['fpath'].'small_'.$get_info_data->thumbnail))
		@unlink($config['fpath'].'small_'.$get_info_data->thumbnail);

		if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
		@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);

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
		
		$max_width = 235;
		$max_height = 300;
		list($width, $height) = getimagesize($config['fpath'].$photo);
		$dimm = max_dimm($max_width, $max_height, $width, $height);
		
		$tmp1 = ResizeSemiAbstractTop($src, $dimm['width'], $dimm['height']);
		//save image
		switch ($remote_file)
		{
			case 'image/jpeg':
				imagejpeg($tmp1,$config['fpath'].'small_'.$photo, 100);
			break;
			case 'image/gif':
				imagegif($tmp1,$config['fpath'].'small_'.$photo, 100);
			break;
			case 'image/png':
				imagepng($tmp1,$config['fpath'].'small_'.$photo, 9);
			break;
			case "image/bmp":
				imagewbmp($tmp1,$config['fpath'].'small_'.$photo, 100);
			break;
		}

		//destroy temporary images
		imagedestroy($src);
		imagedestroy($tmp1);

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
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
   							`published` = '" . DBM::escape($published) . "'
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
@unlink($config['fpath'].'small_'.$get_info_data->thumbnail);
if(file_exists($config['fpath'].'thumb/'.$get_info_data->thumbnail))
@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);

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
		<h4><?php echo $TRANSLATION['edit_text_page']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
		<a href="<?php echo $config['site_address'].$get_pages_data->language.''.$get_section_data->slug.'?info_id=' . $get_pages_data->id . '&preview'; ?>" target="_blank" class="btn btn-warning"><?php echo $TRANSLATION['view']; ?></a>
	</div>

</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">

	<table class="table">

		<tbody>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
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

				<th class="text-right"><?php echo $TRANSLATION['image']; ?></th>
				<td>
                	<table><tr>
                    <td><input type="file" name="photo"/></td>
					<?php echo $photo; ?>
                    <td><label for="photo_to_language"><?php echo $TRANSLATION['displayed_other_languages']; ?></label></td>
                    <td><input type="checkbox" id="photo_to_language" name="photo_to_language" checked="checked"/></td>
                    </tr></table>
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
