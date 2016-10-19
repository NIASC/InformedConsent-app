<?php
if(INSYS != 'pc777') die('404');

if(!($paging = extractGet('paging'))) $paging = 1;

$per_page = 25;

$limit = ($paging - 1) * $per_page;

?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['list']; ?></h4>
	</div>

	<div class="span6 text-right">
		<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="doAddInfo" value="+ <?php echo $TRANSLATION['new']; ?>" class="btn btn-info" />
		</form>
	</div>

</div>

<table class="table table-striped table-bordered">

	<thead>

		<tr>

			<th><?php echo $TRANSLATION['email']; ?></th>
			<th><?php echo $TRANSLATION['phone']; ?></th>
			<th><?php echo $TRANSLATION['registration_date']; ?></th>
			<th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>

		</tr>

	</thead>

	<tbody>

	<?php

	$get_pages_query = "SELECT * FROM `bc_users`";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {

			echo '<tr data-id="' . $get_pages_data->id . '">';
			echo '<td>' . $get_pages_data->email . '</td>';
			echo '<td>' . $get_pages_data->phone . '</td>';
			echo '<td>' . $get_pages_data->registration_date . '</td>';
			echo '<td class="hideable"><a href="?page=' . $current_page_id . '&act=edit&language=' . $get_pages_data->language . '&info_id=' . $get_pages_data->id . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			echo '<td class="hideable"><a href="?page=' . $current_page_id . '&act=delete&language=' . $get_pages_data->language . '&info_id=' . $get_pages_data->id . '" class="btn btn-mini btn-danger" onclick="return confirm(\'დარწმუნებული ხართ, რომ გინდათ წაშლა?\');"><i class="icon-remove"></i></a></td>';
			echo '</tr>';

		}

	}
	?>

	</tbody>

</table>
