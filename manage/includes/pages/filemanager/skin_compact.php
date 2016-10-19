<?php
if(INSYS != 'pc777') die('404');
ob_clean();
?>
<? if($target == 'fm' || $target == false): ?>
<div id="fm">
	<ul class="breadcrumb">
		<li><a href="#" data-folder="" data-target="fm"><?php echo str_replace('/', '', $config['file_folder_name']); ?></a><span class="divider">/</span></li>
		<?php
		foreach ($pathItems as $key => $item) {
			echo '<li><a href="#" data-folder="' . $item['url'] . '" data-target="fm">' . $item['name'] . '</a>  <span class="divider">/</span></li>';
		}
		?>
	</ul>
	<table class="table table-bordered file-list-table">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<?php echo printCompactHeaders('name', $sort_with, $sort_direction, $current_folder)?>
				<?php echo printCompactHeaders('size', $sort_with, $sort_direction, $current_folder)?>
				<?php echo printCompactHeaders('date', $sort_with, $sort_direction, $current_folder)?>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
				<td><a href="#" data-folder="<?php echo $upLevel; ?>" data-target="fm">..</a></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<?php
			$c = 0;
			// first - folders
			foreach ($folderList as $key => $item) {
				echo '<tr>
								<td>&nbsp;</td>
								<td><a href="#" data-folder="' . $current_folder . $item['fname'] . '/" data-target="fm">' . $item['fname'] . '/</a></td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>';
				$c++;
			}
			// next - files
			$c = 0;
			foreach ($newList as $key => $item) {

				echo '<tr>
								<td><input type="checkbox" name="listitems" fileext="' . $item['ext'] . '" filename="' . $item['name'] . '" /></td>
								<td><a href="' . $item['url'] . '" target="_blank">' . $item['name'] . '</a></td>
								<td>' . $item['hsize'] . '</td>
								<td>' . date('d.m.Y', $item['date']) . '</td>
							</tr>';
				$c++;
			}
			?>
		</tbody>
	</table>
</div>
<?php endif; ?>
<?php if($target == false): ?>
<script type="text/javascript">
  $("#fm").on('click', 'a', function(event) {
		event.preventDefault();

		var target = this.dataset.target;
		var folder = this.dataset.folder;
		var sort = this.dataset.sort;

		xhttp = getXHR();
		xhttp.onreadystatechange = function() {
			if (xhttp.readyState !== XMLHttpRequest.DONE) {
				return;
			}
			if (xhttp.status !== 200) {
				return;
			}
			$("#" + target).html(xhttp.responseText);
		};
		xhttp.open("GET", "?page=99&language=en&mode=compact&target=" + target + "&folder=" + folder + "&sort=" + sort, true);
		xhttp.send();
	});
</script>
<?php endif; ?>
<?php ob_flush(); ?>
