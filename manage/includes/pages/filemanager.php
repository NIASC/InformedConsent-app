<?php
if(INSYS != 'pc777') die('404');

// TODO - Check if Compact or Full
$mode = isset($_GET['mode']) ? $_GET['mode']: 'full';


// If Compact - Initialize Page
if ($mode == "compact") {

	// Initialize Page

}


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
//




/*
------------------- ACTIONS ------------------
*/

// UPLOAD FILE
if (isset($_POST['doAdd'])) {

	// Check File Type
	if(checkForUpload($_FILES['newfile']['name'])) {

		// Check File Size
		if($_FILES['newfile']['size'] < $config['upload_max_filesize']) {

			// Convert Filename
			$newName = cleanFilename($_FILES['newfile']['name'], $config['upload_name_validchars']);

			// If we have such file
			while (file_exists($root_folder . $current_folder . $newName)) {

				// Add random number
				$rand = rand(0, 9);

				$newName = str_replace('.', $rand . '.', $newName);

			}

			// Upload File
			if (move_uploaded_file($_FILES['newfile']['tmp_name'], $root_folder . $current_folder . $newName)) {

				// Chmod
				chmod($root_folder . $current_folder . $newName, 0777 );

				$errors['newfile'] = '<div class="alert alert-success">'.$TRANSLATION['uploaded_file_with_name'].' ' . $newName . '.</div>';

			} else {

				$errors['newfile'] = '<div class="alert alert-error">'.$TRANSLATION['upload_file_error'].'</div>';

			}

		} else { // Invalid size

			$errors['newfile'] = '<div class="alert alert-error">'.$TRANSLATION['file_size_error'].': ' . round(($config['upload_max_filesize'] / 1024 / 1024), 4) . 'MB.</div>';

		}

	} else { // Invalid type

		$errors['newfile'] = '<div class="alert alert-error">'.$TRANSLATION['file_type_error'].'</div>';

	}

}
// END OF UPLOAD

// CREATE FOLDER
if (isset($_POST['doCreate'])) {

	// Get Name
	$newName = cleanFoldername($_POST['foldername'], $config['upload_name_validchars']);

	if ($newName != '') {

		if (!file_exists($root_folder . $current_folder . $newName)) {

			// Create Folder
			if (mkdir($root_folder . $current_folder . $newName)) {

				// Chmod
				chmod($root_folder . $current_folder . $newName, 0777);

				$errors['newfolder'] = '<div class="alert alert-success">'.$TRANSLATION['folder_created'].' ' . $newName . '.</div>';

			} else {

				$errors['newfolder'] = '<div class="alert alert-error">'.$TRANSLATION['folder_create_error'].'</div>';

			}

		} else { // folder exists

			$errors['newfolder'] = '<div class="alert alert-error">'.$TRANSLATION['folder'].' ' . $newName . ' '.$TRANSLATION['already_exists'].'.</div>';

		}

	} else { // blank name

		$errors['newfolder'] = '<div class="alert alert-error>'.$TRANSLATION['blank_name_error'].'</div>';

	}

}
// END CREATE FOLDER

// RENAME FILE
if (isset($_POST['doRename'])) {

	// Convert Filename
	$newName = cleanFilename($_POST['filename'], $config['upload_name_validchars']);

	// Append Extension
	if(strstr($_POST['fileext'], '.')) {

		$newName .= $_POST['fileext'];

	} else {

		$newName .= '.' . $_POST['fileext'];

	}

	$srcFile = str_replace('../', '', $_POST['srcFile']);

	// If File Exists
	if (!file_exists($root_folder . $current_folder . $newName)) {

		if (rename($root_folder . $current_folder . $srcFile, $root_folder . $current_folder . $newName)) {

			$errors['filerename'] = '<div class="alert alert-success">Renamed file to ' . $newName . '.</div>';

		} else {

			$errors['filerename'] = '<div class="alert alert-error">'.$TRANSLATION['file_rename_error'].'</div>';

		}

	} else {

		$errors['filerename'] = '<div class="alert alert-error>'.$TRANSLATION['file'].' ' . $newName . ' '.$TRANSLATION['already_exists'].'</div>';

	}

}
// END RENAME FILE

// COPY FILE
if (isset($_POST['doCopy'])) {

	$destFolder = str_replace('../', '', $_POST['destDir']);
	$srcFile = str_replace('../', '', $_POST['srcFile']);

	if (!file_exists($destFolder . $srcFile)) {

		if (copy($root_folder . $current_folder . $srcFile, $destFolder . $srcFile)) {

			$errors['filecopy'] = '<div class="alert alert-success">'.$TRANSLATION['successfully_copied'].'</div>';

		} else {

			$errors['filecopy'] = '<div class="alert alert-error">'.$TRANSLATION['copy_error'].'</div>';

		}

	} else {

		$errors['filecopy'] = '<div class="alert alert-error">'.$TRANSLATION['file_already_exists'].'</div>';

	}

}
// END COPY FILE

// MOVE FILE
if(isset($_POST['doMove'])) {

	$destFolder = str_replace('../', '', $_POST['destDir']);
	$srcFile = str_replace('../', '', $_POST['srcFile']);

	if (!file_exists($destFolder . $srcFile)) {

		if (rename($root_folder . $current_folder . $srcFile, $destFolder . $srcFile)) {

			$errors['filemove'] = '<div class="alert alert-success">'.$TRANSLATION['successfully_moved_file'].'</div>';

		} else {

			$errors['filemove'] = '<div class="alert alert-error">'.$TRANSLATION['file_move_error'].'</div>';

		}

	} else {

		$errors['filemove'] = '<div class="alert alert-error">'.$TRANSLATION['file_already_exists'].'</div>';

	}

}
// END MOVE FILE

// DELETE FILE
if(isset($_POST['doDelete'])) {

	$srcFile = str_replace('../', '', $_POST['srcFile']);

	if (unlink($root_folder . $current_folder . $srcFile)) {

		$errors['filedelete'] = '<div class="alert alert-success">'.$TRANSLATION['file_deleted'].'</div>';

	} else {

		$errors['filedelete'] = '<div class="alert alert-error">'.$TRANSLATION['file_delete_error'].'</div>';

	}


}
//



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




/*

echo "<pre>";
print_r($newList);
echo "</pre>";

*/





// include skim
require_once("includes/pages/filemanager/skin_".$mode.".php");

?>
