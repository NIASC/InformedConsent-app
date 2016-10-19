<?php

// Start Caching
ob_start();

// Start Session
session_start();

error_reporting(0);

// Full Directory Path
define('DIR_PATH', dirname(__FILE__) . '/');

// Include Admin Config
require_once(DIR_PATH . 'includes/config.php');

// Include Admin Functions
require_once(DIR_PATH . 'includes/functions.php');

// Include Database Functions
require_once(DIR_PATH . 'includes/database.class.php');

// Avoid Standalone Include
define('INSYS', 'pc777');

// What is Current Page
if (isset($_GET['page'])) {
	$current_page_id = (int) $_GET['page'];
} else {
	$current_page_id = 0;
}

// Check if Authenticated
if (!admin_authenticated()) {
	$current_page_id = -1;
}

// Get Content Language
if ($_GET['language']) {
	$content_language = $_GET['language'];
} else {
	$content_language = $config['languages']['0'];
}
//

// Connect to Database, if not Auth
if ($current_page_id != -1) {
	$database_link = DBM::open($config['database']);
	require_once(DIR_PATH . 'includes/translations/en.php');
}
//

// Require Top Template
require_once(DIR_PATH . 'includes/pages/tpl_top.php');

if($current_page_id != -1) {
	$admin = get_admin();
	//fill pages conf
	$get_pages_query = "SELECT 
							`id`, 
							`name`, 
							`group_name`, 
							`file`, 
							`active`
						FROM `bc_pages`
						WHERE 
							`active` = 'Y' 
						ORDER BY `sort`";
	$pages_result = DBM::queryData($get_pages_query, $database_link);
	while($page = DBM::fetchObject($pages_result)) {
		$config['admin_pages'][$page->id] = $page;
		$config['page_groups'][$page->group_name][$page->id] = &$config['admin_pages'][$page->id];
	}
	//
}

if($current_page_id > 0 && !isset($admin['permissions'][$current_page_id])) {
	$hasPermission = false;
} else {
	$hasPermission = true;
}

if (isset($config['library_admin_pages'][$current_page_id]) && $hasPermission && file_exists(DIR_PATH . 'includes/pages/' . $config['library_admin_pages'][$current_page_id]->file) && $admin['group_id'] == 2) {

	require_once(DIR_PATH . 'includes/pages/' . $config['library_admin_pages'][$current_page_id]->file);

} elseif (isset($config['admin_pages'][$current_page_id]) && $hasPermission && file_exists(DIR_PATH . 'includes/pages/' . $config['admin_pages'][$current_page_id]->file) ) {

	require_once(DIR_PATH . 'includes/pages/' . $config['admin_pages'][$current_page_id]->file);

} else {

	$current_page_id = 0;

	require_once(DIR_PATH . 'includes/pages/' . $config['admin_pages'][$current_page_id]->file);

}

// Require Bot Template
require_once(DIR_PATH . 'includes/pages/tpl_bot.php');

// Close Database, if not Auth
if ($current_page_id != -1) {
	DBM::close($database_link);
}
//

// Flush Cache
ob_end_flush();

?>
