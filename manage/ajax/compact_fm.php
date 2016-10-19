<?php
// Include Admin Config
require_once('../includes/config.php');

// Include Admin Functions
require_once('../includes/functions.php');

// Include Database Functions
require_once('../includes/database.class.php');

session_start();

if (!admin_authenticated()) die('<option>access denied!</option>');

$target = extractGET('target');

$target_array = array(
	'fm' => ''
);

$target = isset($target_array[$target]) ? $target : false;

// Get Variables from Config
$root_folder = $config['file_folder'];
$root_folder_url = $config['file_folder_url'];
$root_folder_name = $config['file_folder_name'];
//

// If We're in Folder
if (isset($_GET['folder']) && $_GET['folder'] != '' && !strstr($_GET['folder'], '..')) {
	$current_folder = $_GET['folder'];
	// Get Folder Name
	$current_folder_name = substr($current_folder, 0, strlen($current_folder) - 1);

	if (strstr($current_folder_name, '/')) {
		$current_folder_name = str_replace('/', '', strrchr($current_folder_name, '/'));
	}
	$current_folder_icon = 'folder';
} else {
	$current_folder = '';
	$current_folder_name = str_replace('/', '', $config['file_folder_name']);
	$current_folder_icon = 'home';
}
//

// If current folder is Writable
if (is_writable($root_folder . $current_folder)) {
	$current_folder_writable = true;
} else {
	$current_folder_writable = false;
}
//

// Get Sorting
if (isset($_GET['sort'])) {
	$sort = $_GET['sort'];
} else {
	if ($mode == "compact") {
		$sort = "date-desc"; // "date-asc" | "date-desc" | "name-asc" | "name-desc" | "size-asc" | "size-desc"
	} else {
		$sort = "name-asc";
	}
}

$sort = explode('-', $sort);
$sort_with = $sort[0];
$sort_direction = $sort[1];

//================================================
// displaying
//================================================


// Generate path menu
$pathArr = explode('/', $current_folder);
$pathMenu = '';
$pathItems = array();

foreach ($pathArr as $key => $foldName) {
	if ($foldName != '') {
		// Build URL
		$tempUrl = '';

		for ($i = 0; $i <= $key; $i++) {
			$tempUrl .= $pathArr[$i] . '/';
		}
		$pathItems[] = array('url' => $tempUrl, 'name' => $foldName);
	}
}
// Generate up level link

$ulIndex = count($pathItems) - 2;

if (isset($pathItems[$ulIndex])) {
	$upLevel = $pathItems[$ulIndex]['url'];
} else {
	$upLevel = '';
}

//

// Get file and folder list
$fileList = array();
$folderList = array();
$index = 0;

if ($handle = opendir($root_folder . $current_folder)) {
    while (false !== ($file = readdir($handle))) {
		// If item is file
		if (is_file($root_folder . $current_folder . $file)) {
			// get ALL DATA!
			$fileList[$index]['name'] = $file;
			$fileList[$index]['date'] = filemtime($root_folder . $current_folder . $file);
			$fileList[$index]['url'] = $root_folder_url . $current_folder . $file;
			$fileList[$index]['size'] = filesize($root_folder . $current_folder . $file);
			$fileList[$index]['hsize'] = round((filesize($root_folder . $current_folder . $file) / 1024 / 1024), 4) . 'MB';
			$fileList[$index]['dims'] = getimagesize($root_folder . $current_folder . $file);
			$fileList[$index]['ext'] = strtolower(strrchr($file, '.'));
			//
			$index++;
		} else { // If item is folder
			if ($file != '.' && $file != '..' && $file != str_replace('/', '', $config['temp_file_folder_name'])) {
				if (is_writable($root_folder . $current_folder . $file)) {
					$folderList[] = array('locked' => '', 'fname' => $file);
				} else {
					$folderList[] = array('locked' => 'locked', 'fname' => $file);
				}
			}
		}
  }
  closedir($handle);
}

// Sort Stuff
$newList = array();

if ($sort_with == "date") {
	// Use date as key
	foreach ($fileList as $key => $item) {
		$newList[$item['date']] = $item;
	}

} elseif ($sort_with == 'size') {
	// Use size as key
	foreach ($fileList as $key => $item) {
		$newList[$item['size']] = $item;
	}

} else {
	// Use name as key
	foreach($fileList as $key => $item) {
		$newList[$item['name']] = $item;
	}
}

if ($sort_direction == 'asc') {
	ksort($newList);
} else {
	krsort($newList);
}

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
				<th>Preview</th>
				<?php echo printCompactHeaders('name', $sort_with, $sort_direction, $current_folder)?>
				<?php echo printCompactHeaders('size', $sort_with, $sort_direction, $current_folder)?>
				<?php echo printCompactHeaders('date', $sort_with, $sort_direction, $current_folder)?>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>&nbsp;</td>
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
								<td>&nbsp;</td>
								<td><a href="#" data-folder="' . $current_folder . $item['fname'] . '/" data-target="fm">' . $item['fname'] . '/</a></td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>';
				$c++;
			}
			// next - files
			$c = 0;
			$img_exts = array('.jpg' => '','.png' => '','.gif' => '');
			foreach ($newList as $key => $item) {
				$preview = isset($img_exts[$item['ext']]) ? '<img width="100px" src="'.$item['url'].'" />' : '&nbsp;';

				echo '<tr>
								<td><input type="checkbox" name="listitems" value="'.$item['url'].'" fileext="' . $item['ext'] . '" filename="' . $item['name'] . '" /></td>
								<td>' . $preview . '</td>
								<td>' . $item['name'] . '</td>
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
		xhttp.open("GET", "ajax/compact_fm.php?target=" + target + "&folder=" + folder + "&sort=" + sort, true);
		xhttp.send();
	});

	$("#files-insert-button").on("click", function(event) {
		event.preventDefault();
		$("input[name=listitems]:checked").each(function() {
			fileext = this.getAttribute("fileext");
			if(fileext == ".jpg" || fileext == ".png" || fileext == ".gif") {
				html = '<img src="' + this.value + '"/>';
			} else {
				html = '<a href="' + this.value + '">' + this.getAttribute("filename") + '</a>';
			}
			CKEDITOR.instances.editor_full.insertHtml(html);
		});
		$("#file-selector").modal("hide");
		$("#file-selector .modal-body").html('');
	});
</script>
<?php endif; ?>
