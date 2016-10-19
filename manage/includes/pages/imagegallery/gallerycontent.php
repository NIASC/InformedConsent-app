<?php
	// Grab ID
$pk = (int) extractGet('info_pk');

// Save
if (extractPost('doSAVE') == $TRANSLATION['save']) {

	// Set thumbnail
	$main = extractPost('main');
	//get current gall info
	$get_pages_query = "SELECT * FROM
							`bc_gallery_group`
						WHERE
							`language` = '" . $content_language . "' AND
							`pk` = ". $pk ."";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		$get_pages_data = DBM::fetchObject($get_pages_result);

		//delete old thumbnail
		if(file_exists($config['fpath'].$config['thumb_folder_name'].'thumb_'.$get_pages_data->thumbnail))
		@unlink($config['fpath'].$config['thumb_folder_name'].'thumb_'.$get_pages_data->thumbnail);
	//update info
	$update_query = "UPDATE
					`bc_gallery_group`
						SET
						`thumbnail` = '". DBM::escape($main) ."'
							WHERE
   						`id` = " . $get_pages_data->id;

	DBM::query($update_query, $database_link);

	$src = imagecreatefrom($config['fpath'].$main);
	$tmp2 = ResizeSemiAbstractTop($src, $config['gallery_cover']['width'], $config['gallery_cover']['height']); // crop & scale
	createIMAGE ($config['fpath'].$main, $tmp2, $config['fpath'].$config['thumb_folder_name'].'thumb_'.$main, 100); // save image
	imagedestroy($src);
	imagedestroy($tmp2);

	}
}

	$get_pages_query = "SELECT * FROM
							`bc_gallery_group`
						WHERE
							`language` = '" . $content_language . "' AND
							`pk` = ". $pk ."";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		$get_pages_data = DBM::fetchObject($get_pages_result);

		$main = $get_pages_data->thumbnail;

		$group_id = $get_pages_data->id;
	}


?>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4><?php echo $get_pages_data->title; ?></h4>
	</div>

	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=addphoto&info_pk=<?php echo $pk; ?>" class="btn btn-info"><?php echo $TRANSLATION['new_image']; ?></a>
        <a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-warning"><?php echo $TRANSLATION['back']; ?></a>
	</div>

</div>
<form method="post" name="321" id="321">
<table class="table table-striped table-bordered">

	<thead>

		<tr>

			<th><?php echo $TRANSLATION['image']; ?></th>
            <th><?php echo $TRANSLATION['title']; ?></th>
            <th><?php echo $TRANSLATION['date']; ?></th>
			<th><?php echo $TRANSLATION['comment']; ?></th>
			<th><?php echo $TRANSLATION['cover']; ?></th>
            <th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
			<th><?php echo $TRANSLATION['sort']; ?></th>

		</tr>

	</thead>

	<tbody>

	<?php



	$get_pages_query = "SELECT * FROM
							`bc_gallery`
						WHERE
							`language` = '" . $content_language . "' AND
							`group_id` = ". $group_id ."
						ORDER BY
							`sort` ASC";

	if ($get_pages_result = DBM::queryData($get_pages_query)) {

		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {

			if($main == $get_pages_data->file) $cheked = 'checked';
			else $cheked = '';

			if(file_exists($config['fpath'].$get_pages_data->file)){

			echo '<tr data-id="' . $get_pages_data->id . '">';
			echo '<td><img src="'. $config['fpath'] .$config['thumb_folder_name']. $get_pages_data->file . '" class="small_img"/></td>';
			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->date . '</td>';
			echo '<td class="hideable">' . $get_pages_data->description . '</td>';
			echo '<td class="hideable"><input type="radio" name="main" '.$cheked.' value="' . $get_pages_data->file . '"/></td>';

			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=editimage&gall_id='.$pk.'&info_pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';

			echo '<td class="hideable"><a href="?page='. $current_page_id .'&language='. $content_language .'&act=deleteimage&gall_id='.$pk.'&info_pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';
			echo '<td class="handle hideable"><i class="icon-move"></i></td>';
			echo '</tr>';
			}
		}

	}


	?>

	</tbody>

</table>
<div class="row-fluid panel-title">

	<div class="span6">
		<h4></h4>
	</div>

	<div class="span6 text-right">
	<input type="submit" name="doSAVE" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success">
</div>

</div>
</form>
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

			xhttp.open("POST", "ajax/sorter.php?gallery", true);
			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhttp.send("id=" + ui.item.attr("data-id") + "&index=" + ui.item.index() + "&language=" + lang);
			$(event.target).sortable("disable");
		}
	}
});

</script>
