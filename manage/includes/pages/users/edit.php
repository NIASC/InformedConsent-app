<?php
if(INSYS != 'pc777') die('404');

// Edit Section
if (extractPost('doEdit') == $TRANSLATION['save']) {
	
	// Grab Variables
	$name = extractPost('name');
	$age = extractPost('age');
	$email = trim(extractPost('email'));
	$phone = extractPost('phone');
	$region = extractPost('region');
	
	if (strlen($name) > 0) {
		
   		// Updating
		echo
   		$update_query = "UPDATE
   							`bc_users`
   								SET
   							`name` = '" . DBM::escape($name) . "',
   							`age` = '" . DBM::escape($age) . "',
   							`email` = '" . DBM::escape($email) . "',
							`phone` = '" . DBM::escape($phone) . "',
   							`region` = '" . DBM::escape($region) . "'
   						WHERE
   							`id` = " . $info_id . "";
   		
   		DBM::query($update_query, $database_link);
		
		if( $password == $confirm && strlen($password) > 3) {
			
		$update_query = "UPDATE `bc_users` SET `password` = '" . DBM::escape($password) . "' WHERE `id` = " . $info_id . "";
   		
   		DBM::query($update_query, $database_link);
		
		}
   		   			  	
   		header('location: ?page=' . $current_page_id . '&act=' . $current_act . '&language=' . $content_language . '&info_id=' . $info_id);
   		
   		die();
   		
   	}
   	
}

?>

<form name="section_add_form" enctype="multipart/form-data" method="post" action="">
	
    <div class="row-fluid panel-title">
        
        <div class="span6">
            <h4><?php echo $TRANSLATION['edit']; ?></h4>
        </div>
        
        <div class="span6 text-right">            
            <a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; if(isset($_GET['section_id'])) echo '&act=list';?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
        </div>
        
    </div>
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="name" value="<?php echo htmlspecialchars($get_info_data->name); ?>" class="input-xxlarge" />
				</td>
				
			</tr>         
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['age']; ?></th>
				<td>
					<input type="text" name="age" class="input-xxlarge" value="<?php echo $get_info_data->age; ?>"/>
				</td>
				
			</tr>     
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="email" class="input-xxlarge" value="<?php echo $get_info_data->email; ?>"/>
				</td>
				
			</tr>     
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['phone']; ?></th>
				<td>
					<input type="text" name="phone" class="input-xxlarge" value="<?php echo $get_info_data->phone; ?>"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['region']; ?></th>
				<td>
					<select name="region">
                    	<?php foreach ($region_arr as $index => $region) {
							echo '<option value="'.$index.'" '.dropDown($index, $get_info_data->region).'>'.$region.'</option>';
						}?>
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