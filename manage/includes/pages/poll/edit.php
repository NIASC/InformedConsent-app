<?php

// Add Section
if (extractPost('doEdit') == 'დამახსოვრება') {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$section_id = (int) extractGet('section_id');
	$title = extractPost('title');
	$description = extractPost('description');
	$start_date = extractPost('start_date');
	$end_date = extractPost('end_date');
	$content = extractPost('content');
	$published = extractPost('published');
	$photo_to_language = extractPost('photo_to_language');
	$important_type = extractPost('important_type');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
		$description = stripslashes($description);
		$content = stripslashes($content);
	}
	
	if (strlen($title) > 0) {		
		
		if($_FILES['photo']['name']){
			
			@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
			
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
			
			$update_query = "UPDATE
   							`bc_info`
   								SET
   							`thumbnail` = '" . $photo . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`section_id` = " . $section_id . " AND
   							`language` = '" . $content_language . "'";
   		
   			DBM::query($update_query, $database_link);
		}
		// Updating
   			
   		$update_query = "UPDATE
   							`bc_info`
   								SET
   							`title` = '" . DBM::escape($title) . "',
							`slug` = '" . convert_to_slug((int)$get_info_data->id.'-'.DBM::escape($title)) . "',
   							`description` = '" . DBM::escape($description) . "',
   							`content` = '" . DBM::escape($content) . "',
							`important_type` = '". (int)$important_type ."',
							`start_date` = '". DBM::escape($start_date) ."',
   							`published` = '" . DBM::escape($published) . "'
   						WHERE
   							`pk` = " . $info_pk . " AND
   							`section_id` = " . $section_id . " AND
   							`language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);
		/*
		foreach($question as $index => $que) {
				
				$query = "INSERT INTO `bc_info_additional` 
							SET 
							`question` = '".$que."',
							`param_2` = '".$answer[$index]."'
						WHERE 							
							`language` = '".$content_language."',
							`info_id` = '".$real_info_id."',
							`id` = '".$index."'";
							
			DBM::query($query, $database_link);
			}
   		   		*/	  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
   		
   		die();
   		
   	}
   	
}

// delete IMAGE
if (isset($_GET['deleteImg'])){
	
	@unlink($config['fpath'].'thumb/'.$get_info_data->thumbnail);
	
	$query = "UPDATE `bc_info` SET `thumbnail` = '' WHERE id = ".$get_info_data->id;
	
	DBM::query($query, $database_link);
	
	header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
			
   		die();
}

if(isset($_GET['delete_row'])){

	$query = "DELETE FROM `bc_info_additional` WHERE `id` = ".(int)extractGet('delete_row')." AND `language` = '".$content_language."'";
	
	$result = DBM::query($query, $database_link);
	
	header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&section_id=' . $section_id . '&info_pk=' . $info_pk);
	
	die();

}

//
if($get_info_data->thumbnail!=''){
	
	$photo = '<td><img src="' . $config['file_path'] .'thumb/'. $get_info_data->thumbnail . '"/></td>
			<td>
				<a href="?page='.$current_page_id.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&deleteImg" class="btn btn-mini btn-danger" title="სურათის წაშლა">
					<i class="icon-remove"></i>
				</a>
			</td>';
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>გვერდის დამატება</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">უკან დაბრუნება</a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody id="container">
		
			<tr>
				
				<th class="text-right">დასახელება</th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>		
			
			<tr>
				
				<th class="text-right">ფოტო</th>
				<td>
                	<table><tr>
                    <td><input type="file" name="photo"/></td>
					<?php echo $photo; ?>
                    </tr></table>
				</td>
				
			</tr>
            
			<tr class="hidden">
				
				<th class="text-right">კატეგორია</th>
				<td>
					<select name="important_type">
                    	<option value="0"></option>			
						<?php
                        $get_settings_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'important_post_type' ORDER BY `value`";
                                    
                        if ($get_settings_result = DBM::queryData($get_settings_query)){
                            
                            while ($get_settings_data = DBM::fetchObject($get_settings_result))
                            
                            echo '<option value="'.$get_settings_data->value.'" '.dropDown($get_settings_data->value, $get_info_data->important_type).'>'.$get_settings_data->description.'</option>';
                            
                            }
                        ?>
					</select>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">აღწერა</th>
				<td>
					<input type="text" name="description" value="<?php echo $get_info_data->description;?>"/>
				</td>
				
			</tr>
			
			<tr class="hidden">
				
				<th class="text-right">ტექსტი</th>
				<td>
					<input type="text" class="numeric" name="content" value="<?php echo $get_info_data->content;?>"/>
				</td>
				
			</tr>
            
            <?php
			
				$query = "SELECT * FROM `bc_info_additional` WHERE `info_id` = ".$get_info_data->id." AND `language` = '".$content_language."'";
				
				if($result = DBM::queryData($query)) {
				
				while($row = DBM::fetchObject($result))
				
				echo '<tr class="saved'.$row->id.'">	
					<th></th>			
					<td><input type="text" placeholder="განმარტება" name="question[]" value="'.$row->question.'" class="input-xxlarge" /></td>
					<td><input type="text" placeholder="პასუხი" name="answer[]" value="'.$row->param_1.'" class="input-xxlarge" /></td>	
					<td><a href="?page='.$page.'&act=edit&language='.$content_language.'&section_id='.$section_id.'&info_pk='.$info_pk.'&delete_row='.$row->id.'" class="btn btn-danger" title="saved'.$row->id.'">-</a></td>			
				</tr>';
				
				}
			?>
            
            </tbody>
            
        <script type="text/javascript">
		var index = 1;
		$(document).ready(function() {
			
			$('.row-remove').live('click', function() {
				var id = $(this).attr('title');
				$('#'+id).remove();
				return false;
			});
			
			$('#add').click(function(){
				index++;
				$('#container').append('<tr id="row'+index+'"><td></td><td><input type="text" placeholder="განმარტება" name="question[]" class="input-xxlarge" /></td><td><input type="text" placeholder="პასუხი" name="answer[]" class="input-xxlarge" /></td><td><a href="#" class="btn btn-danger row-remove" title="row'+index+'">-</a></td></tr>');	
				return false;	
			});
		});
		</script>
        
            <tfoot>
			
            <tr>
				
				<th class="text-right">დაწყების თარიღი</th>
				<td>
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
			
            <tr>
				
				<th class="text-right">დასრულების თარიღი</th>
				<td>
					<input type="text" name="start_date" value="<?php echo $get_info_data->start_date; ?>" class="input-large datetimepicker" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right">გამოქვეყნებული</th>
				<td>
					<select name="published">
						<option value="Y"<?php echo dropDown('Y', $get_info_data->published); ?>>კი</option>
						<option value="N"<?php echo dropDown('N', $get_info_data->published); ?>>არა</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="დამახსოვრება" class="btn btn-success" />
					<input type="reset" name="doReset" value="გაუქმება" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tfoot>
		
	</table>
	
</form>