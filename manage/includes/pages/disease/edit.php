<?php
if(INSYS != 'pc777') die('404');

// Edit Section
if (extractPost('doEdit') == $TRANSLATION['save']) {
	
	// Grab Variables
	$info_pk = (int) extractGet('info_pk');
	$title = extractPost('title');
	$published = extractPost('published');
	
	if (get_magic_quotes_gpc()) {
		$title = stripslashes($title);
	}
	
	if (strlen($title) > 0) {		
		
		// Updating
   		$update_query = "UPDATE `bc_disease` SET `title` = '" . DBM::escape($title) . "', `active` = '" . DBM::escape($published) . "'
   						WHERE `pk` = " . $info_pk . " AND `language` = '" . $content_language . "'";
   		
   		DBM::query($update_query, $database_link);				
   		   			  		
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&info_pk=' . $info_pk);
   		
   		die();
   		
   	}
   	
}

?>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
    <div class="row-fluid panel-title">
        
        <div class="span6">
            <h4><?php echo $TRANSLATION['edit_post']; ?></h4>
        </div>
        
        <div class="span6 text-right">            
            <a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; echo '&act=list';?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
        </div>
        
    </div>
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['title']; ?></th>
				<td>
					<input type="text" name="title" value="<?php echo htmlspecialchars($get_info_data->title); ?>" class="input-xxlarge" />
				</td>
				
			</tr>
            
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
				<td>
					<select name="published">
						<option value="Y"<?php echo dropDown('Y', $get_info_data->active); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_info_data->active); ?>><?php echo $TRANSLATION['no']; ?></option>
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