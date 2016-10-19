<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = trim($_POST['email']);

	if($email == ''){
		header('Location: ?empty');
	}

	$unique_query = "SELECT `email`, `phone`, `storebox_email`, `storebox_phone`, `registration_date`, `nemid` FROM `bc_users` WHERE `email` = '".DBM::escape($email)."'";

	if($result = DBM::queryData($unique_query, $database_link)) {
		while($row = DBM::fetchObject($result)) {
			$arr = array('delete' => json_encode($row));
		}

		$unique_query = "DELETE FROM `bc_users` WHERE `email` = '".DBM::escape($email)."'";

		if(DBM::query($unique_query, $database_link)) {
			if(isset($arr)){
				$url = USER_DELETE_URL;
				// use key 'http' even if you send the request to https://...
				$options = array(
						'http' => array(
								'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
								'method'  => 'POST',
								'content' => http_build_query($arr)
						)
				);
				$context  = stream_context_create($options);
				$result = file_get_contents($url, false, $context);
				if ($result === FALSE) { /* Handle error */ }
		}

			header('Location: ?success');
		} else {
			header('Location: ?unknown');
		}

	} else {
		header('Location: ?notfound');
	}
}


//meta tags info
$og_array = array(
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);

$smarty->assign('og_array', $og_array);
$smarty->assign('membership_app', $membership_app_url);

if(isset($_GET['notfound'])) {
	$hasError = $language['windraw_email_not_found'];
	$smarty->assign('error', $hasError);
} else if(isset($_GET['success'])) {
	$smarty->assign('success', true);
}

$smarty->assign('content_file', 'app.tpl');

?>
