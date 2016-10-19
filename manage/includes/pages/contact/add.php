<?php

// Add Section
if (isset($_POST['doAdd'])) {
	
	// Grab Variables
	
	$title = extractPost('title');
	$description = extractPost('description');
	$thumbnail = extractPost('thumbnail');
	$url = extractPost('url');
	$content = extractPost('content');
	$lng = extractPost('lng');
	$lat = extractPost('lat');
	$section_id = (int) extractGet('section_id');
	$important = extractPost('important');
	$published = extractPost('published');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
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
								`lng` = '" . DBM::escape($lng) . "', 
								`lat` = '" . DBM::escape($lat) . "',
								`important` = '" . DBM::escape($important) . "', 
   								`published` = '" . DBM::escape($published) . "',
   								`url` = '" . DBM::escape($url) . "',
								`thumbnail` = '". DBM::escape($thumbnail) ."'";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
   			   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
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
		<h4><?php echo $TRANSLATION['add_page']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
            
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['in_map']; ?></th>
				<td>
					<select name="important">
                    	<option value="Y"><?php echo $TRANSLATION['yes']; ?></option>
                    	<option value="N"><?php echo $TRANSLATION['no']; ?></option>
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
					<input type="text" placeholder="<?php echo $TRANSLATION['longitude']; ?>" name="lng" id="lng" class="hidden input-small" />
                    <input type="text" placeholder="<?php echo $TRANSLATION['latitude']; ?>" name="lat" id="lat" class="hidden input-small" />
                    <input type="text" placeholder="<?php echo $TRANSLATION['address']; ?>" name="address" id="address" class="hidden input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['address']; ?></th>
				<td>
					<input type="text" name="description" class="input-xxlarge"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['phone']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="thumbnail" class="input-xxlarge"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td>
					<?php echo getEditor('content', $content, 'full', 400); ?>
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
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
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