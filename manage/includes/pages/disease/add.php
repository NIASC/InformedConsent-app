<?php
if(INSYS != 'pc777') die('404');

// Add Section
if (extractPost('doAdd') == $TRANSLATION['save']) {
	
	// Grab Variables
	
	$title = extractPost('title');
	$published = extractPost('published');
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
	}
	
	if (strlen($title) > 0) {
		
   		// Selecting Max Info ID
   		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_disease`";
   		
   		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_info_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_info_id = 0;
   			
   		}
   		
   		// Get Next ID
   		$real_info_id = $max_info_id + 1;
   		
   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {
   			
   			// Generating Name
   			if ($val != $content_language) {
   				$real_title = $title . ' (' . $val . ')';
   			} else {
	   			$real_title = $title;

   			}
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`bc_disease`
   									SET
   								`id` = " . $real_info_id . ",
   								`language` = '" . $val . "',
   								`title` = '" . DBM::escape($real_title) . "',
   								`active` = '" . DBM::escape($published) . "'";
   			
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
		<h4><?php echo $TRANSLATION['new']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info">
			<?php echo $TRANSLATION['back']; ?>
		</a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="title" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
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
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doAdd" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>