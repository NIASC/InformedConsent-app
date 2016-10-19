<?php

$group_id = extractGet('group_id');
$get_query = "SELECT * FROM	`bc_administrator_groups` WHERE id = ".$group_id;
if($group_result = DBM::queryData($get_query)) {
  $group_info = DBM::fetchObject($group_result);
}
else die();

$permissions_array = array();
$get_permissions_query = "SELECT * FROM `bc_administrator_groups_permissions` WHERE group_id = '" . $group_id . "'";
if($permissions_result = DBM::queryData($get_permissions_query)) {
  while($permission = DBM::fetchObject($permissions_result))
    $permissions_array[$permission->page_id] = $permission;
}

// edit_group
if (extractPost('doEdit') == $TRANSLATION['save']) {

	// Grab Variables

	$name = extractPost('name');
	$description = extractPost('description');

	if (strlen($name) > 0 && strlen($description) > 0) {
    $update_query = "UPDATE `bc_administrator_groups`
   								   SET `name` = '" . $name . "', `description` = '" . $description . "'
								     WHERE `id` = " . $group_id . "";
   	DBM::query($update_query, $database_link);
	}

  //edit permissions
  //insert new permissions
  $insert_query = "INSERT INTO `bc_administrator_groups_permissions` (`page_id`, `group_id`) VALUES";
  foreach($_POST['permissions'] as $inserting_page_id) {
    $inserting_page_id = (int)$inserting_page_id;

    if(!isset($config['admin_pages'][$inserting_page_id])) continue;

    if(isset($permissions_array[$inserting_page_id])) {
      unset($permissions_array[$inserting_page_id]);
      continue;
    }

    $insert_query .= " ('".$inserting_page_id."','".$group_id."'),";
  }
  $insert_query = rtrim($insert_query, ",");
  DBM::query($insert_query, $database_link);

  //removeing old permissions
  foreach(array_keys($permissions_array) as $removing_page_id) {
    $removing_pages .= "'$removing_page_id',";
  }

  $removing_pages = rtrim($removing_pages, ",");

  $remove_query = "DELETE FROM `bc_administrator_groups_permissions` WHERE group_id = '" . $group_id . "'
                   AND page_id IN(". $removing_pages .")";
  DBM::query($remove_query, $database_link);

  header('location: ?page=' . $current_page_id . '&language=' . $content_language);
  die();
}

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
					<input type="text" name="name" class="input-xxlarge" value="<?php echo $group_info->name; ?>" />
				</td>

			</tr>

			<tr>

				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<input type="text" name="description" class="input-xxlarge"  value="<?php echo $group_info->description; ?>"/>
				</td>

			</tr>

      <tr>
				<th class="text-right">Permissions</th>
				<td>
				<?php
					foreach($config['admin_pages'] as $key => $value) {
						if($key === 'default' || $key === 0 || $key === -1) continue;
            $hasPermission = isset($permissions_array[$key]) ? 'checked' : '';
						echo '<label style="float: left; margin-right: 20px;">
                  <input style="margin-bottom: 5px;" type="checkbox" name="permissions[]" value="' . $key . '" ' .$hasPermission. '>'.$TRANSLATION[$value->name].'</input>
                  </label>';
					}
				?>
				</td>
			</tr>

			<tr>

				<th></th>
				<td>
					<input type="hidden" name="section_pk" value="<?php echo $get_data->pk; ?>" />
					<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>

			</tr>

		</tbody>

	</table>

</form>
