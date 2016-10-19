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
		
		
		//insert relations
		$post_news = extractPost('post_news');

		if($post_news)			
		foreach ($post_news as $news_id){
			
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
   								`thumbnail` = '". $thumbnail ."',
								`important_type` = '". $important_type ."',
								`url` = '". $url ."'";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
			
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
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
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
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['display_in']; ?></th>
				<td>
                	<select name="important_type">
                    	<option value="0"><?php echo $TRANSLATION['no']; ?></option>
                        <option value="1"><?php echo $TRANSLATION['yes']; ?></option>
					</select>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('description', $description, 'basic', 200); ?>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td>
					<?php echo getEditor('content', $content, 'full', 400); ?>
				</td>
				
			</tr>
			
            <tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['start_date']; ?></th>
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

    for (var i = 0; i < this.files.length; i++) {
        var file = this.files[i];
		
        $fileList.append('<tr><td>' + file.name +'</td><td>'+ Math.round(file.size / 1024 * 100)/100 + 'KB</td><td><input type="text" name="photo_desc[]"/></td></tr>');
    }
});


</script>