<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['group_list']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $_GET['page']; ?>&act=add" class="btn btn-info"><?php echo $TRANSLATION['new_group']; ?></a>
	</div>

</div>

<?php

$database_link = DBM::open($config['database']);

$get_groups_query = "SELECT `id`, `name`, `description` FROM `bc_administrator_groups` ORDER BY id ASC";

if ($get_groups_result = DBM::queryData($get_groups_query)) {

	echo '<table class="table table-striped table-bordered">';

	echo '<thead>';

	echo '<tr>';

	echo '<th>ID</th>';
	echo '<th>'.$TRANSLATION['name'].'</th>';
	echo '<th>'.$TRANSLATION['description'].'</th>';
	echo '<th>'.$TRANSLATION['edit'].'</th>';
	echo '<th>'.$TRANSLATION['delete'].'</th>';

	echo '</tr>';

	echo '</thead>';

	echo '<tbody>';

	while ($get_groups_data = DBM::fetchObject($get_groups_result)) {

		echo '<tr>';

		echo '<td>' . $get_groups_data->id . '</td>';
		echo '<td>' . $get_groups_data->name . '</td>';
		echo '<td>' . $get_groups_data->description . '</td>';
		echo '<td><a href="?page=11&language='.$content_language.'&act=edit&group_id='.$get_groups_data->id. '"><i class="icon-edit"></i></a></td>';
		echo '<td><a href="?page=11&language='.$content_language.'&act=delete&group_id='.$get_groups_data->id. '"><i class="icon-remove"></i></a></td>';

		echo '</tr>';

	}

	echo '</tbody>';

	echo '</table>';

}

?>
