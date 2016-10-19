<?php

// Cleanup URI
function cleanupURI($uri) {
	
	$uri = str_replace('\\', '/', $uri);
	$uri = preg_replace('!\.+/!', '', $uri);
	$uri = trim(trim($uri), '\/');
	$uri = preg_replace('!/+!', '/', $uri);
	$uri = mysql_escape_string($uri);
	
	return $uri;
	
}
//

// Extract Post Variable
function extractPost($var) {
	
	if (!isset($_POST[$var])) {
		return false;
	}
	
	if (is_array($_POST[$var])) {
		return $_POST[$var];
	}
	
	return trim($_POST[$var]);
	
}
//

// Extract Post Variable
function extractGet($var) {
	
	if (!isset($_GET[$var])) {
		return false;
	}
	
	if (is_array($_GET[$var])) {
		return $_GET[$var];
	}
	
	return trim($_GET[$var]);
	
}
//

// Value Comparsion For Selectbox
function is_selected($val, $realval) {
	
	if ($val == $realval) {
		
		return ' selected="selected"';
		
	}
	
}
//

// Determine Language And Section
function whereWeAre($config, $database_link) {
	
	$return_value = array();
	$found = false;
	$found_INFO = false;
	
	if (GET_QUERY_STRING == 1) {
		
		$currentURI = cleanupURI($_GET['que']);
		
	} else {
	
		if (strpos($_SERVER['REQUEST_URI'], '?') > 0) {
			$currentURI = substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], '?'));
			$dirty_url = explode('?',$_SERVER['REQUEST_URI']);
			$return_value['dirty_url'] = '?'.$dirty_url[1];
			
			
		} else {
			$currentURI = $_SERVER['REQUEST_URI'];//old version
			
		}
		
		$currentURI = cleanupURI($currentURI);
		
		if (IN_FOLDER != '') {
			$currentURI = str_replace(IN_FOLDER, '', $currentURI);
		}
		
	}
	
	$uriArr = explode('/', $currentURI);
	
	if (in_array($uriArr[0], $config['languages'])) {
		
		$return_value['language'] = $uriArr[0];
		
		$genSlug = substr($currentURI, 3);
		
	} else {
		
		$return_value['language'] = $config['languages'][0];
		
		$genSlug = $currentURI;
		
	}
	
				
	if ($charPos = strpos($genSlug, '?')) {
		$genSlug = substr($genSlug, 0, $charPos);
		
	}
	
	//possible info slug
		$genSlug = explode('/', $genSlug);
		$genSlug_END = end($genSlug);
		$genSlug_TRIM = $genSlug;
		array_pop($genSlug_TRIM);
		if(is_array($genSlug_TRIM))
		$genSlug_TRIM = implode('/',$genSlug_TRIM);
		$genSlug = implode('/',$genSlug);
		
	
	$get_section_query = "
				SELECT 
					bc_sections.pk, 
					bc_sections.id, 
					bc_sections.name, 
					bc_sections.description, 
					bc_sections.parent_id, 
					bc_sections.language, 
					bc_sections.slug, 
					bc_sections.sort, 
					bc_sections.type, 
					bc_sections.style, 
					bc_section_types.name type_name, 
					bc_section_types.file, 
					bc_section_types.dynamic 
				FROM 
					bc_sections left join 
					bc_section_types on 
					bc_sections.type = bc_section_types.id 
				WHERE 
					bc_sections.language = '" . $return_value['language'] . "' AND 
					bc_sections.slug = '" . urldecode($genSlug) . "'";
	
	$get_section_trim_query = "
				SELECT 
					bc_sections.pk, 
					bc_sections.id, 
					bc_sections.name, 
					bc_sections.description, 
					bc_sections.parent_id, 
					bc_sections.language, 
					bc_sections.slug, 
					bc_sections.sort, 
					bc_sections.type, 
					bc_sections.style,
					bc_section_types.name type_name, 
					bc_section_types.file, 
					bc_section_types.dynamic 
				FROM 
					bc_sections left join 
					bc_section_types on 
					bc_sections.type = bc_section_types.id 
				WHERE 
					bc_sections.language = '" . $return_value['language'] . "' AND 
					bc_sections.slug = '" . urldecode($genSlug_TRIM) . "'";
	
	if (($get_section_result = DBM::queryData($get_section_query, $database_link)) && $genSlug) {$found = TRUE;}
	
	elseif (($get_section_result = DBM::queryData($get_section_trim_query, $database_link)) && $genSlug_TRIM) {$found_INFO = TRUE;} 
	
	if ($found || $found_INFO){
		
		
		
		$get_section_data = DBM::fetchObject($get_section_result);
		
		$return_value['section'] = $get_section_data->id;
		
		$return_value['section_pk'] = $get_section_data->pk;
		
		$return_value['section_parent'] = $get_section_data->parent_id;
		
		$return_value['section_name'] = $get_section_data->name;
		
		$return_value['section_slug'] = $get_section_data->slug;
		
		$return_value['section_type'] = $get_section_data->type;
		
		$return_value['section_style'] = $get_section_data->style;
		
		$return_value['section_type_file'] = $get_section_data->file;
		
		$return_value['section_type_dynamic'] = $get_section_data->dynamic;
		
		$return_value['section_description'] = $get_section_data->description;
		
		if ($found_INFO) $return_value['slug_END'] = $genSlug_END;	
		
		else $return_value['slug_END'] = false;
	
	}
	else { 
	
		
		$return_value['section'] = $config['default_section_id'];
		
		$get_default_section_query = "
				SELECT 
					bc_sections.pk, 
					bc_sections.id, 
					bc_sections.name, 
					bc_sections.description, 
					bc_sections.parent_id, 
					bc_sections.language, 
					bc_sections.slug, 
					bc_sections.sort, 
					bc_sections.type, 
					bc_section_types.name type_name, 
					bc_section_types.file, 
					bc_section_types.dynamic 
				FROM 
					bc_sections left join 
					bc_section_types on 
					bc_sections.type = bc_section_types.id 
				WHERE 
					bc_sections.id = '" . $return_value['section'] . "' AND 
					bc_sections.language = '" . $return_value['language'] . "'";
		
		if ($get_default_section_result = DBM::queryData($get_default_section_query, $database_link)) {
			
			$get_default_section_data = DBM::fetchObject($get_default_section_result);
			
			$return_value['section_name'] = $get_default_section_data->name;
			
			$return_value['section_slug'] = $get_default_section_data->slug;
			
			$return_value['section_pk'] = $get_default_section_data->pk;
			
			$return_value['section_parent'] = $get_default_section_data->parent_id;
			
			$return_value['section_type'] = $get_default_section_data->type;
			
			$return_value['section_type_file'] = $get_default_section_data->file;
			
			$return_value['section_type_dynamic'] = $get_default_section_data->dynamic;
			
			$return_value['section_description'] = $get_default_section_data->description;
			
			if($genSlug != '' && $genSlug.'/' != IN_FOLDER) {
				
				$return_value['section_type_file'] = '404.php';
				$return_value['section_type'] = 404;
			}
		}
		
		
	}
	
		//-==================================================================
		$get_other_language_section_query = "SELECT * FROM bc_sections WHERE id = '" . $return_value['section'] . "' AND bc_sections.language != '" . $return_value['language'] . "'";
		
		if ($get_other_language_section_result = DBM::queryData($get_other_language_section_query, $database_link)) {
			
			while($get_other_language_section_data = DBM::fetchObject($get_other_language_section_result))
			
			$return_value['section_slug_by_language'][$get_other_language_section_data->language] = $get_other_language_section_data->slug;
		}
		//-==================================================================
		
		

	if (isset($_GET['page']) && is_numeric($_GET['page'])) {
		
		$return_value['page'] = (int) $_GET['page'];
		
	} else {
		$return_value['page'] = 1;
	}
	
	$return_value['section_img'] = '';
	
	$return_value['slug'] = $genSlug;
	
	return $return_value;
	
}
//

// Generate Top Menu
function generateMenuByType($siteData, $menu_id, $is_sub, $database_link) {
	
	$return_value = array();
	
	if ($is_sub == true) {
		
		$query = "SELECT
				bc_sections.pk,
				bc_sections.id,
				bc_sections.name,
				bc_sections.description,
				bc_sections.language,
				bc_sections.slug,
				bc_sections.sort,
				bc_sections.type
			FROM
				bc_sections
			WHERE
				bc_sections.language = '" . $siteData['language'] . "' AND
				bc_sections.active = 'Y' AND
				(bc_sections.parent_id = " . $siteData['section_parent'] . " OR bc_sections.parent_id = " . $siteData['section'] . ") AND
				bc_sections.pk IN (SELECT
									section_pk
								FROM
									bc_section_to_menu
								WHERE
									menu_id = " . $menu_id . ")
			ORDER BY
				bc_sections.sort";
		
	} else {
	
		$query = "SELECT
				bc_sections.pk,
				bc_sections.id,
				bc_sections.name,
				bc_sections.description,
				bc_sections.language,
				bc_sections.slug,
				bc_sections.sort,
				bc_sections.type
			FROM
				bc_sections
			WHERE
				bc_sections.language = '" . $siteData['language'] . "' AND
				bc_sections.active = 'Y' AND
				bc_sections.pk IN (SELECT
									section_pk
								FROM
									bc_section_to_menu
								WHERE
									menu_id = " . $menu_id . ")
			ORDER BY
				bc_sections.sort";
	
	}
	
	if ($result = DBM::queryData($query, $database_link)) {
		
		while ($data = DBM::fetchObject($result)) {
			
			$return_value[] = $data;
			
		}
		
	}
	
	return $return_value;
	
}

function menu_by_parent($siteData, $parent, $menu_id, $database_link) {
	
	$query = "SELECT 
				bc_sections.pk,
				bc_sections.id,
				bc_sections.name,
				bc_sections.description,
				bc_sections.language,
				bc_sections.slug,
				bc_sections.sort,
				bc_sections.type 
			FROM 
				bc_sections 
			WHERE 
				bc_sections.language = '" . $siteData['language'] . "' AND
				bc_sections.active = 'Y' AND
				bc_sections.parent_id = '".$parent."' AND
				bc_sections.pk IN (SELECT
									section_pk
								FROM
									bc_section_to_menu
								WHERE
									menu_id = " . $menu_id . ")
			ORDER BY `sort`
				";
		if ($result = DBM::queryData($query, $database_link)) {
		
		while ($data = DBM::fetchObject($result)) {
			
			$return_value[] = $data;
			
		}
		
	}
	
	return $return_value;
}
//
function firstSection($section_id, $language) {
	
	global $database_link;
	
	$query = "SELECT `id`,`parent_id`,`name` FROM `bc_sections` WHERE `id` = " . $section_id . " AND `language` = '" . $language . "'";
	
	if ($result = DBM::queryData($query, $database_link)) {
	
		$data = DBM::fetchObject($result);
		
		if($data->parent_id == 0)	{
			
			return array('id' => $data->id, 'name' => $data->name);
		
		} else return firstSection($data->parent_id, $language);
	}	
}

function submenus_arr ($section_id, $section_language) {

	$query = "SELECT * FROM `bc_sections` WHERE `parent_id` = ".$section_id." AND `language` = '".$section_language."'";
	
	if($result = DBM::queryData($query, $database_link)) {
	
		while($data = DBM::fetchObject($result)) {
		
			$value[] = $data;
			$value[] = submenus_arr ($data->id, $data->language);
		
		}
	
	} else return;

	return $value;

}

// Generate Navigator
function generateNavigator($section_id, $language, $database_link) {
	
	$return_value = '';
	
	$query = "SELECT `id`, `name`, `slug`, `parent_id`, `language` FROM `bc_sections` WHERE `id` = ".$section_id." AND `language` = '".$language."'";
	
	if ($result = DBM::queryData($query, $database_link)) {
	
		$data = DBM::fetchObject($result);
		
		$return_value = $data;
		
		if ($data->parent_id != 0) {
			
			$return_value = array($return_value);
			
			array_unshift($return_value, generateNavigator($data->parent_id, $language, $database_link));
			
		}
	
	}
	
	return $return_value;
	
}

//

function trim_text($input, $length, $ellipses = true, $strip_html = true) {

    //strip tags, if desired

    if ($strip_html) {
        $input = strip_tags($input);
    }
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }  

    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);  

    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
    return $trimmed_text;
}

function datemutation($str, $language) {
	
	$str = explode('-', $str);
	$com = explode(' ',$str[2]);
	$time = explode(':',$com[1]);
	return $com[0].' '.$language[$str[1]].' '.$str[0];
}

// Menu Build Recursively
function build_menu_by_id($database_link, $parent_id, $section_language, $menu_id, $level = 0, $main_class = '') {
	
	global $siteData, $firstSection, $navigator;
	$retVal = '';
	
	$get_sections_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`sort`
							FROM
					`bc_sections`
							WHERE
					`bc_sections`.`parent_id` = " . $parent_id . " AND
					`bc_sections`.`language` = '" . $section_language . "' AND
					`bc_sections`.`active` = 'Y' AND
					`bc_sections`.`pk` IN (SELECT
									`section_pk`
								FROM
									`bc_section_to_menu`
								WHERE
									`menu_id` = " . $menu_id . ")
							ORDER BY
					`bc_sections`.`sort` ASC";
	
	if ($get_sections_result = DBM::queryData($get_sections_query)) {
		
		if ($level == 0) {
			$retVal .= '<ul class="'.$main_class.'">';
		} else if ($level == 1) {
			$retVal .= '<ul class="drop-down">';
		} else {
			$retVal .= '<ul>';
		}
		$index = 0;
		
		
		while ($get_sections_data = DBM::fetchObject($get_sections_result)) {
			
			$section_has_child = section_has_child_in_menu($database_link, $get_sections_data->id, $get_sections_data->language, $menu_id);
			
			$retVal .= '<li class="';	
			
			if($get_sections_data->id == $firstSection['id'])
			
			$retVal .= 'active ';
			
			if($siteData['section'] == $get_sections_data->id) {
			$retVal .= 'active ';
			}
			
			if($index == 0 && $level == 0)
			$retVal .= 'first ';
			
			if ($section_has_child)
			$retVal .= 'drop';
			
			$retVal .= '">';
			
			$index++;
			
			$retVal .= ($get_sections_data->type != 94)?'<a href="' . SITE_URL . $get_sections_data->language . '/' . $get_sections_data->slug . '/">':'<a href="' . $get_sections_data->slug . '">';
			if ($menu_id == 5) $retVal .= '<i class="fa fa-arrow-circle-o-right"></i> ';
			$retVal .= $get_sections_data->name; 
			$retVal .= '</a>';
			
			if ($section_has_child) {
				
				$retVal .= '<div class="drop-down-arrow absolute">
								<i class="fa fa-angle-down fa-angle-right" aria-hidden="true"></i>
							</div>';
				
				$retVal .= build_menu_by_id($database_link, $get_sections_data->id, $get_sections_data->language, $menu_id, $level + 1);
				
			}
			
			$retVal .= '</li>';
			
		}
		
		$retVal .= '</ul>';
		
	}
	
	return $retVal;
	
}

function sitemap($database_link, $parent_id, $section_language, $menu_id, $level = 0) {	
	
	global $siteData, $firstSection;
	
	$get_sections_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`sort`
							FROM
					`bc_sections`
							WHERE
					`bc_sections`.`parent_id` = " . $parent_id . " AND
					`bc_sections`.`language` = '" . $section_language . "' AND
					`bc_sections`.`active` = 'Y' AND
					`bc_sections`.`pk` IN (SELECT
									`section_pk`
								FROM
									`bc_section_to_menu`)
							ORDER BY
					`bc_sections`.`sort` ASC";
	
	if ($get_sections_result = DBM::queryData($get_sections_query)) {
		
		if ($level == 0) {
			$retVal .= '<ul>';
		} else if ($level == 1) {
			$retVal .= '<ul>';
		} else {
			$retVal .= '<ul>';
		}
		$index = 0;
		while ($get_sections_data = DBM::fetchObject($get_sections_result)) {
			
			$section_has_child = section_has_child_in_menu($database_link, $get_sections_data->id, $get_sections_data->language, $menu_id);
			
			$retVal .= '<li class="';	
			
			if($index == 0 && $level == 0)
			$retVal .= 'first ';
			
			if ($section_has_child)
			$retVal .= 'sub-menus';
			
			$retVal .= '">';
			
			$index++;
			
			$retVal .= '<a href="' . SITE_URL . $get_sections_data->language . '/' . $get_sections_data->slug . '/">' .  $get_sections_data->name . '</a>';
			
			if ($section_has_child) {
				
				$retVal .= '<div class="drop-down-arrow absolute">
								<i class="icons down-icon"></i>
							</div>';
				
				$retVal .= sitemap($database_link, $get_sections_data->id, $get_sections_data->language, $menu_id, $level + 1);
				
			}
			
			$retVal .= '</li>';
			
		}
		
		$retVal .= '</ul>';
		
	}
	
	return $retVal;
}
//

// Section Has Child
function section_has_child_in_menu($database_link, $id, $language, $menu_id) {

	$query = "SELECT `pk`, 
				`id`, 
				`name`, 
				`description`, 
				`language`, 
				`parent_id`, 
				`slug`, 
				`type`, 
				`active`, 
				`sort` 
			FROM `bc_sections` 
			WHERE `parent_id` = " . $id . " AND 
				`language`= '" . $language . "' AND
					`bc_sections`.`pk` IN (SELECT
									`section_pk`
								FROM
									`bc_section_to_menu`
								WHERE
									`menu_id` = " . $menu_id . ")";
	
	if ($result = DBM::queryData($query)) {
		$data = DBM::numRows($result);
	} else {
		$data = false;
	}

	return $data;

}

//
function date_transform($date, $language){
	
	$date = explode('-',substr($date, 0, 10));
	
	$transformed['year'] = $date[0];
	$transformed['month'] = $language[$date[1]];
	$transformed['day'] = $date[2];
	$transformed['strip_month'] = $language['strip_month'][$date[1]];
	
	return $transformed;
	}



// banners
function banners($language, $type, $order_by = "`sort`"){
	
	global $database_link;
	
	$query = "SELECT * FROM `bc_banner` 
				WHERE 
					`type` = ".$type." AND 
					`language` = '". $language ."' AND 
					`active` = 'Y' AND 
					`all_sections` = 'Y'
				ORDER BY ".$order_by."";
			
	if ($result = DBM::queryData($query)){
		
		$list_data = array();
		
		while ($get_info_data = DBM::fetchObject($result)){	
				
			$list_data[] = array('file' => $get_info_data->file,
								'url' => $get_info_data->url,
								'target' => $get_info_data->target,
								'description' => strip_tags($get_info_data->title));
			}
		}
		
	
	return $list_data;

}

// settings
function get_settings()
{
	$query = "SELECT * FROM `bc_settings` group by slug";
if ($result = DBM::queryData($query)){
	$settings = array();
	while($get_info_data = DBM::fetchObject($result))
		$settings[$get_info_data->slug] = $get_info_data->value;
	}
	return $settings;
}

//get related info
function get_related_info($id, $language, $database_link){
	
$related_news = array();

$query = "SELECT 
				`bc_info`.`id`,
				`bc_info`.`title`,
				`bc_sections`.`slug`
			FROM
				`bc_relationship`, `bc_info`, `bc_sections`
			WHERE
				((`bc_relationship`.`from` = " . $id . " AND
				`bc_relationship`.`to` = `bc_info`.`id`)
				OR
				(`bc_relationship`.`to` = " . $id . " AND
				`bc_relationship`.`from` = `bc_info`.`id`)) 
				AND
				`bc_info`.`language` = '". $language ."' AND
				`bc_info`.`language` = `bc_sections`.`language` AND
				`bc_sections`.`id` = `bc_info`.`section_id`
			ORDER BY `bc_relationship`.`relation_id` DESC";
	
	if ($result = DBM::queryData($query, $database_link)) {
		
		while ($data = DBM::fetchObject($result)){
			
			$related_news[] = array('id' => $data->id, 'title' => $data->title, 'section_slug' => $data->slug);
		}
	}
		return $related_news;
}

//get related gall album
function get_related_gall_album($id, $language, $database_link){
	
	$query = "SELECT 
				`bc_gallery_group`.`id`,
				`bc_gallery_group`.`thumbnail`,
				`bc_gallery_group`.`title`,
				`bc_gallery_group`.`description`
			FROM
				`bc_gallery_group`
			WHERE
				`bc_gallery_group`.`id` = ". $id ." AND
				`bc_gallery_group`.`language` = '". $language ."'";
	
	if ($result = DBM::queryData($query, $database_link)) {
		
	$data = DBM::fetchObject($result);
	
	$related_gall = array('thumbnail' => $data->thumbnail,
						'title' => $data->title,
						'id' => $data->id,
						'description' => $data->description
						);
	}
	
	return $related_gall;
}
//get related gallery
function get_related_gall($id, $language, $database_link){
	
$related_news = array();

$query = "SELECT 
				`bc_gallery`.`id`,
				`bc_gallery`.`file`,
				`bc_gallery`.`title`,
				`bc_gallery`.`description`
			FROM
				`bc_gallery`
			WHERE
				`bc_gallery`.`group_id` = ". $id ." AND
				`bc_gallery`.`language` = '". $language ."'
			ORDER BY `bc_gallery`.`sort` DESC";
	
	if ($result = DBM::queryData($query, $database_link)) {
		
	while ($data = DBM::fetchObject($result)){
			
	$related_news[] = array('id' => $data->id, 
							'title' => $data->title, 
							'file' => $data->file, 
							'description' => $data->description
						);
		
		}
	}
		return $related_news;
}


function info_by_id ($lang, $id, $count, $sort_by = " `bc_info`.`start_date` DESC "){
	
	global $database_link, $language;
	
	if(is_array($id)) {
		
		$addQuery = " `bc_sections`.`id` IN(".implode(", ", $id).") AND ";
		
	} else {
		
		$addQuery = " `bc_sections`.`id` = " . $id . " AND ";
	}	
	
	if($count > 0)
	
		$limit_query = "LIMIT 0," . $count;
	
	$query = "SELECT 
				`bc_info`.`id`, 
				`bc_info`.`title`, 
				`bc_info`.`thumbnail`, 
				`bc_info`.`description`,
				`bc_info`.`content`,
				`bc_info`.`slug` AS `info_slug`,
				`bc_info`.`url`,
				`bc_info`.`start_date`, 
				`bc_sections`.`name` as `section_name`, 
				`bc_sections`.`slug` as `section_slug`
			FROM 
				`bc_sections` 
			LEFT JOIN `bc_info` ON 
				`bc_info`.`section_id` = `bc_sections`.`id` AND
				`bc_sections`.`language` = `bc_info`.`language`
			WHERE 
				".$addQuery." 
				`bc_sections`.`language` = '" . $lang . "' 
			ORDER BY ".$sort_by." 
			".$limit_query;
	
	if ($result = DBM::queryData($query, $database_link)) {
			
		while ($data = DBM::fetchObject($result)){
				
		$info[] = array('id' => $data->id, 
						'title' => $data->title, 
						'section_name' => $data->section_name, 
						'section_slug' => $data->section_slug, 
						'info_slug' => $data->info_slug, 
						'thumbnail' => $data->thumbnail, 
						'description' => $data->description,
						'content' => $data->content,
						'url' => 'http://'.str_replace('http://', '', $data->url),
						'job' => $data->url,
						'date' => date_transform($data->start_date, $language),
						'section_slug' => $data->section_slug
					);
			
		}
	}
	return $info;	
}


function get_info($lang, $id){
	
	global $database_link;
	
	$query = "SELECT * FROM `bc_info` WHERE `id` = " . $id . " AND `language` = '" . $lang . "'";
	
	if ($result = DBM::queryData($query, $database_link)) {
			
		while ($data = DBM::fetchObject($result)){
				
		$info = array('id' => $data->id, 
						'title' => $data->title, 
						'thumbnail' => $data->thumbnail, 
						'description' => $data->description
					);
			
			}
		}
	return $info;	
}

//pagination
function pagination($query, $per_page){
	
	global $database_link;
						
	$current_url = explode('&page=', curPageURL());
	
	if(count($current_url) > 1)  {
		
		parse_str( parse_url( SITE_URL.'?'.curPageURL(), PHP_URL_QUERY ), $current_page_numb );
		
		$current_page = (int)$current_page_numb['page'];
		
	} else $current_page = 1;
						
	if ($get_group_result = DBM::queryData($query, $database_link))
		$numb = DBM::numRows($get_group_result);
	
	else
		$numb = 0;
	
	if ($numb > $per_page)
	$page_count = ceil($numb / $per_page);
	
	if($page_count > 5)
	{
		
	if($current_page < 3)
	
		$pages = array(1, 2, 3, 4, 5, '>>');	
		
	elseif($current_page > ($page_count-2))
	
		$pages = array('<<', $page_count - 4, $page_count - 3, $page_count - 2, $page_count - 1, $page_count);
			
	else
		$pages = array('<<', $current_page - 2, $current_page - 1, $current_page, $current_page + 1, $current_page + 2, '>>');
		
	}
	
	else
	{$pages = array();
	
	for ($i=1; $i <= $page_count; $i++)
		array_push($pages, $i);
	}
	
	return array('pages' => $pages, 'current_page' => $current_page, 'current_url' => $current_url[0], 'lastpage' => $page_count, 'post_count' => $numb);

}


function curPageURL() {
 
 $pageURL = $_SERVER["QUERY_STRING"];
 
 return urldecode($pageURL);
}


//youtube thumbnail
function youtube_img($url){
	
	$url = explode('=',$url);
	return 'http://img.youtube.com/vi/'. $url[count($url)-1] .'/1.jpg';
	
}
//youtube id
function youtube_id($url){
	
	parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
	return $my_array_of_vars['v'];
	
}

//email validation
function check_email($check) {
	$expression = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/";
	if (preg_match($expression, $check)) {
		return true;
	} else {
		return false;
	} 
}

//================ FILE upload functions =================

function checkForUpload($name) {

	$ext = strtolower(strrchr($name, '.'));
	
	if (strstr($GLOBALS['config']['upload_extensions'], $ext)) {
		return true;
	} else {
		return false;
	}
}


function cleanFilename($fileName, $validChars, $noExt = false) {

	$fileName = stripslashes($fileName) ;

	// Replace dots in the Name with Underscores.
	$fileName = preg_replace('/\\.(?![^.]*$)/', '_', $fileName) ;

	$newName = '';
	
	// get an array of string characters
	$fileName = str_split($fileName);

	foreach ($fileName as $key => $letter) {
	
		if (stristr($validChars, $letter) != false) {
			$newName .= $letter;
		}
		
	}

	if ($noExt) {
	
		$newName = substr($newName, 0, strpos($newName, "."));
		
	}

	return $newName;
}

/* creates a compressed zip file */
function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$zip->addFile($file,$file);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}

function send_mail($to, $from, $subject, $message, $files = '') {
	
	$headers = "From: $from"; 
	// boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
	$headers.= "\nMIME-Version: 1.0\n" 
			. "Content-Type: multipart/mixed;\n" 
			. " boundary=\"{$mime_boundary}\"";
	$message = "This is a multi-part message in MIME format.\n\n" 
			. "--{$mime_boundary}\n" 
			. "Content-Type: text/html; charset=\"UTF-8\"\n" 
			. "Content-Transfer-Encoding: 7bit\n\n" 
			. $message 
			. "\n\n"; 
	$message .= "--{$mime_boundary}\n";
	
	if(count($files) > 0)
	
	foreach($files as $file){
		$attachment = fopen($file['file'],"rb");
		$data = fread($attachment,filesize($file['file']));
		fclose($attachment);
		$data = chunk_split(base64_encode($data));
		
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"".$file['new_name']."\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
	} 
	
	$status = @mail($to, "=?UTF-8?B?" . base64_encode($subject) . "?=", $message, $headers);
	
	if($status) return true;
	
	else return false;

}



function getBrowser() { 

    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
        $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $bname = 'Google Chrome'; 
        $ub = "Chrome"; 
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $bname = 'Apple Safari'; 
        $ub = "Safari"; 
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 
    } 
    
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
    
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
    
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 


function top_video($language) {
	
	global $database_link;
	
	$query = "SELECT * FROM `bc_video_gal` 
			WHERE `top` = 'Y' AND
				`language` = '". $language ."' 
			ORDER BY `date` DESC 
			LIMIT 0,1";
	if ($result = DBM::queryData($query)){
		
		$get_info_data = DBM::fetchObject($result);
		$id = youtube_id($get_info_data->embed);
		$list_data = 'http://www.youtube.com/embed/'.$id;
	}
		return $list_data;
}


function random_string($length) {
	
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}


function recent_posts($current_post = 0) {
	
	global $siteData, $language;
	
	if($current_post != 0)
	
	$addQuery = " AND `bc_info`.`id` != ".$current_post;

	$query = "SELECT 
				`bc_info`.`id`,
				`bc_info`.`title`,
				`bc_info`.`start_date`,
				`bc_info`.`slug` AS `info_slug`,
				`bc_sections`.`slug` AS `section_slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`language` = `bc_sections`.`language` AND 
				`bc_info`.`language` = '".$siteData['language']."' AND 
				`bc_info`.`section_id` = `bc_sections`.`id` AND 
				`bc_sections`.`type` IN(3, 14, 17) ".$addQuery."
			ORDER BY `start_date` DESC 
			LIMIT 3";
			
	if($result = DBM::queryData($query)) {
	
		while($row = DBM::fetchObject($result))
		
		$return[] = array(
						'id' => $row->id,
						'title' => $row->title,
						'description' => $row->description,
						'start_date' => $row->start_date,
						'date' =>  datemutation($row->start_date, $language),
						'info_slug' => $row->info_slug,
						'section_slug' => $row->section_slug
					);
	
	return $return;
	}

}

function year_group() {
	
	global $siteData;
	
	$query = "SELECT YEAR(`start_date`) AS `year` FROM `bc_info` WHERE `language` = '".$siteData['language']."' GROUP BY YEAR(`start_date`)";
	
	if($result = DBM::queryData($query)) {
	
		while($row = DBM::fetchObject($result))
		
		$years_arr[] = $row->year;
		
		return $years_arr;
	}
	
}

function users_in_slot($slot, $company_id) {
	
	$query = "SELECT COUNT(`id`) AS `count` FROM `bc_b2b_user_to_company` WHERE `slot` = '".(int)$slot."' AND `company_id` = '".(int)$company_id."' AND `active` != 'R'";
	
	if($result = DBM::queryData($query, $database_link)) {
	
		$row = DBM::fetchObject($result);
		
		return $row->count;
	}
}

function get_user_choosen_slots ($user_id) {

	$query = "SELECT * FROM `bc_b2b_user_to_company` WHERE `user_id` = '".$user_id."'";
	
	if($result = DBM::queryData($query, $database_link)) {
	
		while($row = DBM::fetchObject($result)) {
		
			$return[$row->company_id][$row->slot] = $row;
		}
	return $return;
	}

}

// Is Authenticated
function user_authenticated() {
	
	if (isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0) {
		return true;
	}
	
	return false;	
}

function user($id) {
	
	$query = "SELECT * FROM `bc_users` WHERE `id` = ".(int)$id;
	
	if($result = DBM::queryData($query, $database_link)){
	
		$row = DBM::fetchArray($result);
	
	} return $row;
}

function password_generator() {
	
	$alpha = "abcdefghijklmnopqrstuvwxyz";
	$alpha_upper = strtoupper($alpha);
	$numeric = "0123456789";
	$special = ".-+=_,!@$#*%<>[]{}";
	$chars = "";
	 
	if (isset($_POST['length'])){
		// if you want a form like above
		if (isset($_POST['alpha']) && $_POST['alpha'] == 'on')
			$chars .= $alpha;
		 
		if (isset($_POST['alpha_upper']) && $_POST['alpha_upper'] == 'on')
			$chars .= $alpha_upper;
		 
		if (isset($_POST['numeric']) && $_POST['numeric'] == 'on')
			$chars .= $numeric;
		 
		if (isset($_POST['special']) && $_POST['special'] == 'on')
			$chars .= $special;
		 
		$length = $_POST['length'];
		
	} else {
		// default [a-zA-Z0-9]{9}
		$chars = $alpha . $alpha_upper . $numeric;
		$length = 9;
	}
	 
	$len = strlen($chars);
	$pw = '';
	 
	for ($i=0; $i<$length; $i++)
			$pw .= substr($chars, rand(0, $len-1), 1);
	 
	// the finished password
	return $pw = str_shuffle($pw);

}



function newsWidget() {
	
	global $siteData, $database_link, $language;
	
	$query = "SELECT 
					`bc_info`.`slug` AS `info_slug`,
					`bc_info`.`title`,
					`bc_info`.`thumbnail`,
					`bc_info`.`description`,
					`bc_info`.`start_date`,
					`bc_sections`.`slug` AS `section_slug`,
					`bc_sections`.`name` 
				FROM `bc_sections`, `bc_info` 
				WHERE 
					`bc_info`.`language` = `bc_sections`.`language` AND 
					`bc_sections`.`language` = '".$siteData['language']."' AND 
					`bc_sections`.`id` = `bc_info`.`section_id` AND 
					`bc_sections`.`id` = '20' 
				ORDER BY `bc_info`.`start_date` DESC 
				LIMIT 3";
					
	if($result = DBM::queryData($query, $database_link)) {
	
		while( $row = DBM::fetchObject($result)) {
		
		$section_slug = $row->section_slug;
		$news .= '<li>
                	<div class="inner">
                    	<h3>
							<a href="'.SITE_URL.$siteData['language'].'/'.$row->section_slug.'/'.$row->info_slug.'">
								'.$row->title.'<div class="arrow3"></div>
							</a>
						</h3>
                        <p>'.$row->description.'</p>
                        <date>'.datemutation($row->start_date, $language).'</date>
                    </div>
                </li>';
		}
	}
	return '<div class="gaard_news">
        	<div class="white_line"><div class="grey_line"></div></div>
        	<a href="'.SITE_URL.$siteData['language'].'/'.$section_slug.'">
				<div class="g_news"><span>'.$language['gaard_news'].'</span></div>
			</a>
        	<ul>'.$news.'</ul>
        </div>';
}

//

function handleShortcodes($content, $shortcodes){
    //Loop through all shortcodes
    foreach($shortcodes as $key => $function){
	
		$content = str_replace('['.$key.']', $function, $content);
	}
    return $content;
}


function printIcon() {
	
	$return .= '<div class="agenda print second-font right" onclick="window.print();">
					<i class="icons print-icon"></i>
					<span><span>Print this Page</span></span>
				</div>
				<a href="'.SITE_URL.'uploads/agenda/Agenda.pdf" target="_blank">
				<div class="agenda pdf second-font right">
					<i class="icons pdf-icon"></i>
				</div>
				</a>';

	return $return;
}

function NotFound404() {

	header('location: '.SITE_URL.'/404');
}

function friendly_user($friendly_ip){	

	if($friendly_ip != '') {
		
		$friendly_ip = explode(',', $friendly_ip);
		
		foreach($friendly_ip as $ip) {
			
			$IPS[] = trim($ip);
		
		}
		
		if(in_array($_SERVER['REMOTE_ADDR'], $IPS)) 
		
			return true;
			
		return false;
	}
}

function page_banners($page_id, $language, $type = '1', $order_by = "`sort`") {
	
	$query = "(SELECT 
					`bc_banner`.`id`,
					`bc_banner`.`title`,
					`bc_banner`.`file`,
					`bc_banner`.`url`, 
					`bc_banner`.`target`, 
					`bc_banner`.`sort`
				FROM 
					`bc_banner_to_section`, `bc_banner`
				WHERE 
					`bc_banner`.`language` = '".$language."' AND 
					`bc_banner`.`type` = ".$type." AND 
					`bc_banner`.`id` = `bc_banner_to_section`.`banner_id` AND 
					`bc_banner_to_section`.`section_id` = '".$page_id."' AND 
					`bc_banner`.`active` = 'Y' AND 
					`bc_banner`.`all_sections` = 'N')
			UNION 
				(SELECT 
					`bc_banner`.`id`,
					`bc_banner`.`title`,
					`bc_banner`.`file`,
					`bc_banner`.`url`, 
					`bc_banner`.`target` , 
					`bc_banner`.`sort`
				FROM `bc_banner` 
				WHERE 
					`bc_banner`.`type` = ".$type." AND 
					`bc_banner`.`language` = '". $language ."' AND 
					`bc_banner`.`active` = 'Y' AND 
					`bc_banner`.`all_sections` = 'Y')
				ORDER BY ".$order_by."";
				
	if($result = DBM::queryData($query, $database_link)) {
	
		while($row = DBM::fetchArray($result)) {
		
			$return[] = $row;
		}
		return $return;
	
	} return false;	
}

?>