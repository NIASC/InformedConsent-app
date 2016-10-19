<?php
if(INSYS != 'pc777') die('404');

// Edit Section
if (extractPost('doEdit') == $TRANSLATION['save']) {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractPost('section_id');
	$title = extractPost('title');
	$slug = convert_to_slug(DBM::escape($title));
	$description = extractPost('description');
	$content = extractPost('content');
	$published = extractPost('published');
	$question = extractPost('question');
	$questionIDs = extractPost('id');
	$answer = extractPost('answer');
	$answer_value = extractPost('answer_value');
	$important = extractPost('important');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$photo_to_language = extractPost('photo_to_language');
	$url = extractPost('url');
	
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
							`slug` = '" . $get_info_data->id.'-'.$slug . "',
							`section_id` = '" . $section_id . "',
   							`start_date` = '" . DBM::escape($start_date) . "',
   							`published` = '" . DBM::escape($published) . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
		
		foreach($question as $index => $que) {
						
			if($que != '') {
				
				if($questionIDs[$index] > 0) {
					
					$query = "UPDATE 
								`bc_info_additional` 
							SET 
								`question` = '".$que."',
								`param_1` = '".$answer[$index][0]."',
								`param_2` = '".$answer[$index][1]."',
								`param_3` = '".$answer[$index][2]."',
								`param_4` = '".$answer[$index][3]."',
								`value` = '".$answer_value[$index]."'
							WHERE 
								`id` = '".$questionIDs[$index]."' AND 
								`language` = '".$content_language."'";
				
				} else {
					
					$query = "INSERT INTO `bc_info_additional` 
								SET 
								`language` = '".$content_language."',
								`info_id` = '".$get_info_data->id."',
								`question` = '".$que."',
								`param_1` = '".$answer[$index][0]."',
								`param_2` = '".$answer[$index][1]."',
								`param_3` = '".$answer[$index][2]."',
								`param_4` = '".$answer[$index][3]."',
								`value` = '".$answer_value[$index]."'";
								
				}
				DBM::query($query, $database_link);
			}
		}
   		   			  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
   		
   	}
   	
}

?>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
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
        </div>
        
    </div>
	
	<table class="table">
		
		<tbody id="container">
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td colspan="2">
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr> 
			<?php 
			
			$query = "SELECT * FROM `bc_info_additional` WHERE `info_id` = '".$get_info_data->id."' AND `language` = '".$content_language."'";
			if($result = DBM::queryData($query, $database_link)) {
				
				$i = 0;
			
			while($row = DBM::fetchObject($result)) {
				
				echo '<tr>	
					<th>'.($i+1).') </th>
					<td><input type="text" placeholder="'.$TRANSLATION['question'].'" name="question['.$i .']" 
							value="'.$row->question.'" class="input-xxlarge" />
						<input type="hidden" name="id['.$i .']" value="'.$row->id.'" class="input-xxlarge" />
					
						<ul>
							<li><input type="radio" '.is_checked($row->value, '1').' name="answer_value['.$i .']" value="1" class="input-radio" />
								<input type="text" placeholder="'.$TRANSLATION['option'].'1" name="answer['.$i .'][]" 
									value="'.$row->param_1.'" class="input-large" />
							</li>
							<li><input type="radio" '.is_checked($row->value, '2').' name="answer_value['.$i .']" value="2" class="input-radio" />
								<input type="text" placeholder="'.$TRANSLATION['option'].'2" name="answer['.$i .'][]" 
									value="'.$row->param_2.'" class="input-large" />
							</li>
							<li><input type="radio" '.is_checked($row->value, '3').' name="answer_value['.$i .']" value="3" class="input-radio" />
								<input type="text" placeholder="'.$TRANSLATION['option'].'3" name="answer['.$i .'][]" 
									value="'.$row->param_3.'" class="input-large" />
							</li>
							<li><input type="radio" '.is_checked($row->value, '4').' name="answer_value['.$i .']" value="4" class="input-radio" />
								<input type="text" placeholder="'.$TRANSLATION['option'].'4" name="answer['.$i .'][]" 
									value="'.$row->param_4.'" class="input-large" />
							</li>
						</ul>
					</td>
					<td><a href="#" class="btn btn-danger">-</a></td>			
				</tr>';
				$i++;
				}
			}
			?>
			<tr>	
            	<th><?php echo $i+1; ?>)</th>
				<td><input type="text" placeholder="<?php echo $TRANSLATION['question'] ?>" name="question[<?php echo $i;?>]" class="input-xxlarge" />
                
                	<ul>
                    	<li><input type="radio" name="answer_value[<?php echo $i;?>]" value="1" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>1" 
								name="answer[<?php echo $i;?>][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[<?php echo $i;?>]" value="2" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>2" 
								name="answer[<?php echo $i;?>][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[<?php echo $i;?>]" value="3" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>3" 
								name="answer[<?php echo $i;?>][]" class="input-large" />
                        </li>
                        <li><input type="radio" name="answer_value[<?php echo $i;?>]" value="4" class="input-radio" />
                        	<input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>4" 
								name="answer[<?php echo $i;?>][]" class="input-large" />
                        </li>
					</ul>
                </td>
                <td><a href="#" class="btn btn-danger">-</a></td>			
			</tr>
			<script type="text/javascript">
				var index = <?php echo $i++;?>;
				$(document).ready(function() {
					
					$('.row-remove').live('click', function() {
						var id = $(this).attr('title');
						$('#row'+id).remove();
						index--;
						return false;
					});
					
					$('#add').click(function(){
						index++;
						$('#container').append('<tr id="row'+index+'"><th>'+(index+1)+')</th><td><input type="text" placeholder="<?php echo $TRANSLATION['question'] ?>" name="question['+index+']" class="input-xxlarge" /><ul><li><input type="radio" name="answer_value['+index+']"  value="1" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>1" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="2" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>2" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="3" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>3" name="answer['+index+'][]" class="input-large" /></li><li><input type="radio" name="answer_value['+index+']"  value="4" class="input-radio" /><input type="text" placeholder="<?php echo $TRANSLATION['option'] ?>4" name="answer['+index+'][]" class="input-large" /></li></ul></td><td><a href="#" class="btn btn-danger row-remove" title="'+index+'">-</a></td></tr>');	
						return false;	
					});
				});
				</script> 
		</tbody> 
		<tfoot>
			            
        	<tr>
            	<th></th>
                <td></td>
                <td><a href="#" id="add" class="btn btn-warning">+<?php echo $TRANSLATION['add_question'] ?></a></td>
            </tr>
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td colspan="2">
					<?php echo getEditor('description', $get_info_data->description, 'full', 200); ?>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['text']; ?></th>
				<td colspan="2">
					<?php echo getEditor('content', $get_info_data->content, 'full', 400); ?>
				</td>
				
			</tr> 
			
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['date']; ?></th>
				<td colspan="2">
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right"><?php echo $TRANSLATION['end_date']; ?></th>
				<td colspan="2">
					<input type="text" name="end_date" value="<?php echo $get_info_data->end_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td colspan="2">
					<select name="published">
						<option value="Y"<?php echo dropDown('Y', $get_info_data->published); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_info_data->published); ?>><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td colspan="2">
					<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tfoot>
		
	</table>
	
</form>