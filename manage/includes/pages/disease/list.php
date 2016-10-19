<?php
if(INSYS != 'pc777') die('404');

$section_id = extractGet('section_id');

if(!($paging = extractGet('paging'))) $paging = 1;

$per_page = 50;

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
			<input type="submit" name="doAddInfo" value="+ <?php echo $TRANSLATION['new']; ?>" class="btn btn-info" />
		</form>
	</div>

</div>

<table class="table table-striped table-bordered">

	<thead>

		<tr>

			<th><?php echo $TRANSLATION['title']; ?></th>
			<th><?php echo $TRANSLATION['status']; ?> 
				<select id="status-filter">
					<option value="A">All</option>
					<option value="Y">Y</option>
					<option value="N">N</option>
				</select>
			</th>
			<th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>

		</tr>

	</thead>

	<tbody>

	<?php

	$get_pages_query = "SELECT * FROM `bc_disease` WHERE `language` = '" . $content_language . "' ORDER BY `title` ASC";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {

			echo '<tr data-id="' . $get_pages_data->id . '" class="disease-status group-A group-'.$get_pages_data->active.'">';

			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->active . '</td>';
			echo '<td class="hideable"><a href="?page=' . $current_page_id . '&act=edit&language=' . $get_pages_data->language . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			echo '<td class="hideable"><a href="?page=' . $current_page_id . '&act=delete&language=' . $get_pages_data->language . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';
			
			echo '</tr>';

		}

	}
	?>

	</tbody>

</table>
<script type="text/javascript">

$('#status-filter').change(function(){
	$('.disease-status').addClass('hidden');
	$('.group-'+$(this).val()).removeClass('hidden');
});

$(".table tbody").sortable({
	handle: ".handle",
	cursor: "move"
}).bind({
	'sortstart': function(event, ui) {
		ui.item.startIndex = ui.item.index();
		ui.item.children(".hideable").hide();
		ui.item.addClass("sortable-item");
	},
	'sortstop': function(event, ui) {
		ui.item.removeClass("sortable-item");
		ui.item.children(".hideable").show();
		var lang = $("select[name='language']").children(":selected").attr("value");

		if(ui.item.index() !== ui.item.startIndex) {
			xhttp = getXHR();
			xhttp.onreadystatechange = function() {
				if(xhttp.readyState == 4) {
					var error = false;

					if(xhttp.status !== 200) {
						alert("can't connect to server");
						error = true;
					}
					try {
						var response = JSON.parse(xhttp.responseText);

						if(response.status === "error") {
							alert(response.msg);
							error = true;
						}
					} catch(ex) {
						alert("Invalid response format");
						error = true;
					}

					if(error) {
						$(event.target).sortable("cancel");
					}
					$(event.target).sortable("enable");
				}
			};

			xhttp.open("POST", "ajax/sorter.php?info", true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhttp.send("id=" + ui.item.attr("data-id") + "&index=" + ui.item.index() + "&language=" + lang);
			$(event.target).sortable("disable");
		}
	}
});
</script>
