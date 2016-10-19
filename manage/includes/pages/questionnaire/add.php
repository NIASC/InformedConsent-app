<?php

// Add Section
if (extractPost('doAdd') == $TRANSLATION['save']) {
	
	// Grab Variables
	
	$title = extractPost('title');
	$description = extractPost('description');
	$content = extractPost('content');
	$section_id = (int) extractGet('section_id');
	$published = extractPost('published');
	$question = extractPost('question');
	$answer = extractPost('answer');
	$answer_value = extractPost('answer_value');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$important_type = extractPost('important_type');
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
								`important_type` = '". (int)$important_type ."',
   								`start_date` = '" . DBM::escape($start_date) . "',
   								`end_date` = '" . DBM::escape($end_date) . "',
								`thumbnail` = '". $photo ."'";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
			
			foreach($question as $index => $que) {
				
				$query = "INSERT INTO `bc_info_additional` 
							SET 
							`language` = '".$content_language."',
							`info_id` = '".$real_info_id."',
							`question` = '".$que."',
							`param_1` = '".$answer[$index][0]."',
							`param_2` = '".$answer[$index][1]."',
							`param_3` = '".$answer[$index][2]."',
							`param_4` = '".$answer[$index][3]."',
							`value` = '".$answer_value[$index]."'";
							
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
		<h4><?php echo $TRANSLATION['new_questionnaire'] ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back'] ?></a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
        
		<tbody id="container">
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title'] ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
                <td></td>
				
			</tr>
		
			<tr>	
            	<th><?php echo $TRANSLATION['question'] ?></th>
				<td><input type="text" placeholder="<?php echo $TRANSLATION['question'] ?>" name="question[0]" class="input-xxlarge" />
                
                	<ul>
                    	<li><input type="radio" name="answer_value[0]" value="1" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>1" name="answer[0][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[0]" value="2" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>2" name="answer[0][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[0]" value="3" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>3" name="answer[0][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[0]" value="4" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>4" name="answer[0][]" class="input-large" />
                        </li>
					</ul>
                </td>
                <td><a href="#" class="btn btn-danger">-</a></td>			
			</tr>
            		
		</tbody>
        <script type="text/javascript">
		var index = 0;
		$(document).ready(function() {
			
			$('.row-remove').live('click', function() {
				var id = $(this).attr('title');
				$('#row'+id).remove();
				index--;
				return false;
			});
			
			$('#add').click(function(){
				index++;
				$('#container').append('<tr id="row'+index+'"><th></th><td><input type="text" placeholder="<?php echo $TRANSLATION['question'] ?>" name="question['+index+']" class="input-xxlarge" /><ul><li><input type="radio" name="answer_value['+index+']"  value="1" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>1" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="2" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>2" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="3" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>3" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="4" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>4" name="answer['+index+'][]" class="input-large" /></li></ul></td><td><a href="#" class="btn btn-danger row-remove" title="'+index+'">-</a></td></tr>');	
				return false;	
			});
		});
		</script>
        <tfoot>
			
            <tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['date'] ?></th>
				<td>
					<input type="text" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
            
        	<tr>
            	<th></th>
                <td></td>
                <td><a href="#" id="add" class="btn btn-warning">+<?php echo $TRANSLATION['add_question'] ?></a></td>
            </tr>
        	
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published'] ?></th>
				<td>
					<select name="published">
						<option value="Y"><?php echo $TRANSLATION['yes'] ?></option>
						<option value="N"><?php echo $TRANSLATION['no'] ?></option>
					</select>
				</td>                
                <td></td>
                <td></td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doAdd" value="<?php echo $TRANSLATION['save'] ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel'] ?>" class="btn btn-warning" />
				</td>    
                <td></td>            
                <td></td>
				
			</tr>
        </tfoot>
		
	</table>
	
</form>