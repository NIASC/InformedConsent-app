<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['user_list']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $_GET['page']; ?>&act=add" class="btn btn-info"><?php echo $TRANSLATION['new_admin']; ?></a>
	</div>
	
</div>

<?php

$database_link = DBM::open($config['database']);

$get_administrators_query = "SELECT `id`, `name`, `email` FROM `bc_administrators` ORDER BY id ASC";

if ($get_administrators_result = DBM::queryData($get_administrators_query)) {
	
	echo '<table class="table table-striped table-bordered">';
	
	echo '<thead>';
	
	echo '<tr>';
	
	echo '<th>ID</th>';
	echo '<th>'.$TRANSLATION['name'].'</th>';
	echo '<th>'.$TRANSLATION['email'].'</th>';
	echo '<th>'.$TRANSLATION['edit'].'</th>';
	echo '<th>'.$TRANSLATION['delete'].'</th>';
	
	echo '</tr>';
	
	echo '</thead>';
	
	echo '<tbody>';
	
	while ($get_administrators_data = DBM::fetchObject($get_administrators_result)) {
		
		echo '<tr>';
		
		echo '<td>' . $get_administrators_data->id . '</td>';
		echo '<td>' . $get_administrators_data->name . '</td>';
		echo '<td>' . $get_administrators_data->email . '</td>';
		echo '<td><a href="?page=6&language='.$content_language.'&act=edit&user_id='.$get_administrators_data->id. '"><i class="icon-edit"></i></a></td>';
		echo '<td><a href="?page=6&language='.$content_language.'&act=delete&user_id='.$get_administrators_data->id. '"><i class="icon-remove"></i></a></td>';
		
		echo '</tr>';
		
	}
	
	echo '</tbody>';
	
	echo '</table>';
	
}

?>

