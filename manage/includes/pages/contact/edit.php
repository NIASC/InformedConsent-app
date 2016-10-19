<?php

// Add Section
if (isset($_POST['doEdit'])) {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$description = extractPost('description');
	$url = extractPost('url');
	$thumbnail = extractPost('thumbnail');
	$content = extractPost('content');
	$published = extractPost('published');
	$lng = extractPost('lng');
	$lat = extractPost('lat');
	$important = extractPost('important');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
				
		// Updating
   			
   		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`title` = '" . DBM::escape($title) . "',
   							`description` = '" . DBM::escape($description) . "',
   							`url` = '" . DBM::escape($url) . "',
   							`thumbnail` = '" . DBM::escape($thumbnail) . "',
   							`content` = '" . DBM::escape($content) . "',
							`lng` = '" . DBM::escape($lng) . "',
							`lat` = '" . DBM::escape($lat) . "',
							`important` = '" . DBM::escape($important) . "',
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

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['edit_page']; ?></h4>
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
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>
            
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['in_map']; ?></th>
				<td>
					<select name="important">
                    	<option value="Y" <?php echo dropDown('Y', $get_info_data->important); ?>><?php echo $TRANSLATION['yes']; ?></option>
                    	<option value="N" <?php echo dropDown('N', $get_info_data->important); ?>><?php echo $TRANSLATION['no']; ?></option>
                    </select>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['location']; ?></th>
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
					<input type="text" placeholder="<?php echo $TRANSLATION['longitude']; ?>" name="lng" id="lng" class="input-small hidden" value="<?php echo $get_info_data->lng; ?>"/>
                    <input type="text" placeholder="<?php echo $TRANSLATION['latitude']; ?>" name="lat" id="lat" class="input-small hidden" value="<?php echo $get_info_data->lat; ?>"/>
                    <input type="text" placeholder="<?php echo $TRANSLATION['address']; ?>" name="address" id="address" class="hidden input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['address']; ?></th>
				<td>
					<input type="text" name="description" value="<?php echo $get_info_data->description; ?>" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['phone']; ?></th>
				<td>
					<input type="text" name="url" value="<?php echo $get_info_data->url; ?>" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="thumbnail" value="<?php echo $get_info_data->thumbnail; ?>" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td>
					<?php echo getEditor('content', $get_info_data->content, 'full', 400); ?>
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