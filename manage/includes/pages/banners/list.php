<?php
$type = extractGet('section_id');
?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['banners']; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info"><?php echo $TRANSLATION['new_banner']; ?></a>
	</div>

</div>

<table class="table table-striped table-bordered">

	<thead>

		<tr>

			<th><?php echo $TRANSLATION['file']; ?></th>
            <th><?php echo $TRANSLATION['comment']; ?></th>
			<th><?php echo $TRANSLATION['url']; ?></th>
            <th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
			<th><?php echo $TRANSLATION['sort']; ?></th>

		</tr>

	</thead>

	<tbody>

	<?php

	$get_pages_query = "SELECT * FROM
							`bc_banner`
						WHERE
							`language` = '" . $content_language . "' AND
							`type` = ". $type ."
						ORDER BY
							`sort`";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {

			echo '<tr data-id="' . $get_pages_data->id . '">';

			if(file_exists($config['fpath'].$get_pages_data->file) && $get_pages_data->file != '')
			echo '<td><img src="'. $config['fpath'] . $get_pages_data->file .'" width="150"/></td>';
			else
			echo '<td></td>';

			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->url . '</td>';

			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=edit&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';

			if($get_pages_data->undeletable == 'Y')
			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&section_id='. $type .'&act=delete&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="alert(\'ამ ბანერის წაშლა შეუძლებელია\');return false;"><i class="icon-remove"></i></a></td>';

			else
			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&section_id='. $type .'&act=delete&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';
			echo '<td class="handle hideable"><i class="icon-move"></i></td>';
			echo '</tr>';

		}

	}


	?>

	</tbody>

</table>
<script type="text/javascript">

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

			xhttp.open("POST", "ajax/sorter.php?banner", true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhttp.send("id=" + ui.item.attr("data-id") + "&index=" + ui.item.index() + "&language=" + lang);
			$(event.target).sortable("disable");
		}
	}
});

</script>
