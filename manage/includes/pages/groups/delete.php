<?php
// Grab ID
$group_id = extractGet('group_id');

if (!($group_id > 0)) {
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
  die();
}

// Deleting Group Permissions
$remove_permissions_query = "DELETE FROM `bc_administrator_groups_permissions` WHERE group_id = " . $group_id;
DBM::query($remove_permissions_query, $database_link);

// Delete Current group
$remove_group_query = "DELETE FROM `bc_administrator_groups` WHERE `bc_administrator_groups`.`id` = " . $group_id;
$result = DBM::query($remove_group_query, $database_link);

header('location: ?page=' . $current_page_id . '&language=' . $content_language);

die();
?>
