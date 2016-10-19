<?php

// Grab ID
$pk = (int) extractGet('pk');
$gall_id = (int) extractGet('gall_id');

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
	$embed = extractPost('embed');
	$top = extractPost('top');
	$date = extractPost("date");
	
	if (strlen($title) > 0) {
   		   		
   		// Updating
   		
   		$update_query = "UPDATE
   							`bc_video_gal`
   								SET
   							`title` = '" . DBM::escape($title) . "',
							`embed` =  '" . DBM::escape($embed). "',
   							`description` = '" . DBM::escape($description) . "',
							`top` = '" . $top . "',
							`date` = '" . $date . "',
   							`display` = '" . DBM::escape($active) . "'
   								WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language.'&act=content&pk='.$gall_id);
   		
   		die();
   		
   	}
   	
}
//

// Get Data for Current Section
$get_section_query = "SELECT * FROM
						`bc_video_gal`
							WHERE
						`bc_video_gal`.`pk` = " . $pk;

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
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" class="input-xxlarge" value="<?php echo $get_section_data->title; ?>" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">URL</th>
				<td><input type="text" name="embed" value="<?php echo $get_section_data->embed; ?>"/></td>
				
			</tr>
            
            <tr class="hidden">
				
				<th class="text-right">ფაილი</th>
				<td>
					<img src="<?php echo $config['fpath'].$config['thumb_folder_name'].'small_'.$get_section_data->file; ?>" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">თარიღი</th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo $get_section_data->date; ?>"/>
				</td>
				
			</tr>
			
			
			<tr class="hidden">
				
				<th class="text-right">გამოჩნდეს ტოპ ვიდეოდ</th>
				<td>
					<select name="top">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->top); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_section_data->top); ?>>არა</option>
					</select>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right">აქტიური</th>
				<td>
					<select name="active">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->display); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_section_data->display); ?>>არა</option>
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