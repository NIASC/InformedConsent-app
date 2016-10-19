<?php
// Include Admin Config
require_once('../includes/config.php');

// Include Admin Functions
require_once('../includes/functions.php');

// Include Database Functions
require_once('../includes/database.class.php');

session_start();

if (!admin_authenticated()) die('<option>access denied!</option>');

$id = (int)extractPost('id');
$new_index = (int)extractPost('index');
$lang = extractPost('language');

$database_link = DBM::open($config['database']);

$query_array = array();

if(isset($_GET['group'])) { //sort gallery group
  $selected_group_query = "SELECT id, sort FROM bc_gallery_group WHERE id='" . $id . "' AND language='" . $lang . "'";
  if($result = DBM::queryData($selected_group_query, $database_link)) {
    $selected_group = DBM::fetchObject($result, $database_link);

    $all_group_query = "SELECT sort FROM bc_gallery_group
                        WHERE language='" . $lang . "'
                        ORDER BY sort ASC";

    $kneaded_item = getKneadedItem($all_group_query, $new_index, $database_link);

    if($kneaded_item->sort > $selected_group->sort) {
      $query_array[] = "UPDATE bc_gallery_group SET sort=sort-1 WHERE
                        sort <='" . $kneaded_item->sort . "' AND sort >'" . $selected_group->sort . "'";
    } else if($kneaded_item->sort < $selected_group->sort) {
      $query_array[] = "UPDATE bc_gallery_group SET sort=sort+1 WHERE
                        sort >='" . $kneaded_item->sort . "' AND sort <'" . $selected_group->sort . "'";
    }
    $query_array[] = "UPDATE bc_gallery_group SET sort='" . $kneaded_item->sort . "' WHERE id='" . $selected_group->id . "'";
  }
} else if(isset($_GET['gallery'])) { //sort gallery
  $selected_image_query = "SELECT id, group_id, language, sort FROM bc_gallery WHERE id='" . $id . "' AND language='" . $lang . "'";
  if($result = DBM::queryData($selected_image_query, $database_link)) {
    $selected_image = DBM::fetchObject($result, $database_link);

    $all_image_query = "SELECT sort FROM bc_gallery
                        WHERE group_id='" . $selected_image->group_id . "'
                        AND language='" . $lang . "'
                        ORDER BY sort ASC";

    $kneaded_item = getKneadedItem($all_image_query, $new_index, $database_link);

    if($kneaded_item->sort > $selected_image->sort) {
      $query_array[] = "UPDATE bc_gallery SET sort=sort-1 WHERE group_id='" . $selected_image->group_id . "'
                        AND sort <= '" . $kneaded_item->sort . "'
                        AND sort >'" . $selected_image->sort . "'";
    } else if($kneaded_item->sort < $selected_image->sort) {
      $query_array[] = "UPDATE bc_gallery SET sort=sort+1 WHERE group_id='" . $selected_image->group_id . "'
                        AND sort >= '" . $kneaded_item->sort . "'
                        AND sort <'" . $selected_image->sort . "'";
    }
    $query_array[] = "UPDATE bc_gallery SET sort='" . $kneaded_item->sort . "' WHERE id='" . $selected_image->id . "'";
  }
} else if(isset($_GET['banner'])) { //sort banner
  $selected_banner_query = "SELECT id, type, language, sort FROM bc_banner WHERE id='" . $id . "' AND language='" . $lang . "'";
  if($result = DBM::queryData($selected_banner_query, $database_link)) {
    $selected_banner = DBM::fetchObject($result, $database_link);

    $all_banner_query = "SELECT sort FROM bc_banner
                         WHERE type='" . $selected_banner->type . "'
                         AND language='" . $lang . "'
                         ORDER BY sort ASC";

    $kneaded_item = getKneadedItem($all_banner_query, $new_index, $database_link);

    if($kneaded_item->sort > $selected_banner->sort) {
      $query_array[] = "UPDATE bc_banner SET sort=sort-1 WHERE type='" . $selected_banner->type . "'
                        AND sort <='" . $kneaded_item->sort . "'
                        AND sort >'" . $selected_banner->sort . "'";
    } else if($new_sort < $selected_banner->sort) {
      $query_array[] = "UPDATE bc_banner SET sort=sort+1 WHERE type='" . $selected_banner->type . "'
                        AND sort >='" . $kneaded_item->sort . "'
                        AND sort <'" . $selected_banner->sort . "'";
    }
    $query_array[] = "UPDATE bc_banner SET sort='" . $kneaded_item->sort . "' WHERE id='" . $selected_banner->id . "'";
  }
} else if(isset($_GET['info'])) { // sort info
  $selected_info_query = "SELECT id, section_id, language, sort FROM bc_info WHERE id='" . $id . "' AND language='" . $lang . "'";
  if($result = DBM::queryData($selected_info_query, $database_link)) {
    $selected_info = DBM::fetchObject($result, $database_link);

    $all_info_query = "SELECT sort FROM bc_info
                       WHERE section_id='" . $selected_info->section_id . "'
                       AND language='" . $lang . "'
                       ORDER BY sort ASC";

    $kneaded_item = getKneadedItem($all_info_query, $new_index, $database_link);

    if($kneaded_item->sort > $selected_info->sort) {
      $query_array[] = "UPDATE bc_info SET sort=sort-1 WHERE section_id='" . $selected_info->section_id . "'
                        AND sort <='" . $kneaded_item->sort . "'
                        AND sort >'" . $selected_info->sort . "'";
    } else if($kneaded_item->sort < $selected_info->sort) {
      $query_array[] = "UPDATE bc_info SET sort=sort+1 WHERE section_id='" . $selected_info->section_id . "'
                        AND sort >='" . $kneaded_item->sort . "'
                        AND sort <'" . $selected_info->sort . "'";
    }
    $query_array[] = "UPDATE bc_info SET sort='" . $kneaded_item->sort . "' WHERE id='" . $selected_info->id . "'";
  }
}

header('Content-Type: application/json');

if(!empty($query_array)) {
  foreach($query_array as $query) {
    $query .= " AND language='" . $lang . "'";
    DBM::query($query);
  }
  echo json_encode(array('msg' => 'ok', 'status' => 'ok'));
} else {
  echo json_encode(array('msg' => 'invalid request', 'status' => 'error'));
}

function getKneadedItem($query, $index, $database_link) {
  $result = DBM::queryData($query, $database_link);
  $array = array();
  while($info = DBM::fetchObject($result, $database_link)) {
    $array[] = $info;
  }

  return $array[$index];
}
?>
