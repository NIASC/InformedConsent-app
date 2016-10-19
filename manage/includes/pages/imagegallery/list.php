<?php
$section_id = extractGet('section_id');
?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $TRANSLATION['current_galleries']; ?></h4>
	</div>

	<div class="span6 text-right">
    	<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
			<?php echo $TRANSLATION['page']; ?> -
            <select name="section_id" onchange="location.href='<?php echo '?page='.$page.'&language='.$content_language.'&act=list&section_id='; ?>'+this.value">
				<?php

				echo getSectionsByType($page_type, $content_language, $database_link, $section_id);

				?>
			</select>
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="doAddInfo" value="<?php echo $TRANSLATION['new_album']; ?>" class="btn btn-info" />
		</form>
	</div>

</div>

<table class="table table-striped table-bordered">

	<thead>

		<tr>

			<th><?php echo $TRANSLATION['cover']; ?></th>
            <th><?php echo $TRANSLATION['title']; ?></th>
			<th><?php echo $TRANSLATION['description']; ?></th>
			<th><?php echo $TRANSLATION['content']; ?></th>
            <th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
      <th><?php echo $TRANSLATION['sort']; ?></th>

		</tr>

	</thead>

	<tbody>

	<?php

	$get_pages_query = "SELECT
							 `bc_gallery_group`.`pk`,
							 `bc_gallery_group`.`id`,
							 `bc_gallery_group`.`section_id`,
							 `bc_gallery_group`.`title`,
							 `bc_gallery_group`.`description`,
							 `bc_gallery_group`.`thumbnail`,
							 `bc_sections`.`name`
						FROM
							`bc_gallery_group`,
							`bc_sections`
						WHERE
							`bc_gallery_group`.`language` = '" . $content_language . "' AND
							`bc_gallery_group`.`section_id` = `bc_sections`.`id` AND
							`bc_gallery_group`.`language` = `bc_sections`.`language`
						ORDER BY
							`bc_gallery_group`.`sort` ASC";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {

			echo '<tr data-id="' . $get_pages_data->id . '">';

			if(file_exists($config['fpath'].$get_pages_data->thumbnail)&&$get_pages_data->thumbnail!='')
			echo '<td><img src="'. $config['fpath'].$config['thumb_folder_name'].$get_pages_data->thumbnail .'" class="def_img"/></td>';
			else
			echo '<td></td>';

			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->name . '</td>';
			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=content&info_pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-th-list"></i></a></td>';

			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=edit&info_pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';

			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=delete&info_pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';/*
			echo '<td><a href="?page='. $current_page_id .'&language='. $content_language .'&act=sort&info_pk='. $get_pages_data->pk .'&dir=up" class="btn btn-mini btn-info"><i class="icon-arrow-up"></i></a>
					<a href="?page='. $current_page_id .'&language='. $content_language .'&act=sort&info_pk='. $get_pages_data->pk .'&dir=down" class="btn btn-mini btn-info"><i class="icon-arrow-down"></i></a></td>';*/
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

			xhttp.open("POST", "ajax/sorter.php?group", true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhttp.send("id=" + ui.item.attr("data-id") + "&index=" + ui.item.index() + "&language=" + lang);
			$(event.target).sortable("disable");
		}
	}
});

</script>
