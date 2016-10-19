<?php

if (isset($_POST['doAdd'])) {
	
	// Grab Variables
	$title = extractPost('title');
	$url = extractPost('url');
	$type = extractPost('type');
	$active = extractPost('active');
	$target = extractPost('target');
	$section = extractPost('section');
	$all_sections = extractPost('all_sections')?'Y':'N';
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
	}
	
if($_FILES['file']['name'] != '' || $title != '') {
	
		//upload banner
		if($_FILES['file']['name'] != '') {
		$file = rand(1000,9999).$_FILES['file']['name'];
		$file = str_replace(' ','',$file);
		$upload = move_uploaded_file($_FILES['file']['tmp_name'],$config['fpath'].$file);
		}
	// Selecting Max Section ID
	
	$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_banner`";
	
	if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_id = 0;
   			
   		}
		// Get Next ID
   		$real_id = $max_id + 1;
		
		// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_banner` WHERE `language` = '" . $content_language . "'";
   			
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
				`bc_banner` 
					SET
				`id` = ". $real_id .",
				`title` = '". DBM::escape($title) ."',
				`url` = '". DBM::escape($url) ."',
				`file` = '". $file ."',
				`language` = '". $val. "',
				`active` = '". DBM::escape($active) ."',
				`type` = '". DBM::escape($type) ."',
				`target` = '". DBM::escape($target) ."',
				`all_sections` = '". DBM::escape($all_sections) ."',
				`sort` = ". $real_sort ."";
				
			DBM::query($query, $database_link);
			}
			
			if($section != '') {
			
				foreach($section as $item) {
					
					$query = "INSERT INTO `bc_banner_to_section` SET `banner_id` = '".(int)$real_id."', `section_id` = '".(int)$item."'";
					
					DBM::query($query);	
				}
			}
		
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
	}
}

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['new_banner']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['banner_file']; ?></th>
				<td>
					<input type="file" name="file"/>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['url']; ?></th>
				<td>
					<input type="text" name="url" class="input-xxlarge" />
				</td>
				
			</tr>
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>					
					<?php echo getEditor('title', $get_info_data->title, 'full', 200); ?>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['target']; ?></th>
				<td>
                	<select name="target">
                    	<option value="_blank" ><?php echo $TRANSLATION['new_tab']; ?></option>
                        <option value="_self" ><?php echo $TRANSLATION['same_tab']; ?></option>
					</select>
				</td>
				
			</tr>
            
            <tr>
				
				<th class="text-right"><?php echo $TRANSLATION['type']; ?></th>
                <td>
                <select name="type">			
				<?php
                $get_settings_query = "SELECT * FROM `bc_settings` WHERE `slug` = 'banner_type' ORDER BY `value`";
							
                if ($get_settings_result = DBM::queryData($get_settings_query)){
                    
					while ($get_settings_data = DBM::fetchObject($get_settings_result))
                    
					    echo '<option value="'.$get_settings_data->value.'">'.$get_settings_data->description.'</option>';
                    }
                ?>
            	</select>
                </td>
            </tr>		
            
            <tr >
				
				<th class="text-right"><?php echo $TRANSLATION['banner2section']; ?></th>
                <td>
					<label><input checked="checked" type="checkbox" id="all_sections" name="all_sections"/> <?php echo $TRANSLATION['all_sections']; ?></label>
					<div class="section-list" style="display:none;float:right;margin-right:20%;" >			
				<?php
                $get_settings_query = "SELECT * FROM `bc_sections` WHERE `language` = '".$content_language."' ORDER BY `sort`";
							
                if ($get_settings_result = DBM::queryData($get_settings_query)){
                    
					while ($get_settings_data = DBM::fetchObject($get_settings_result))
                    
					    echo '<label><input type="checkbox" name="section[]" value="'.$get_settings_data->id.'"> '.$get_settings_data->description.'</label>';
                    }
                ?>
					</div>
                </td>
            </tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['published']; ?></th>
				<td>
					<select name="active">
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
	$('#all_sections').change(function() {
		if($(this).is(':checked')) {
			$('.section-list').hide('slow');
		} else {
			$('.section-list').show('slow');
		}
	});
</script>