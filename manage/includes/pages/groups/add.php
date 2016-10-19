<?php

// Add ures
if (extractPost('doAdd') == $TRANSLATION['save']) {

	// Grab Variables

	$name = extractPost('name');
	$description = extractPost('description');

	if (strlen($name) > 0 && strlen($description) > 0) {

		// Selecting Max Info ID
		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_administrator_groups`";

		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {

			$max_id_data = DBM::fetchObject($max_id_result);

			$max_info_id = $max_id_data->max_id;

		} else {

			$max_info_id = 0;

		}

		// Get Next ID
		$real_info_id = $max_info_id + 1;


		// Inserting
		$insert_query = "INSERT INTO `bc_administrator_groups`
		SET `id` = " . $real_info_id . ", `name` = '" . $name . "', `description` = '" . $description . "'";
		DBM::query($insert_query, $database_link);
		$insert_id = DBM::insertID($database_link);

		// insert permissions
		if(!empty($_POST['permissions'])) {
			$query = "INSERT INTO `bc_administrator_groups_permissions` (`page_id`, `group_id`) VALUES";
			foreach($_POST['permissions'] as $page_id) {
				$page_id = (int)$page_id;
				if(!isset($config['admin_pages'][$page_id])) continue;

				$query .= " ('".$page_id."','".$real_info_id."'),";
			}
			$query = rtrim($query, ",");
			DBM::query($query, $database_link);
		}

		header('location: ?page=' . $current_page_id . '&language=' . $content_language);

		die();
	}
}

?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['new_group']; ?></h4>
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

				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<input type="text" name="description" class="input-xxlarge" />
				</td>

			</tr>

			<tr>
				<th class="text-right">Permissions</th>
				<td>
				<?php
					foreach($config['admin_pages'] as $key => $value) {
						if($key === 'default' || $key === 0 || $key === -1) continue;
						echo '<label style="float: left; margin-right: 20px;"><input style="margin-bottom: 5px;" type="checkbox" name="permissions[]" value="' . $key . '">'.$TRANSLATION[$value->name].'</input></label>';
					}
				?>
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
