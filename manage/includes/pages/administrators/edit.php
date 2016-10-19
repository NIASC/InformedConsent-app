<?php

$user_id = extractGet('user_id');
$get_query = "SELECT * FROM	`bc_administrators` WHERE id = ".$user_id;
if($user_result = DBM::queryData($get_query))
$user_info = DBM::fetchObject($user_result);
else die();
// Add ures
if (extractPost('doAdd') == $TRANSLATION['save']) {

	// Grab Variables

	$name = extractPost('name');
	$email = extractPost('email');
	$password = sha1(extractPost('password'));
	$group_id = (int) extractPost('group_id');
	$active = extractPost('active');

	if (strlen($name) > 0 && strlen($email) > 0) {


   		// updating
		echo

   			$update_query = "UPDATE
   								`bc_administrators`
   								SET
   								`name` = '" . $name . "',
   								`email` = '" . $email . "',
   								`group_id` = '" . DBM::escape($group_id) . "',
   								`active` = '" . DBM::escape($active) . "'
								WHERE
   								`id` = " . $user_id . "";

   			DBM::query($update_query, $database_link);

			// updating password
			if($password != ''){
			$update_query = "UPDATE
   								`bc_administrators`
   								SET
   								`password` = '" . DBM::escape($password) . "'
								WHERE
   								`id` = " . $user_id . "";

   			DBM::query($update_query,$database_link);
			}


   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);

   		die();

   	}

}
//

// Get Current Section
$get_query = "SELECT * FROM	`bc_administrator_groups`";

if (!($get_result = DBM::queryData($get_query, $database_link))) {

	header('location: ?page=' . $current_page_id . '&language=' . $content_language);

   	die();

}

while($get_data = DBM::fetchObject($get_result)){

	$user_groups .= '<option value="'. $get_data->id .'"  '.dropDown($get_data->id, $user_info->group_id).'>'. $get_data->name .'</option>';
}

//

?>

<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['edit']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>

</div>

<form name="section_add_form" method="post" action="">

	<table class="table">

		<tbody>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="name" class="input-xxlarge" value="<?php echo $user_info->name; ?>" />
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="email" class="input-xxlarge"  value="<?php echo $user_info->email; ?>"/>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['password']; ?></th>
				<td>
					<input type="password" name="password" class="input-xxlarge" />
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['groups']; ?></th>
				<td>
					<select name="group_id" class="input-xxlarge" >
                    	<?php echo $user_groups; ?>
                    </select>
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
				<td>
					<select name="active">
						<option value="Y" <?php echo dropDown('Y', $user_info->active); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N" <?php echo dropDown('N', $user_info->active); ?>><?php echo $TRANSLATION['no']; ?></option>
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
