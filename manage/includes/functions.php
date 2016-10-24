<?php

// Is Authenticated
function admin_authenticated() {

	if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] > 0) {
		return true;
	}

	return false;

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

//************
function build_sections_list($database_link, $parent_id, $section_language) {

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
		`bc_sections`.`sort`,
		`bc_section_types`.`id` AS `type_id`,
		`bc_section_types`.`name` AS `type_name`,
		`bc_section_types`.`description` AS `type_description`,
		`bc_section_types`.`file` AS `type_file`,
		`bc_section_types`.`file_inner` AS `type_file_inner`,
		`bc_section_types`.`dynamic` AS `type_dynamic`,
		`bc_section_types`.`list` AS `type_list`,
		`bc_section_types`.`info` AS `type_info`
		FROM
		`bc_sections`
		LEFT JOIN
		`bc_section_types`
		ON
		`bc_section_types`.`id` = `bc_sections`.`type`
		WHERE
		`bc_sections`.`parent_id` = " . $parent_id . " AND
		`bc_sections`.`language` = '" . $section_language . "'
		ORDER BY
		`bc_sections`.`sort` ASC";

	if ($get_sections_result = DBM::queryData($get_sections_query)) {
		$retVal = '<ul data-parent="' . $parent_id . '">';
		while ($get_sections_data = DBM::fetchObject($get_sections_result)) {

			$section_has_child = section_has_child($database_link, $get_sections_data->id, $get_sections_data->language);

			$section_has_upper_sort = section_has_upper_sort($database_link, $get_sections_data->parent_id, $get_sections_data->language, $get_sections_data->sort);

			$section_has_lower_sort = section_has_lower_sort($database_link, $get_sections_data->parent_id, $get_sections_data->language, $get_sections_data->sort);

			$retVal .= '<li data-id="' . $get_sections_data->id . '"><div class="sortable-table"><div class="sortable-table-cell">' . $get_sections_data->name . '</div><div class="sortable-table-cell sortable-actions sortable-right">';


			$retVal .= '<div class="handle"><i class="icon-move"></i></div>';
			$retVal .= '<div><a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=delete&pk=' . $get_sections_data->pk . '" class="btn btn-mini btn-danger" onclick="return confirm(\'დარწმუნებული ხართ, რომ გინდათ გვერდის წაშლა?\');"><i class="icon-remove"></i></a></div>';
			$retVal .= '<div><a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=edit&pk=' . $get_sections_data->pk . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></div><div>' . $get_sections_data->type_name . '</div></div></div>';

			if ($section_has_child) {

				$retVal .= build_sections_list($database_link, $get_sections_data->id, $get_sections_data->language);

			} else {
				$retVal .= '<ul data-parent="' . $get_sections_data->id . '"></ul>';
			}

			$retVal .= '</li>';

		}

		$retVal .= '</ul>';

	}

	return $retVal;
}


// Structure Management Build Recursively
function build_menu($database_link, $parent_id, $section_language, $level = 0) {

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
					`bc_sections`.`sort`,
					`bc_section_types`.`id` AS `type_id`,
					`bc_section_types`.`name` AS `type_name`,
					`bc_section_types`.`description` AS `type_description`,
					`bc_section_types`.`file` AS `type_file`,
					`bc_section_types`.`file_inner` AS `type_file_inner`,
					`bc_section_types`.`dynamic` AS `type_dynamic`,
					`bc_section_types`.`list` AS `type_list`,
					`bc_section_types`.`info` AS `type_info`
							FROM
					`bc_sections`
							LEFT JOIN
					`bc_section_types`
							ON
					`bc_section_types`.`id` = `bc_sections`.`type`
							WHERE
					`bc_sections`.`parent_id` = " . $parent_id . " AND
					`bc_sections`.`language` = '" . $section_language . "'
							ORDER BY
					`bc_sections`.`sort` ASC";

	if ($get_sections_result = DBM::queryData($get_sections_query)) {

		while ($get_sections_data = DBM::fetchObject($get_sections_result)) {

			$section_has_child = section_has_child($database_link, $get_sections_data->id, $get_sections_data->language);

			$section_has_upper_sort = section_has_upper_sort($database_link, $get_sections_data->parent_id, $get_sections_data->language, $get_sections_data->sort);

			$section_has_lower_sort = section_has_lower_sort($database_link, $get_sections_data->parent_id, $get_sections_data->language, $get_sections_data->sort);

			$retVal .= '<tr id="' . $get_sections_data->id . '" data-parent="' . $get_sections_data->parent_id . '" data-sort="' . $get_sections_data->sort .'">';
			$retVal .= '<td>' . multiplyString('<i class="icon-asterisk"></i> ', $level) . $get_sections_data->name . '</td>';
			$retVal .= '<td>' . $get_sections_data->type_name . '</td>';
			$retVal .= '<td><a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=edit&pk=' . $get_sections_data->pk . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			$retVal .= '<td class="hidden"><a href="#" class="btn btn-mini btn-warning"><i class="icon-th-list"></i></a></td>';
			$retVal .= '<td><a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=delete&pk=' . $get_sections_data->pk . '" class="btn btn-mini btn-danger" onclick="return confirm(\'დარწმუნებული ხართ, რომ გინდათ გვერდის წაშლა?\');"><i class="icon-remove"></i></a></td>';

			$retVal .= '<td>';

			if ($section_has_upper_sort) {
				$retVal .= '<a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=sort&pk=' . $get_sections_data->pk . '&dir=up" class="btn btn-mini btn-info"><i class="icon-arrow-up"></i></a>';
			} else {
				$retVal .= '<button class="btn btn-mini"><i class="icon-stop icon-white"></i></button>';
			}

			$retVal .= ' ';

			if ($section_has_lower_sort) {
				$retVal .= '<a href="?page=' . $_GET['page'] . '&language=' . $section_language . '&act=sort&pk=' . $get_sections_data->pk . '&dir=down" class="btn btn-mini btn-info"><i class="icon-arrow-down"></i></a>';
			} else {
				$retVal .= '<button class="btn btn-mini"><i class="icon-stop icon-white"></i></button>';
			}

			$retVal .= '</td>';

			$retVal .= '</tr>';

			if ($section_has_child) {

				$retVal .= build_menu($database_link, $get_sections_data->id, $get_sections_data->language, $level + 1);

			}

		}

	}

	return $retVal;

}
//

// Section Has Child
function section_has_child($database_link, $id, $language) {

	$query = "SELECT `pk`, `id`, `name`, `description`, `language`, `parent_id`, `slug`, `type`, `active`, `sort` FROM `bc_sections` WHERE `parent_id` = " . $id . " AND `language`= '" . $language . "'";

	if ($result = DBM::queryData($query)) {
		$data = DBM::numRows($result);
	} else {
		$data = false;
	}

	return $data;

}
//

// Has Upper Sort
function section_has_upper_sort($database_link, $parent_id, $language, $sort) {

	$query = "SELECT MIN(`sort`) AS `section_sort` FROM `bc_sections` WHERE `parent_id` = " . $parent_id . " AND `language` = '" . $language . "'";

	if ($result = DBM::queryData($query, $database_link)) {

		$data = DBM::fetchObject($result);

		if ($data->section_sort == $sort) {
			return false;
		} else {
			return true;
		}
	}

}
//

// Has Upper Sort
function section_has_lower_sort($database_link, $parent_id, $language, $sort) {

	$query = "SELECT MAX(`sort`) AS `section_sort` FROM `bc_sections` WHERE `parent_id` = " . $parent_id . " AND `language` = '" . $language . "'";

	if ($result = DBM::queryData($query, $database_link)) {

		$data = DBM::fetchObject($result);

		if ($data->section_sort == $sort) {
			return false;
		} else {
			return true;
		}
	}

}
//

// Structure in Combobox
function structureInCombobox($database_link, $parent_id, $section_language, $level = 0, $current_id, $black_list = '') {

	$ret = '';

	if($black_list)
	$addQuery = " `bc_sections`.`id` NOT IN (".join(',', $black_list).") AND ";

	$query = "SELECT
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
							WHERE ".$addQuery."
					`bc_sections`.`parent_id` = " . $parent_id . " AND
					`bc_sections`.`language` = '" . $section_language . "'
							ORDER BY
					`bc_sections`.`sort` ASC";

	if ($result = DBM::queryData($query, $database_link)) {

		while ($data = DBM::fetchObject($result)) {

			$ret .= '<option value="' . $data->id . '"' . dropDown($current_id, $data->id) . '>' . multiplyString('- - ', $level) . $data->name . '</option>' . "\n";

			if (section_has_child($database_link, $data->id, $data->language)) {

				$ret .= structureInCombobox($database_link, $data->id, $data->language, $level+1, $current_id);

			}

		}

	}

	return $ret;

}
//

// Multiply String
function multiplyString($str, $cnt) {

	$ret = '';

	for ($i = 0; $i < $cnt; $i++) {

		$ret .= $str;

	}

	return $ret;

}
//

// Types in Combobox
function typesInCombobox($database_link, $current_type) {

	$ret = '';

	$query = "SELECT
					`bc_section_types`.`id`,
					`bc_section_types`.`name`,
					`bc_section_types`.`description`,
					`bc_section_types`.`file`,
					`bc_section_types`.`file_inner`,
					`bc_section_types`.`dynamic`,
					`bc_section_types`.`list`,
					`bc_section_types`.`info`
							FROM
					`bc_section_types`
							ORDER BY
					`bc_section_types`.`id` ASC";

	if ($result = DBM::queryData($query, $database_link)) {

		while ($data = DBM::fetchObject($result)) {

			$ret .= '<option value="' . $data->id . '"' . dropDown($current_type, $data->id) . '>' . $data->name . '</option>' . "\n";

		}

	}

	return $ret;

}
//

// Menus in Checkboxes
function menusInCheckboxes($database_link, $pk = 0) {

	$current_array = array();

	if ($pk != 0) {

		$menu_query = "SELECT `menu_id` FROM `bc_section_to_menu` WHERE `section_pk` = " . $pk;

		if ($menu_result = DBM::queryData($menu_query, $database_link)) {

			while ($menu_data = DBM::fetchObject($menu_result)) {

				$current_array[] = $menu_data->menu_id;

			}

		}

	}

	$ret = '';

	$query = "SELECT
					`bc_menu_types`.`id`,
					`bc_menu_types`.`name`,
					`bc_menu_types`.`description`
							FROM
					`bc_menu_types`
							ORDER BY
					`bc_menu_types`.`id` ASC";

	if ($result = DBM::queryData($query, $database_link)) {

		while ($data = DBM::fetchObject($result)) {

			$ret .= '<label class="checkbox">
      <input type="checkbox" name="menu_type[]" value="' . $data->id . '"';

      		if (in_array($data->id, $current_array)) {

	      		$ret .= ' checked="checked"';

      		}

      		$ret .= '> ' . $data->name . '
    </label>' . "\n";

		}

	}

	return $ret;

}
//

// Generate Slug Recursively
function generateSlug($database_link, $slug_string, $section_id, $language) {

	$query = "SELECT `id`, `slug`, `parent_id` FROM `bc_sections` WHERE `id` = " . $section_id . " AND `language` = '" . $language . "'";

	if ($result = DBM::queryData($query, $database_link)) {

		$data = DBM::fetchObject($result);

		$slug_array = explode('/', $data->slug);

		$slug_array_reverse = array_reverse($slug_array);

		$slug_part = $slug_array_reverse[0];

		if ($data->parent_id != 0) {

			return generateSlug($database_link, $slug_part . '/' . $slug_string, $data->parent_id, $language);

		} else {
			return $slug_part . '/' . $slug_string;
		}
	} else {
		return $slug_string;
	}
	//
}
//

// Combobox Deleted
function dropDown($first, $second) {

	if ($first == $second) {

		return ' selected="selected"';

	}

}

// Combobox Deleted
function bootstrap_dd($first, $second) {

	if ($first == $second) {

		return 'active';

	}

}
//
function is_checked ($first, $second) {

	if ($first == $second) {

	return ' checked="checked"';
	}
}

// Return WYSIWYG Editor
function getEditor($field, $value = '', $type = 'small') {

	if ($type == 'full') {

		return '<a href="#file-selector" id="file-selector-button" role="button" class="btn" data-toggle="modal">Insert File</a>
						<div id="file-selector" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="file-selector-label" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="padding: 5px;">×</button>
								<h3>Select Files</h3>
							</div>
							<div class="modal-body"></div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
								<button id="files-insert-button" class="btn btn-primary">Insert</button>
							</div>
						</div>
						<textarea id="editor_full" name="' . $field . '" class="editor_full hidden_element">' . $value . '</textarea>';

	}

	return '<textarea name="' . $field . '" class="editor_small hidden_element">' . $value . '</textarea>';

}
//

// Sections by Type Combobox
function getSectionsByType($type, $language, $database_link, $current_type = NULL) {

	$ret = '';

	if(count($type) > 1) $addQuery = " AND `bc_sections`.`type` IN (" . implode(',',$type) . ")";

	else  $addQuery = " AND `bc_sections`.`type` = " . $type . "";

	$query = "SELECT
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
					`bc_sections`.`language` = '" . $language . "' ".$addQuery."
							ORDER BY
					`bc_sections`.`id` ASC";

	if ($result = DBM::queryData($query, $database_link)) {

		while ($data = DBM::fetchObject($result)) {

			$ret .= '<option value="' . $data->id . '"' . dropDown($current_type, $data->id) . '>' . $data->name . '</option>' . "\n";

		}

	}

	return $ret;

}

//image crop & scale
function ResizeSemiAbstractTop($resource, $w, $h)
{

	$sw = imagesx($resource);
    $sh = imagesy($resource);
    $ar = $sw/$sh;
    $tar = $w/$h;
    if($ar >= $tar)
    {
        $x1 = 0;
        $x2 = round($sw * ($tar/$ar) - ($sw - ($sw * ($tar/$ar)))/2);
        $y1 = 0;
        $y2 = $sh;
    }
    if($ar <= $tar)
    {
	    $y1 = 0;
        $y2 = round($sh * ($ar/$tar) - ($sh - ($sh * ($ar/$tar)))/2);
        $x1 = 0;
        $x2 = $sw;

    }

    if(!($slate = @imagecreatetruecolor($w, $h)))
    {
        return false;
    }
    imagecopyresampled($slate, $resource, 0, 0, $x1, $y1, $w, $h, $x2, $y2);
    return $slate;
}
/*function ResizeSemiAbstractTop($resource, $w, $h)
{

	$sw = imagesx($resource);
    $sh = imagesy($resource);
    $ar = $sw/$sh;
    $tar = $w/$h;
    if($ar >= $tar)
    {
        $x1 = round(($sw - ($sw * ($tar/$ar)))/2);
        $x2 = round($sw * ($tar/$ar));
        $y1 = 0;
        $y2 = $sh;
    }
    if($ar <= $tar)
    {
	    $y1 = round(($sh - ($sh * ($ar/$tar)))/2);
        $y2 = round($sh * ($ar/$tar));
        $x1 = 0;
        $x2 = $sw;

    }

    if(!($slate = @imagecreatetruecolor($w, $h)))
    {
        return false;
    }
    imagecopyresampled($slate, $resource, 0, 0, $x1, $y1, $w, $h, $x2, $y2);
    return $slate;
}*/
//

//youtube thumbnail
function youtube_id($url){

	parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
	return $my_array_of_vars['v'];

}


function max_dimm($max_width = 640, $max_height = 480, $width, $height){

		if($max_width > $width && $max_height > $height)
		return array('width' => $width, 'height' => $height);

		else {

		$ratioh = $max_height/$height;
		$ratiow = $max_width/$width;
		$ratio = min($ratioh, $ratiow);
		// New dimensions
		$width = intval($ratio*$width);
		$height = intval($ratio*$height);


		return array('width' => $width, 'height' => $height);
		}
}

function imagecreatefrom ($img) {

	$ext = explode('.', $img);
	$ext = strtolower(strrchr($img, '.'));

	switch ($ext) {
		case '.gif':
			$src = imagecreatefromgif($img);
			break;
		case '.jpeg':
			$src = imagecreatefromjpeg($img);
			break;
		case '.jpg':
			$src = imagecreatefromjpeg($img);
			break;
		case '.png':
			$src = imagecreatefrompng($img);
			break;
		case '.bmp':
			$src = imagecreatefromwbmp($img);
			break;
		 default:
			$src = 0;
			break;
	}
	return $src;
}

function createIMAGE ($src, $tmp, $file, $quality) {

// $src - image url
// $tmp - recource
// $file - to save directory+filename

	$ext = explode('.', $src);
	$ext = strtolower(strrchr($src, '.'));

	switch ($ext) {
		case '.gif':
			imagegif($tmp, $file, $quality);
			break;
		case '.jpeg':
			imagejpeg($tmp, $file, $quality);
			break;
		case '.jpg':
			imagejpeg($tmp, $file, $quality);
			break;
		case '.png':
			imagepng($tmp, $file, 1);
			break;
		case '.bmp':
			imagewbmp($tmp, $file, $quality);
			break;
		 default:
			break;
	}

}

//parse related ids
function id_array($id, $language, $database_link){

$related_news = array();

$query = "SELECT
				`bc_info`.`id`,
				`bc_info`.`title`
			FROM
				`bc_relationship`, `bc_info`
			WHERE
				((`bc_relationship`.`from` = " . $id . " AND
				`bc_relationship`.`to` = `bc_info`.`id`)
				OR
				(`bc_relationship`.`to` = " . $id . " AND
				`bc_relationship`.`from` = `bc_info`.`id`))
				AND
				`bc_info`.`language` = '". $language ."'
			ORDER BY `bc_relationship`.`relation_id` DESC";

	if ($result = DBM::queryData($query, $database_link)) {

		while ($data = DBM::fetchObject($result)){

			$related_news[] = array('id' => $data->id, 'title' => $data->title);
		}
	}
		return $related_news;
}


//related box
function relatex_box($post_name, $content_language, $options, $last_posts){

foreach ($options as $option){

	//selected posts
	$related_options .= '<option id="id'.$option['id'].'_'.$post_name.'" value="'.$option['id'].'" selected="selected">
							'.$option['title'].'
						</option>';

	$visible_news .= '<tr id="html'.$option['id'].'_'.$post_name.'">

						<td><span class="row_minus" onclick="remove_option(\''.$post_name.'\','.$option['id'].')"></span></td>

						<td id="title'.$option['id'].'_'.$post_name.'">'.$option['title'].'</td>

					</tr>';

	}
	//last posts
foreach ($last_posts as $last_post){

	$posts .= '<tr id="html'.$last_post['id'].'_'.$post_name.'">

						<td><span class="row_plus" onclick="add_option(\''.$post_name.'\','.$last_post['id'].')"></span></td>

						<td id="title'.$last_post['id'].'_'.$post_name.'">'.$last_post['title'].'</td>

					</tr>';

	}
	//box html
echo '<table id="visible_'.$post_name.'" class="visible_html">'.$visible_news.'</table>';

echo '<div class="relation_box">

	<input type="text" placeholder="search" class="input-xxlarge" onkeyup="showResult(this.value,\''.$post_name.'\',\''.$content_language.'\')"/> <br/>';

echo '<table class="ajax_options" id="'.$post_name.'">'. $posts .'</table>

	</div>';

echo '<select multiple="multiple" name="post_'.$post_name.'[]" id="post_'.$post_name.'" class="input-xxlarge hidden">'.$related_options.'</select>';

}


// Redirect Safely
function redirect_safe($loc, $dbl = false) {

	header('location: ' . $loc);

	if ($dbl) {
		DBM::close($dbl);
	}

	die();

}







/*
--------- BEGIN FILEUPLOADER FUNCTIONS ---------
*/

function printHeaders($column, $what, $dir, $url) {

	$out = '<th><a href="' . $url . '&amp;sort=' . $column . '-';

	if ($column == $what) {
		if ($dir == "asc") {
			$out .= "desc";
		} else {
			$out .= "asc";
		}
	} else {
		$out .= "asc";
	}


	$out .= '">' . ucfirst($column) . '</a></th>';

	return $out;
}

function printCompactHeaders($column, $what, $dir, $folder) {
	$out = '<th><a href="#" data-target="fm" data-folder="'.$folder.'"  data-sort="' . $column . '-';

	if ($column == $what) {
		if ($dir == "asc") {
			$out .= "desc";
		} else {
			$out .= "asc";
		}
	} else {
		$out .= "asc";
	}


	$out .= '">' . ucfirst($column) . '</a></th>';

	return $out;
}

function printTree($root='', $current='', $level=0) {

	if ($root == '') {
		$root = $GLOBALS['config']['file_folder'];
	}
	$temp = $GLOBALS['config']['temp_file_folder_name'];

	if ($handle = opendir($root)) {

		while (false !== ($file = readdir($handle))) {

			if(!is_file($root . $file) && is_writable($root . $file) && $file != "." && $file != ".." && $file != str_replace("/", "", $temp)) {

				// if item is fuckin folder

				$retVal .= '<option class="eng" value="' . $root . $file . '/">- ' . multiplyString("- ", $level) . $file . '/</option>' . "\n";

				$retVal .= printTree($root . $file . '/', $current, $level+1);

			}


		}

		closedir($handle);
	}

	return $retVal;


}


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

function cleanFoldername($folderName, $validChars) {

	$folderName = stripslashes($folderName) ;

	// Replace dots in the name with underscores
	$folderName = preg_replace('/\\.(?![^.]*$)/', '_', $folderName);
	$folderName = str_replace('.', '', $folderName);

	$newName = '';
	// get an array of string characters
	$folderName = str_split($folderName);

	foreach ($folderName as $key => $letter) {

		if (@stristr($validChars, $letter) != false) {
			$newName .= $letter;
		}

	}

	return $newName;
}

/*
------------ END FILEUPLOADER FUNCTIONS --------
*/


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
        $trimmed_text .= '';
    }
    return $trimmed_text;
}

function sluggable($p) {

	$from = array( "/Á/", "/À/", "/Â/", "/Ä/", "/Ă/", "/Ā/", "/Ã/", "/Å/", "/Ą/", "/Æ/", "/Ć/", "/Ċ/", "/Ĉ/", "/Č/", "/Ç/", "/Ď/", "/Đ/", "/Ð/", "/É/", "/È/", "/Ė/", "/Ê/", "/Ë/", "/Ě/", "/Ē/", "/Ę/", "/Ə/", "/Ġ/", "/Ĝ/", "/Ğ/", "/Ģ/", "/á/", "/à/", "/â/", "/ä/", "/ă/", "/ā/", "/ã/", "/å/", "/ą/", "/æ/", "/ć/", "/ċ/", "/ĉ/", "/č/", "/ç/", "/ď/", "/đ/", "/ð/", "/é/", "/è/", "/ė/", "/ê/", "/ë/", "/ě/", "/ē/", "/ę/", "/ə/", "/ġ/", "/ĝ/", "/ğ/", "/ģ/", "/Ĥ/", "/Ħ/", "/I/", "/Í/", "/Ì/", "/İ/", "/Î/", "/Ï/", "/Ī/", "/Į/", "/Ĳ/", "/Ĵ/", "/Ķ/", "/Ļ/", "/Ł/", "/Ń/", "/Ň/", "/Ñ/", "/Ņ/", "/Ó/", "/Ò/", "/Ô/", "/Ö/", "/Õ/", "/Ő/", "/Ø/", "/Ơ/", "/Œ/", "/ĥ/", "/ħ/", "/ı/", "/í/", "/ì/", "/i/", "/î/", "/ï/", "/ī/", "/į/", "/ĳ/", "/ĵ/", "/ķ/", "/ļ/", "/ł/", "/ń/", "/ň/", "/ñ/", "/ņ/", "/ó/", "/ò/", "/ô/", "/ö/", "/õ/", "/ő/", "/ø/", "/ơ/", "/œ/", "/Ŕ/", "/Ř/", "/Ś/", "/Ŝ/", "/Š/", "/Ş/", "/Ť/", "/Ţ/", "/Þ/", "/Ú/", "/Ù/", "/Û/", "/Ü/", "/Ŭ/", "/Ū/", "/Ů/", "/Ų/", "/Ű/", "/Ư/", "/Ŵ/", "/Ý/", "/Ŷ/", "/Ÿ/", "/Ź/", "/Ż/", "/Ž/", "/ŕ/", "/ř/", "/ś/", "/ŝ/", "/š/", "/ş/", "/ß/", "/ť/", "/ţ/", "/þ/", "/ú/", "/ù/", "/û/", "/ü/", "/ŭ/", "/ū/", "/ů/", "/ų/", "/ű/", "/ư/", "/ŵ/", "/ý/", "/ŷ/", "/ÿ/", "/ź/", "/ż/", "/ž/",
	 "/А/", "/Б/", "/В/", "/Г/", "/Д/", "/Е/", "/Ё/", "/Ж/", "/З/", "/И/", "/Й/", "/К/", "/Л/", "/М/", "/Н/", "/О/", "/П/", "/Р/", "/С/", "/Т/", "/У/", "/Ф/", "/Х/", "/Ц/", "/Ч/", "/Ш/", "/Щ/", "/Ъ/", "/Ы/", "/Ь/", "/Э/", "/Ю/", "/Я/", "/а/", "/б/", "/в/", "/г/", "/д/", "/е/", "/ё/", "/ж/", "/з/", "/и/", "/й/", "/к/", "/л/", "/м/", "/н/", "/о/", "/п/", "/р/", "/с/", "/т/", "/у/", "/ф/", "/х/", "/ц/", "/ч/", "/ш/", "/щ/", "/ъ/", "/ы/", "/ь/", "/э/", "/ю/", "/я/",
	 "/ა/", "/ბ/", "/გ/", "/დ/", "/ე/", "/ვ/", "/ზ/", "/თ/", "/ი/", "/კ/", "/ლ/", "/მ/", "/ნ/", "/ო/", "/პ/", "/ჟ/", "/რ/", "/ს/", "/ტ/", "/უ/", "/ფ/", "/ქ/", "/ღ/", "/ყ/", "/შ/", "/ჩ/", "/ც/", "/ძ/", "/წ/", "/ჭ/", "/ხ/", "/ჯ/", "/ჰ/");
      $to   = array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z",
	  "A", "B", "W", "G", "D", "Ie", "Io", "Z", "Z", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "F", "Ch", "C", "Tch", "Sh", "Shtch", "", "Y", "", "E", "Iu", "Ia", "a", "b", "w", "g", "d", "ie", "io", "z", "z", "i", "j", "k", "l", "m", "n", "o", "p", "r", "s", "t", "u", "f", "ch", "c", "tch", "sh", "shtch", "", "y", "", "e", "iu", "ia",
	  "a", "b", "g", "d", "e", "v", "z", "t", "i", "k", "l", "m", "n", "o", "p", "jh", "r", "s", "t", "u", "f", "q", "gh", "y", "sh", "ch", "c", "dz", "ts", "tsh", "x", "j", "h");

    return preg_replace($from, $to, $p);
}

function convert_to_slug($str) {

	$str = sluggable($str);
	$str = trim_text($str, 50);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);

	return $clean;
}


function get_admin($admin_id = ''){

	if($admin_id == '')
	$admin_id = $_SESSION['admin_id'];

	$return_value['id'] = $_SESSION['admin_id'];

	$query = "SELECT * FROM `bc_administrators` WHERE `id` = ".$admin_id."";

	if($result = DBM::queryData($query)){

		$row = DBM::fetchObject($result);

		$return_value['name'] = $row->name;
		$return_value['group_id'] = $row->group_id;

		$get_permissions_query = "SELECT page_id FROM bc_administrator_groups_permissions WHERE group_id='" . $row->group_id . "'";
		if($result = DBM::queryData($get_permissions_query)) {
			while($permission = DBM::fetchObject($result)) $return_value['permissions'][$permission->page_id] = '';
		}
	}

	return $return_value;

}


function settings($slug) {

	global $database_link;

	$query = "SELECT * FROM `bc_settings` WHERE `slug` = '".$slug."'";

	if($result = DBM::queryData($query, $database_link)) {

	while ($row = DBM::fetchObject($result))

	$return[$row->value] = $row;

	return $return;
	}

}

function info_flies_by_description ($id, $language, $description) {

	$query = "SELECT * FROM `bc_info_files` WHERE `info_id` = ".$id." AND `language` = '".$language."' AND `description` = '".$description."'";

	if($result = DBM::queryData($query)) {

		while($row = DBM::fetchObject($result)) {

		$return[] = $row;

		} return $return;

	} else return false;
}

function users_by_slot ($slot, $company) {

	global $database_link;

	$query = "SELECT
				 `bc_b2b_user_to_company`.`user_id`,
				 `bc_b2b_user_to_company`.`company_id`,
				 `bc_b2b_user_to_company`.`slot`,
				 `bc_b2b_user_to_company`.`active`,
				 `bc_b2b_users`.`firstname`,
				 `bc_b2b_users`.`lastname`,
				 `bc_b2b_users`.`organisation`
			FROM
				`bc_b2b_user_to_company`, `bc_b2b_users`
			WHERE
				`bc_b2b_user_to_company`.`user_id` = `bc_b2b_users`.`id` AND
				`bc_b2b_user_to_company`.`slot` = ".(int)$slot." AND
				`bc_b2b_user_to_company`.`company_id` = ".(int)$company."";

	if ($result = DBM::queryData($query, $database_link)) {

		while($row = DBM::fetchObject($result))

			$return[] = $row;

		return $return;

	} else return NULL;
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

	if(count($files) > 0 && $files != '')

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


function setting_by_slug($slug) {
	
	global $database_link;

	$query = "SELECT * FROM `bc_settings` WHERE `slug` = '".$slug."'";
	
	if($result = DBM::queryData($query, $database_link)) {
		
		$row = DBM::fetchObject($result);
	
	return $row;
	}
}

function disease_status($status){

	$query = "SELECT COUNT(`id`) AS `count` FROM `bc_disease` WHERE `active` = '".DBM::escape($status)."'";
	
	if($result = DBM::queryData($query)) {
	
		$row = DBM::fetchObject($result);
		
		return $row->count;
	
	} else return 0;
}

?>
