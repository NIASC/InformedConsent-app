<?php

// Add ures
if (extractPost('doAdd') == $TRANSLATION['save']) {

	// Grab Variables

	$name = extractPost('name');
	$email = extractPost('email');
	$password = sha1(extractPost('password'));
	$group_id = (int) extractPost('group_id');
	$active = extractPost('active');

	if (strlen($name) > 0 && strlen($email) > 0 && strlen($password) > 0) {

   		// Selecting Max Info ID
   		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_administrators`";

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
   								`bc_administrators`
   									SET
   								`id` = " . $real_info_id . ",
   								`name` = '" . $name . "',
   								`email` = '" . $email . "',
   								`password` = '" . DBM::escape($password) . "',
   								`group_id` = '" . DBM::escape($group_id) . "',
   								`active` = '" . DBM::escape($active) . "'";

   			DBM::query($insert_query, $database_link);

   			$insert_id = DBM::insertID($database_link);


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

	$user_groups .= '<option value="'. $get_data->id .'">'. $get_data->name .'</option>';
}

//

?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['new_admin']; ?></h4>
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
					<input type="text" name="name" class="input-xxlarge" />
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['email']; ?></th>
				<td>
					<input type="text" name="email" class="input-xxlarge" />
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
