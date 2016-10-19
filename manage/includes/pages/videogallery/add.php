<?php
//add gallery
if (extractPost('doAdd') == 'დამატება') {
	
	// Grab Variables
	$title = extractPost('title');
	$description = extractPost('description');
	$thumbnail = extractPost('thumbnail');
	$active = extractPost('active');
	$date = extractPost('date');
	$section_id = extractPost('section_id');

if (strlen($title) > 0) {
	
	// Selecting Max Section ID
	
	$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_video_gal_group`";
	
	if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_id = 0;
   			
   		}
		// Get Next ID
   		$real_id = $max_id + 1;
		
		// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_video_gal_group` WHERE `language` = '" . $content_language . "'";
   			
   			if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
   			
   				$max_sort_data = DBM::fetchObject($max_sort_result);
   				
   				$max_sort = $max_sort_data->max_sort;
   				
   			} else {
   			
   				$max_sort = 0;
   				
   			}
		$real_sort = $max_sort + 1;
		
		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val){
			
			// Generating Name
   			if ($val != $content_language) {
   				$real_title = $title . ' (' . $val . ')';
   			} else {
	   			$real_title = $title;

   			}
   			
   			// Inserting
			$query = "INSERT INTO 
				`bc_video_gal_group` 
					SET
				`id` = ". $real_id .",
   				`section_id` = '" . DBM::escape($section_id) . "',
				`title` = '". DBM::escape($title) ."',
				`description` = '". DBM::escape($description) ."',
				`thumbnail` = '". DBM::escape($thumbnail) ."',
				`language` = '". $val. "',
				`active` = '". DBM::escape($active) ."',
				`date` = '".DBM::escape($date)."',
				`sort` = ". $real_sort ."";
				
			DBM::query($query, $database_link);
			}
			
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
	}
}
?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>გალერიის დამატება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">არსებული გალერიები</a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>

				<th class="text-right">გვერდი</th>
				<td>
					<select name="section_id">
					<?php

                    echo getSectionsByType($page_type, $content_language, $database_link, $section_id);

                    ?>
                	</select>
				</td>

			</tr>
		
			<tr>
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">აღწერა</th>
				<td>
					<?php echo getEditor('description', $description, 'basic', 200); ?>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">თარიღი</th>
				<td>
					<input type="text" name="date" class="input-large datetimepicker"  value="<?php echo date("Y-m-d H:i:s"); ?>"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td>
					<select name="active">
						<option value="Y">კი</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doAdd" value="დამატება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>