<?php
	
	// user activation
	
	if (isset($_GET['activation'])) {
		
		$check = extractGet('check');
		
		$query = "SELECT `id` FROM `bc_b2b_users`  WHERE `active` = 'Y' AND `check_code` = '".DBM::escape($check)."'";
		
		if ($result = DBM::queryData($query, $database_link)){			
			
			$notification[] = $language['already_activated'];		
		
		} else {
	
			$query = "UPDATE `bc_b2b_users` SET `active` = 'Y' WHERE `check_code` = '".DBM::escape($check)."'";
		
			if ($result = DBM::query($query, $database_link)) {
			
				$notification[] = $language['activation_message'];		
			}
		}	
	}

	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================	
	//password recovering	
	if (isset($_GET['recovery'])) {
		
		$recovery_page_email = $setting_data['no_reply_email'];
	
		$smarty->assign('recovery', true);		
		
		$email = extractPost('email');
		
		if(check_email($email) && $email != '') {
			
			//check email
			$query = "SELECT * FROM `bc_b2b_users` WHERE `email` = '".DBM::escape($email)."'";
			
			if ($result = DBM::queryData($query, $database_link)) {
			
				$row = DBM::fetchObject($result);
			
				$new_password = password_generator();
				
				$subject = $language['password_recovery_subject'];
				
				$message = 'hello '.$row->firstname.' '.$row->lastname.' 
				'.$language['new_password_txt'].' : '.$new_password;
		
				//send recovery email
				if(send_mail($email, $recovery_page_email, $subject, $message, $files = '')) {
					
					//updating new password
					$update = "UPDATE `bc_b2b_users` SET `password` = '".sha1(DBM::escape($new_password))."' WHERE `id` = '".$row->id."'";
					
					DBM::queryData($update, $database_link);
					
					header("location: ".SITE_URL.$siteData['language'].'/sign-in/?recovery_mail=sended');	
				
				} else header("location: ".SITE_URL.$siteData['language'].'/sign-in/?recovery_mail=faild');			
			
			} else header("Location: ".SITE_URL.$siteData['language'].'/sign-in/?email_not_found');
			
			header("location: ".SITE_URL.$siteData['language'].'/sign-in');
		}			
	}
	
	if(isset($_GET['recovery_mail']) && extractGet('recovery_mail') == 'sended') {
		
		$notification[] = $language['recovery_mail_sended'];
		
	} elseif(isset($_GET['recovery_mail']) && extractGet('recovery_mail') == 'faild') {
	
		$error[] = $language['recovery_mail_faild'];

	} elseif(isset($_GET['email_not_found'])) {
	
		$error[] = $language['meil_not_found'];
	}
	

	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================
	//====================================================================================================================================	
	
	
	
	//sign up
	if (isset($_POST['action'])) {
		
		$email = extractPost('email');
		$password = extractPost('password');
		
		//check user
		
		$query = "SELECT * FROM `bc_b2b_users` WHERE `email` = '".DBM::escape($email)."' AND `password` = '".sha1(DBM::escape($password))."'";
			
		if($result = DBM::queryData($query, $database_link)) {
		
			while($row = DBM::fetchObject($result)){
			
				if($row->active == 'Y') {
				
					session_start();
					
					$_SESSION['user_id'] = $row->id;
				
				} else $error['please_activate'] = $language['please_activate'];
			
			}
		} else $error['wrong_parameters'] = $language['wrong_parameters'];
		
	} 

	if(user_authenticated()) {
		
		header("location: ".SITE_URL.$siteData['language'].'/profile');
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//array for meta tags
	
	$og_array = array('title' => $get_info_data->title,
						'description' => strip_tags($get_info_data->section_description),
						'photo' => $get_info_data->thumbnail,
						'url' => ''
					);

	$smarty->assign('og_array', $og_array);

	$smarty->assign('content_file', 'login.tpl');
	
	$smarty->assign('notification', $notification);
	
	$smarty->assign('error', $error);

?>