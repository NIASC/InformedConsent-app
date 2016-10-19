<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = trim($_POST['email']);

	if($email == ''){
		header('Location: ?empty');
	}

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		header('Location: ?incorrect');
	}

	$unique_query = "SELECT * FROM `bc_subscribers` WHERE `email` = '".DBM::escape($email)."'";

	if($result = DBM::queryData($unique_query, $database_link)) {
		header('Location: ?exists');
	} else {
		$unique_query = "INSERT into `bc_subscribers` SET `email` = '".DBM::escape($email)."'";

		if(DBM::query($unique_query, $database_link)) {
			$subscriber_id=DBM::insertID($database_link);

			$key = base64_encode(sha1($subscriber_id).sha1($email));

			$to = $email;
			$subject = "Key";
			$txt = "Activation link: <a href=\"".SITE_URL.$siteData['language'].'/'.$siteData['section_slug']."/?key=".$key."&email="
											.$email."\">"."ok"."</a>";
			$headers = "From: webmaster@example.com" . "\r\n" .
			"CC: somebodyelse@example.com";
			if(mail($to,$subject,$txt,$headers)) {
				header("Location: ?keysend");
			}
		}
	}
}

if(isset($_GET['key']) && isset($_GET['email'])) {
	$unique_query = "SELECT * FROM `bc_subscribers` WHERE `email` = '".DBM::escape($_GET['email'])."'";

	if($result = DBM::queryData($unique_query, $database_link)) {
		$row = DBM::fetchObject($result);
		if(base64_encode(sha1($row->id).sha1($_GET['email'])) == $_GET['key']) {
			$unique_query = "UPDATE  `bc_subscribers` SET `active` = 1 WHERE `id`=".$row->id;
			if(DBM::query($unique_query, $database_link)) {
				header("Location: ?activated");
			}
		}
	}
}

$get_info_query = "SELECT `bc_info`.`pk`,
						  `bc_info`.`id`,
						  `bc_info`.`section_id`,
						  `bc_info`.`language`,
						  `bc_info`.`title`,
						  `bc_info`.`description`,
						  `bc_info`.`content`,
						  `bc_info`.`start_date`,
						  `bc_info`.`end_date`,
						  `bc_info`.`thumbnail`,
						  `bc_info`.`published`,
						  `bc_sections`.`description` AS `section_description`
					FROM
						  `bc_info`, `bc_sections`
					WHERE
						  `bc_info`.`section_id` = " . $siteData['section'] . " AND
						  `bc_info`.`language` = '" . $siteData['language'] . "' AND
						  `bc_sections`.`id` = ". $siteData['section'] ." AND
						  `bc_sections`.`language` = '" . $siteData['language'] . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {

	$get_info_data = DBM::fetchObject($get_info_result);

	$smarty->assign('info_title', $get_info_data->title);

	$smarty->assign('thumbnail', $get_info_data->thumbnail);

	$smarty->assign('info_description', $get_info_data->description);

	$smarty->assign('info_content', $get_info_data->content);

}

//array for meta tags

$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

	$smarty->assign('og_array', $og_array);



//get email from settings
$membership_contact_email = $setting_data['public_email'];

if(isset($_POST['action'])) {

	$name = extractPost('name');
	$email = extractPost('email');
	$contact_phone = extractPost('contact_phone');
	$address = extractPost('address');
	//$recive_type = extractPost('recive_type');
	$message = extractPost('message');
	$txtCaptcha = extractPost('txtCaptcha');
	$date = date('Y-m-d h:i');

	if($name == ''){
		$error['required_name'] = $language['name_error'];
	}
	if(!check_email($email) || $email == ''){
		$error['email'] = $language['email_format_error'];
	}
	if($contact_phone == ''){
		$error['required_phone'] = $language['phone_error'];
	}
	/*
	if($recive_type == ''){
		$error['required_type'] = 'required';
	}
	*/
	if($message == ''){
		$error['required_message'] = $language['message_error'];
	}
	if($address == ''){
		$error['required_address'] = $language['address_error'];
	}
	if( $txtCaptcha != $_SESSION["security_code"]){
		$error['required_captcha'] = $language['captcha_error'];
	}


	//upload application form
	if($_FILES['file']['name'][0] != '' && $_FILES['file']['error'][0] == 0) {

		foreach($_FILES['file']['name'] as $key => $app){

			$ext = substr($_FILES['file']['name'][$key], strrpos($_FILES['file']['name'][$key], '.') + 1);

			$files[] = array('new_name' => $email.'_attachment.'.$ext, 'file' => $_FILES['file']['tmp_name'][$key]);

		}

	}




	if(count($error) == 0) {

		$random_string = rand(999, 9999);

		$subject = 'საჯარო ინფორმაციის მოთხოვნა '.SITE_URL.'';
		$content_message = $date.'<br/><table border="0" cellpadding="5" cellspacing="5">
						<tr><td>განცხადების უნიკალური კოდია:</td><td>'.$random_string.'</td></tr>
						<tr><td>სახელი:</td><td>'.$name.'</td></tr>
						<tr><td>ელ-ფოსტა:</td><td>'.$email.'</td></tr>
						<tr><td>საკონტაქტო ტელეფონი:</td><td>'.$contact_phone.'</td></tr>
						<tr><td>მისამართი:</td><td>'.$address.'</td></tr>
					</table>
					<p>'.$message.'</p>';

		$user_subject = 'გამოითხოვეთ საჯარო ინფორმაცია '.SITE_URL.'';
		$user_message = $date.'<br/>გმადლობთ, თქვენი განცხადება მიღებულია. განცხადების უნიკალური კოდია: '.$random_string.' ';

		//send in email
		if(send_mail($to = $membership_contact_email, $from = $email, $subject, $content_message, $files)){
			send_mail($email, $membership_contact_email, $user_subject, $user_message, $files = '');
			$notification = $language['request_done'];
			header("refresh:5;url='".SITE_URL.$siteData['language']."");
		} else $error['email'] = $language['mail_send_notify'];

	}

	$smarty->assign('error', $error);
	$smarty->assign('notification', $notification);
	$smarty->assign('warning', $warning);

	$smarty->assign('name', $name);
	$smarty->assign('email', $email);
	$smarty->assign('address', $address);
	$smarty->assign('contact_phone', $contact_phone);
	$smarty->assign('message', $message);
	$smarty->assign('recive_type', $recive_type);

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
	$hasError = 'User with this email wasn\'t found';
	$smarty->assign('error', $hasError);
} else if(isset($_GET['success'])) {
	$smarty->assign('success', true);
}


if(isset($_GET['incorrect'])) {
	$hasError = $language['email_error'];
} else if(isset($_GET['empty'])) {
	$hasError = $language['email_empty'];
} else if(isset($_GET['exists'])) {
	$hasError = $language['email_exists'];
} else if(isset($_GET['keysend'])) {
	$success = $language['subscribe_key_sent'];
} else if(isset($_GET['activated'])) {
	$success = $language['subscription_success'];
}

if(isset($hasError)) {
	$smarty->assign('error', $hasError);
} else if(isset($success)) {
	$smarty->assign('success', $success);
}

$smarty->assign('content_file', 'subscribe.tpl');

?>
