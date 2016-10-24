<?php

$config = array();

// Database

$config['database']['host'] = 'localhost';
$config['database']['username'] = 'root';
$config['database']['password'] = '';
$config['database']['database'] = 'research';

// General

$config['languages'] = array('en');
$config['site_url'] = 'http://localhost/research/manage/';
$config['file_path'] = 'http://localhost/research/html/res/images/';
$config['fpath'] = '../html/res/images/';
$config['PDFpath'] = '../html/res/docs/';

$config['site_address'] = 'http://localhost/research/html/';
$config['base_path'] = '/Applications/MAMP/htdocs/research/html';
$config['thumb_folder_name'] = 'thumb/';
$config['slider_folder_name'] = 'slider/';
$config['docs_folder_name'] = '../docs/';


//file-manager
$config['file_folder'] = $config['base_path'] . 'res/images/file-manager/';
$config['file_folder_name'] = 'res/images/file-manager/';
$config['file_folder_url'] = $config['site_address'] . 'res/images/file-manager/';

$config['temp_file_folder'] = $config['base_path'] . 'res/images/tmp/';
$config['temp_file_folder_name'] = 'tmp/';
$config['temp_file_folder_url'] = $config['site_address'] . 'res/images/tmp/';


$config['slider_post_images']['width'] = 259;
$config['slider_post_images']['height'] = 318;
$config['post_images']['width'] = 422;
$config['post_images']['height'] = 267;
$config['gallery_images']['width'] = 400;
$config['gallery_images']['height'] = 300;
$config['gallery_cover']['width'] = 400;
$config['gallery_cover']['height'] = 300;


// Pages
$config['admin_pages'][-1] = (object)array('file' => 'auth.php');
$config['admin_pages'][0] = (object)array('file' => 'dashboard.php');

// Upload Extensions
$config['upload_extensions'] = '.pdf .doc .docx .xls .xlsx .jpg .gif .png .zip .rar .ppt .flv .swf .jpeg';
$config['upload_max_filesize'] = 128000000; // in bytes
$config['upload_name_validchars'] = "abcdefghijklmnopqrstuvwxyz0123456789-_.";


?>
