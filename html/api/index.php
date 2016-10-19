<?php
require_once('../includes/database/mysql/config.php');
require_once('../includes/database.class.php');
header('Content-Type: application/json');

function getCurrentUri()
{
	$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
	$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
	if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
	$uri = '/' . trim($uri, '/');
	return $uri;
}

$base_url = getCurrentUri();

$arr=array(
  'error' => false,
  'data' => array()
);
if(isset($_GET['key'])) {
  $database_link = DBM::open($config['database']);

	$keychecksql = "SELECT * FROM `bc_settings` where `slug` = 'api_key'";

	if($keychecksql = DBM::queryData($keychecksql, $database_link)) {
		while($row = DBM::fetchObject($keychecksql)) {
			if($row->value != $_GET['key']){
				die(json_encode(array('error' => 'key is incorrect')));
			}
		}
	}


  if($base_url == '/active') {
    $query = "SELECT `id`, `email`, `phone`, `storebox_email`, `storebox_phone`,
              `registration_date` FROM `bc_users`";
    }
   else if($base_url == '/new'){
    $query = "SELECT `id`, `email`, `phone`, `storebox_email`, `storebox_phone`,
              `registration_date` FROM `bc_users` where new=1";
  } else {
    die(json_encode(array('error' => '404', 'data' => array())));
  }

  if($query = DBM::queryData($query, $database_link)) {
    while($row = DBM::fetchObject($query)) {
      $query1= "SELECT d.title as `dis` from bc_user_disease as u right join bc_disease as d on u.disease_id = d.pk where u.user_id = ". $row->id;

      if($query1 = DBM::queryData($query1, $database_link)) {
        while($row1 = DBM::fetchObject($query1)) {
          $row->diseases[] = $row1->dis;
        }
      }
      $arr['data'][] = $row;
    }

    if($base_url == '/new') {
      $sql1='';
      foreach($arr['data'] as $data) {
        $sql1.=" `id`=".$data->id." or";
      }
      $sql1 = rtrim($sql1,'or');
      $sql = "UPDATE `bc_users` SET `new` = 0 WHERE NEW = 1 and (". $sql1 .")";
      DBM::query($sql, $database_link);
    }
  }
  else {
    $arr['error'] = 'Data wasn\'t found';
  }

} else {
  $arr['error'] = 'Provide key!';
}

echo json_encode($arr);
