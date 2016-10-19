<?php


/*
if (substr($_SERVER['HTTP_HOST'], 0, 3) != 'www') {

	header('HTTP/1.1 301 Moved Permanently');
	header('Location: http://www.'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}

if (substr($_SERVER['REQUEST_URI'], -1) != '/') {
	header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'/');
}
*/

// Start Caching
ob_start();

// Start Session
session_start();

error_reporting(E_ERROR | E_WARNING);
//error_reporting(E_ALL);

// Full Directory Path
define('DIR_PATH', dirname(__FILE__) . '/');

// Include Constants
require_once(DIR_PATH . 'includes/constants.php');

// Include Config
require_once(DIR_PATH . 'includes/database/mysql/config.php');

// Include General Functions
require_once(DIR_PATH . 'includes/general_functions.php');

// Include Database Functions
require_once(DIR_PATH . 'includes/database.class.php');

// Open Connection to DB
$database_link = DBM::open($config['database']);

// SiteData Array
$siteData = whereWeAre($config, $database_link);

$firstSection = firstSection($siteData['section'], $siteData['language']);

// Include Language
require_once(DIR_PATH . 'includes/language/' . $siteData['language'] . '.php');

//$shortcodes = array('news-widget' => newsWidget());

//settings
$setting_data = get_settings();

$siteData['friendly_user'] = friendly_user($setting_data['friendly_ip']);

// Generate Menus
$main_menu = build_menu_by_id($database_link, 0, $siteData['language'], 2, 0, 'nav navbar-nav site-nav pull-right');
$top_menu = build_menu_by_id($database_link, 0, $siteData['language'], 5, 0, 'nav navbar-nav members-nav pull-right');

// Generate Navigator
$navigator = generateNavigator($siteData['section'], $siteData['language'], $database_link);

//user info
/*
if(user_authenticated())
$PROFILE = user($_SESSION['user_id']);
*/
// Smarty Stuff
// Include Smarty
require_once(DIR_PATH . SMARTY_DIR . 'Smarty.class.php');

// Init Smarty Object
$smarty = new Smarty();

// Smarty Settings
$smarty->setTemplateDir(DIR_PATH . SMARTY_TEMPLATES_DIR);
$smarty->setCompileDir(DIR_PATH . SMARTY_TEMPLATES_C_DIR);
$smarty->setConfigDir(DIR_PATH . SMARTY_CONFIGS_DIR);
$smarty->setCacheDir(DIR_PATH . SMARTY_CACHE_DIR);

// Smarty Debug Console
//$smarty->debugging = true;
// Include Sidebar
require_once(DIR_PATH . 'includes/section_types/sidebar.php');
require_once(DIR_PATH . 'includes/section_types/footer.php');

// Smarty Variables for Use
$smarty->assign('site_url', SITE_URL);
$smarty->assign('site_data', $siteData);
$smarty->assign('language', $language);
$smarty->assign('language_array', $config['languages_desc']);
//
$smarty->assign('main_menu', $main_menu);
$smarty->assign('top_menu', $top_menu);
//
$smarty->assign('navigator', $navigator);
//$smarty->assign('navigator_info', $navigator_info);
$smarty->assign('setting_data', $setting_data);
//$smarty->assign('PROFILE', $PROFILE);
//
$smarty->assign('site_languages', $config['languages']);
// Require Section Type

require_once(DIR_PATH . 'includes/section_types/' . $siteData['section_type_file']);

if($siteData['section_type'] == 404) {

	$smarty->display('404.tpl');

} elseif ($siteData['section_type_dynamic'] == 1) {
	
	$smarty->display('skeleton_ajax.tpl');	

} else {

	$smarty->display('skeleton_main.tpl');
}
// Flush Cache
ob_end_flush();

?>