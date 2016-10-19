<?php

// Grab ID
$pk = (int) extractGet('info_pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Edit Section
if (extractPost('doEdit') == $TRANSLATION['save']) {

	// Grab Variables

	$title = extractPost('title');
	$description = extractPost('description');
	$active = extractPost('active');
	$date = extractPost('date');
	$section_id = extractPost('section_id');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
	}
	
	if (strlen($title) > 0) {
   		   		
   		// Updating
   		
   		$update_query = "UPDATE
   							`bc_gallery_group`
   								SET
   							`section_id` = '" . DBM::escape($section_id) . "',							
   							`title` = '" . DBM::escape($title) . "',
   							`description` = '" . DBM::escape($description) . "',
							`date` = '".DBM::escape($date)."',
   							`active` = '" . DBM::escape($active) . "'
   								WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

// Get Data for Current Section
$get_section_query = "SELECT * FROM
						`bc_gallery_group`
							WHERE
						`bc_gallery_group`.`pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);

$slug_array = explode('/', $get_section_data->slug);

$real_slug = end($slug_array);

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['edit_page']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_edit_form" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['page']; ?></th>
				<td>
					<select name="section_id">
					<?php
                    
                    echo getSectionsByType($page_type, $content_language, $database_link, $get_section_data->section_id);
                    
                    ?>
                	</select>
				</td>
				
			</tr>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" value="<?php echo $get_section_data->title; ?>" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<?php echo getEditor('description', $get_section_data->description, 'basic', 200); ?>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo $get_section_data->date; ?>"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td>
					<select name="active">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->active); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_section_data->active); ?>><?php echo $TRANSLATION['no']; ?></option>
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