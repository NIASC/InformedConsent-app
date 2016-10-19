<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Edit Section
if (extractPost('doEdit') == 'შეცვლა') {

	// Grab Variables

	$title = extractPost('title');
	$description = extractPost('description');
	$active = extractPost('active');
	$date = extractPost('date');
	$section_id = extractPost('section_id');
	
	if (strlen($title) > 0) {
   		   		
   		// Updating
   		
   		$update_query = "UPDATE
   							`bc_video_gal_group`
   								SET
   							`title` = '" . DBM::escape($title) . "',
   							`section_id` = '" . DBM::escape($section_id) . "',	
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
						`bc_video_gal_group`
							WHERE
						`bc_video_gal_group`.`pk` = " . $pk;

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
		<h4>გვერდის ცვლილება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">არსებული გვერდები</a>
	</div>
	
</div>

<form name="section_edit_form" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right">გვერდი</th>
				<td>
					<select name="section_id">
					<?php
                    
                    echo getSectionsByType($page_type, $content_language, $database_link, $get_section_data->section_id);
                    
                    ?>
                	</select>
				</td>
				
			</tr>
		
			<tr>
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" class="input-xxlarge" value="<?php echo $get_section_data->title; ?>" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $get_section_data->description, 'basic', 200); ?>
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">თარიღი</th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo $get_section_data->date; ?>"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">აქტიური</th>
				<td>
					<select name="active">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->active); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_section_data->active); ?>>არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="შეცვლა" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>