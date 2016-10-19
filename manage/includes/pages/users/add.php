<?php
if(INSYS != 'pc777') die('404');

	$contact_page_email = setting_by_slug('contact_email');
// Add Section
if (extractPost('doAdd') == $TRANSLATION['save']) {
	
	// Grab Variables
	
	$name = extractPost('name');
	$age = extractPost('age');
	$email = trim(extractPost('email'));
	$phone = extractPost('phone');
	$region = extractPost('region');
	
	$subject = 'რეგისტრაცია';
	$message = 'თქვენ დარეგისტრირდით მოხალისედ';
	
	if (strlen($name) > 0 && check_email($email)) {
		
		send_mail($email, $contact_page_email->value, $subject, $message, $files);
		
   		// Inserting   				
   		$insert_query = "INSERT INTO
   							`bc_users`
   								SET
   							`name` = '" . DBM::escape($name) . "',
   							`age` = '" . DBM::escape($age) . "',
   							`email` = '" . DBM::escape($email) . "',
							`phone` = '" . DBM::escape($phone) . "',
   							`region` = '" . DBM::escape($region) . "',
   							`registration_date` = '" . date('Y-m-d h:i:s') . "'";
   			
   		DBM::query($insert_query, $database_link);
   			
   		$insert_id = DBM::insertID($database_link);
			
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}

//

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['new']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" method="post" enctype="multipart/form-data" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="name" class="input-xxlarge" />
				</td>
				
			</tr>           
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['age']; ?></th>
				<td>
					<input type="text" name="age" class="input-xxlarge"/>
				</td>
				
			</tr>       
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="email" class="input-xxlarge"/>
				</td>
				
			</tr>       
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['phone']; ?></th>
				<td>
					<input type="text" name="phone" class="input-xxlarge"/>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['region']; ?></th>
				<td>
					<select name="region">
                    	<?php foreach ($region_arr as $index => $region) {
							echo '<option value="'.$index.'">'.$region.'</option>';
						}?>
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