<?php

if(INSYS != 'pc777') die('404');

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
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
		
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
		
   		header('location: ?page='.$current_page_id.'&act='.$current_act.'&language='.$content_language.'&section_id='.$section_id.'&info_pk=' . $info_pk);
   		
   		die();
   	}
   	
}


?>

<form name="section_edit_form" enctype="multipart/form-data" method="post">
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
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
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
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['display_in']; ?></th>
				<td>
					<select name="important_type">
                    	<option value="0" <?php echo dropDown(0, $get_info_data->important_type);?>><?php echo $TRANSLATION['no']; ?></option>			
                        <option value="1" <?php echo dropDown(1, $get_info_data->important_type);?>><?php echo $TRANSLATION['yes']; ?></option>
					</select>
				</td>
				
			</tr>	
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['images']; ?></th>
				<td>
                	<table><tr>
                    <td><input class="upload_button" name="photo[]" type="file" multiple="multiple" id="myFiles" />
						<table id="fileList" ></table>
                    </td>
					<?php echo $photo; ?>
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
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td>
					<?php echo getEditor('content', $get_info_data->content, 'full', 400); ?>
				</td>
				
			</tr>	
			
            <tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['start_date']; ?></th>
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
    $fileList.empty();
	
	for (var i = 0; i < this.files.length; i++) {
        var file = this.files[i];
		
		if($.inArray(file.type, AllowedTypes) === -1) {
			
			alert('<?php echo $TRANSLATION['file_type_error']; ?>');			
			$(this).val('');
			return;
		}
	}

    for (var i = 0; i < this.files.length; i++) {
        var file = this.files[i];
		
        $fileList.append('<tr><td>' + file.name +'</td><td>'+ Math.round(file.size / 1024 * 100)/100 + 'KB</td><td><input type="text" name="photo_desc[]"/></td></tr>');
    }
});

</script>