<?php
// Include Admin Config
require_once('../includes/config.php');

// Include Admin Functions
require_once('../includes/functions.php');

// Include Database Functions
require_once('../includes/database.class.php');

session_start();

if (!admin_authenticated()) die('<option>access denied!</option>');

$id = (int)extractGet('id');
$new_index = (int)extractGet('index');
$new_parent = (int)extractGet('parent');
$lang = extractGet('language');

if(!($id > 0 && $new_index >= 0 && $new_parent >= 0 && in_array($lang, $config['languages']))) {
  exit(response("Invalid arguments"));
}

$database_link = DBM::open($config['database']);

if(!($selected_section = loadSection($database_link, $lang, $id))) {
  exit(response("Invalid id:" . $id . " of section"));
}

$query_array = array();

if($new_parent > 0 && !($new_parent_section = loadSection($database_link, $lang, $new_parent))) {
  exit(response("Invalid parent:" . $new_parent . " of section"));
}

$new_parent_childs = loadSection($database_link, $lang, false, $new_parent, false, true);

if($new_parent != $selected_section->parent_id) {

  if(!$new_parent_childs && $new_index === 0) {
    //update_selected_section
    $query_array[] = "UPDATE bc_sections
                      SET sort = '1', parent_id = '" . $new_parent ."'
                      WHERE id = '" . $selected_section->id . "'";
  } else if($new_index >= 0 && $new_index <= sizeof($new_parent_childs)) {
    $new_sort = isset($new_parent_childs[$new_index]) ?
                $new_parent_childs[$new_index]->sort :
                ($new_parent_childs[sizeof($new_parent_childs) - 1]->sort) + 1;
    //correct_new_parent_positions
    $query_array[] = "UPDATE bc_sections
                      SET sort = sort + 1
                      WHERE sort >= '" . $new_sort . "'
                      AND parent_id = '" . $new_parent . "'";
    //move_selected_section
    $query_array[] = "UPDATE bc_sections
                      SET sort = '" . $new_sort . "', parent_id = '" . $new_parent ."'
                      WHERE id = '" . $selected_section->id . "'";
  } else {
    exit(response("New Index out of bounds"));
  }
  //correct_old_parent_positions
  $query_array[] = "UPDATE bc_sections
                    SET sort = sort - 1
                    WHERE parent_id = '" . $selected_section->parent_id . "'
                    AND sort > '" . $selected_section->sort . "'";
  //update slug
  $selected_section_slug_array = array_reverse(explode('/', $selected_section->slug));
  $selected_section_slug_part = $selected_section_slug_array[0];
  $new_slug = ($new_parent_section ? $new_parent_section->slug . '/' : '') . $selected_section_slug_part;
  $query_array[] = "UPDATE bc_sections
                    SET slug = REPLACE(slug, '" . $selected_section->slug . "', '" . $new_slug . "')
                    WHERE slug LIKE '" . $selected_section->slug . "%'";
} else {
  //
  if(!($kneaded_section = $new_parent_childs[$new_index])) {
    exit(response("Invalid new sort:" . $new_index . " of section"));
  }

  if($selected_section->sort > $kneaded_section->sort) {
    //correct_positions
    $query_array[] = "UPDATE bc_sections
                      SET sort = sort + 1
                      WHERE parent_id = '".$selected_section->parent_id."'
                      AND sort >= '" . $kneaded_section->sort . "'
                      AND sort < '" . $selected_section->sort . "'";
  } else if($selected_section->sort < $kneaded_section->sort) {
    //correct_positions
    $query_array[] = "UPDATE bc_sections
                      SET sort = sort - 1
                      WHERE parent_id = '".$selected_section->parent_id."'
                      AND sort <= '" . $kneaded_section->sort . "'
                      AND sort > '" . $selected_section->sort . "'";
  }
  //move_selected_section
  $query_array[] = "UPDATE bc_sections
                    SET sort = '" . $kneaded_section->sort . "'
                    WHERE id = '" . $selected_section->id . "'";
}

foreach($query_array as $query) {
  $query .= " AND language = '" . $lang . "'";
  DBM::query($query, $database_link);
}

DBM::close($database_link);

echo response("Sorted $selected_section_slug_part", "ok");
//***********FINISH**********************//

function response($message, $status = 'error') {
    header('Content-Type: application/json');
    return json_encode(array('msg' => $message, 'status' => $status));
}

function loadSection($database_link, $lang, $id = false, $parent = false, $sort = false, $array_flag = false) {
  $query = "SELECT id, parent_id, sort, slug
            FROM bc_sections
            WHERE language = '" . $lang . "'";

  if($id !== false) {
    $query .= " AND id = '" . $id . "'";
  }
  if($parent !== false) {
    $query .= " AND parent_id = '" . $parent . "'";
  }
  if($sort !== false) {
    $query .= " AND sort = '" . $sort . "'";
  }

  $query .= " ORDER BY sort ASC";

  if(!($query_result = DBM::queryData($query, $database_link))) {
    return false;
  }

  if($array_flag) {
    $sections_array = array();
    while($section = DBM::fetchObject($query_result)) {
      $sections_array[] = $section;
    }
    return empty($sections_array) ? false : $sections_array;
  }

  return DBM::fetchObject($query_result);
}
?>
