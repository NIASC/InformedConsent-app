<?php
// Include Admin Config
require_once('../includes/config.php');

// Include Admin Functions
require_once('../includes/functions.php');

// Include Database Functions
require_once('../includes/database.class.php');

session_start();

if (!admin_authenticated()) die('<option>access denied!</option>');

if(isset($_POST['remove_image'])) {
	
  if($_POST['remove_image'] != '' && file_exists($config['temp_file_folder'].$_POST['remove_image'])) {
    @unlink($config['temp_file_folder'].$_POST['remove_image']);
  }
}

if(isset($_POST['upload_image'])) {

  if($_FILES['image']['name'] != '') {

    $image_name = rand(1000,9999).$_FILES['image']['name'];
    $image_name = str_replace(' ', '', $image_name);

    $remote_file = $_FILES['image']['type'];

    switch ($remote_file) {
      case 'image/jpeg':
        $image = imagecreatefromjpeg($_FILES['image']['tmp_name']);
      break;
      case 'image/gif':
        $image = imagecreatefromgif($_FILES['image']['tmp_name']);
      break;
      case 'image/png':
        $image = imagecreatefrompng($_FILES['image']['tmp_name']);
      break;
      case "image/bmp":
        $image = imagecreatefromwbmp($_FILES['image']['tmp_name']);
      break;
    }
	
    $image_tmp_path = $config['temp_file_folder'].$image_name;

    switch ($remote_file) {
      case 'image/jpeg':
        $uploaded = imagejpeg($image, $image_tmp_path, 100);
      break;
      case 'image/gif':
        $uploaded = imagegif($image, $image_tmp_path, 100);
      break;
      case 'image/png':
        $uploaded = imagepng($image, $image_tmp_path, 9);
      break;
      case "image/bmp":
        $uploaded = imagewbmp($image, $image_tmp_path, 100);
      break;
    }

    if($uploaded) {
      header('Content-Type: application/json');
      echo json_encode(array(
        'name' => $image_name,
        'src' => $config['temp_file_folder_url'].$image_name));
    }

    imagedestroy($image);
  }
}

if(isset($_GET['folder'])) {
  $tempDir = $config['temp_file_folder'];
  $files = array();
  if($dh = openDir($tempDir)) {
    while(($file = readDir($dh)) !== false) {
      if($file !== '.' && $file !== '..') {
        $files[] = $file;
      }
    }
  }

  if($_GET['folder'] == 'info') {
    $folder_size = 0;
    foreach($files as $file) {
      $folder_size += filesize($tempDir . $file);
    }

    header('Content-Type: application/json');
    echo json_encode(array(
      'files' => sizeof($files),
      'size' => $folder_size));

  } else if(isset($_POST['clear'])) {
    foreach($files as $file) {
      @unlink($tempDir . $file);
    }
  }
}
?>
