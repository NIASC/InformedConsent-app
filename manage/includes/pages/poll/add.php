<?php

// Add Section
if (extractPost('doAdd') == 'დამატება') {
	
	// Grab Variables
	
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$section_id = (int) extractGet('section_id');
	$published = extractPost('published');
	$question = extractPost('question');
	$important_type = extractPost('important_type');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {
		
		if($_FILES['photo']['name']){
			
			$photo = rand(1000,9999).$_FILES['photo']['name'];
		
			$photo = str_replace(' ','',$photo);
		
			move_uploaded_file($_FILES['photo']['tmp_name'], $config['fpath'].$photo);
		
			$src = imagecreatefrom($config['fpath'].$photo);
		
			$tmp2 = ResizeSemiAbstractTop($src, 270, 180); // crop & scale
		
			createIMAGE ($config['fpath'].$photo, $tmp2, $config['fpath'].'thumb/'.$photo, 100); // save image 	
			
			@unlink($config['fpath'].$photo);		
			//destroy temporary images 
			imagedestroy($src); 
			imagedestroy($tmp2);
		}
		
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
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`bc_info`
   									SET
   								`id` = " . $real_info_id . ",
   								`section_id` = '" . $section_id . "',
   								`language` = '" . $content_language . "',
   								`title` = '" . DBM::escape($title) . "',
								`slug` = '" . convert_to_slug((int)$real_info_id.'-'.DBM::escape($title)) . "',
   								`description` = '" . DBM::escape($description) . "',
   								`content` = '" . DBM::escape($content) . "',
   								`published` = '" . DBM::escape($published) . "',
								`start_date` = '". DBM::escape($start_date) ."',
								`end_date` = '". DBM::escape($end_date) ."',
								`important_type` = '". (int)$important_type ."',
								`thumbnail` = '". $photo ."'";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
			
			foreach($question as $index => $que) {
				
				$query = "INSERT INTO `bc_info_additional` 
							SET 
							`language` = '".$content_language."',
							`info_id` = '".$real_info_id."',
							`text` = '".$que."',
							`value` = '".$answer[$index]."',
							`result` = '0'";
			DBM::query($query, $database_link);
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
		<h4>გვერდის დამატება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">დაბრუნება კროსვორდების სიაში</a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
        
		<tbody id="container">
		
			<tr>
				
				<th class="text-right">ტექსტი</th>
				<td colspan="2">
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
		
			<tr>
				
				<th class="text-right">სურათი</th>
				<td colspan="2">
					<input type="file" name="photo"/>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">კატეგორია</th>
				<td colspan="2">
                	<select name="important_type">
                    	<option value="0"></option>				
					<?php
                    $get_settings_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'important_post_type' ORDER BY `value`";
                                
                    if ($get_settings_result = DBM::queryData($get_settings_query)){
                        
                        while ($get_settings_data = DBM::fetchObject($get_settings_result))
                        
                        echo '<option value="'.$get_settings_data->value.'">'.$get_settings_data->description.'</option>';
                        
						}
                    ?>
					</select>
				</td>
				
			</tr>
		
			<tr class="hidden">
				
				<th class="text-right">აღწერა</th>
				<td colspan="2">
					<input type="text" name="description" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">ტექსტი</th>
				<td colspan="2">
					<input type="text" name="content" class="numeric" value="<?php echo $get_info_data->content;?>"/>
				</td>
				
			</tr>
		
			<tr>	
            	<th></th>			
				<td><input type="text" placeholder="ვარიანტი" name="question[]" class="input-xxlarge" /></td>
                <td><a href="#" class="btn btn-danger">-</a></td>			
			</tr>
		
			<tr>	
            	<th></th>			
				<td><input type="text" placeholder="ვარიანტი" name="question[]" class="input-xxlarge" /></td>
                <td><a href="#" class="btn btn-danger">-</a></td>			
			</tr>
            		
		</tbody>
        <script type="text/javascript">
		var index = 1;
		$(document).ready(function() {
			
			$('.row-remove').live('click', function() {
				var id = $(this).attr('title');
				$('#row'+id).remove();
				return false;
			});
			
			$('#add').click(function(){
				index++;
				$('#container').append('<tr id="row'+index+'"><td></td><td><input type="text" placeholder="ვარიანტი" name="question[]" class="input-xxlarge" /></td><td><a href="#" class="btn btn-danger row-remove" title="'+index+'">-</a></td></tr>');	
				return false;	
			});
		});
		</script>
        <tfoot>
            
        	<tr>
            	<th></th>
                <td colspan="2"><a href="#" id="add" class="btn">+ ველის დამატება</a></td>
            </tr>
			
            <tr>
				
				<th class="text-right">საწყისი თარიღი</th>
				<td colspan="2">
					<input type="text" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
            <tr>
				
				<th class="text-right">დამთავრების თარიღი</th>
				<td colspan="2">
					<input type="text" name="end_date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
        	
            <tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td colspan="2">
					<select name="published">
						<option value="Y">კი</option>
						<option value="N">არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td colspan="2">
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doAdd" value="დამატება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>    
				
			</tr>
        </tfoot>
		
	</table>
	
</form>