<?php

if (isset($_GET['registration_done'])) {

	$notification[] = $language['registration_done'];
}
$url = CONSENT_URL;


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		header('Content-Type: application/json');
		$count = 1;
		header('Content-Type: application/json');
		foreach( $_POST as $k => $v ) {
			if (strpos($k, 'radio') !== false) {
    			$radioValues[$k] = $v;

					$query = 'SELECT * FROM `bc_info_additional` 	WHERE `id`='.preg_replace("/[^0-9]/","",$k);
					if($query = DBM::queryData($query, $database_link)) {
						while($row = DBM::fetchObject($query)) {
								if( $row->value !=$v) {
									$error['questionary'] = $language['questionary_incorrect'];
									break;
								}
						}
					}
				}
		}





		$registration_date = date('Y-m-d H:i:s');
		// $name = extractPost('name');
		$email = trim(extractPost('email'));
		$remail=trim(extractPost('emailAgain'));

		$sbemail = trim(extractPost('storeboxEmail'));
		$rsbemail=trim(extractPost('storeboxEmailAgain'));
		$sbphone=trim(extractPost('storeboxPhone'));
		$rsbphone=trim(extractPost('storeboxPhoneAgain'));
		$nemid=trim(extractPost('nemid'));
		// $age = extractPost('age');
		$phone = extractPost('phone');
		$rphone = extractPost('phoneAgain');
		// $region = extractPost('region');

		if(!check_email($email)) {$error['email'] = $language['email_format_error'];}
		// if($name == '') {$error['name'] = $language['name_error'];}
		// if($age == '') {$error['age'] = $language['age_error'];}
		if($phone == '') {$error['phone'] = $language['phone_error'];}

		if($sbemail == '') {$error['storeboxemail'] = $language['storebox_empty_email'];}
		// if($region < 1) {$error['region'] = $language['region_error'];}

		if($nemid == '') $error['nemid'] = $language['verify_nemid'];

		if( $phone != $rphone && $phone != '' ) {$error['phone'] = $language['phone_again'];}
		if( $email != $remail && $email != '' ) {$error['email'] = $language['phone_again'];}
		if($sbemail != '' && $rsbemail != $sbemail) {$error['storebox-email'] = $language['email_doesnt_match'];}
		if($sbphone != '' && $rsbphone != $sbphone) {$error['storebox-phone'] = $language['phone_doesnt_match'];}
		//check email unique
		if( count($error) == 0 ) {

			$unique_query = "SELECT * FROM `bc_users` WHERE `email` = '".DBM::escape($email)."'";

			if($result = DBM::queryData($unique_query, $database_link)) {

				$row = DBM::numRows($result);
			}

			if( $row > 0) $error['email_unique_error'] = $language['email_unique_error'];

			$unique_query = "SELECT * FROM `bc_users` WHERE `phone` = '".DBM::escape($phone)."'";
			if($result = DBM::queryData($unique_query, $database_link)) {
				$row = DBM::numRows($result);
			}
			if( $row > 0) $error['phone_unique_error'] = $language['unique_phone'];

			$unique_query = "SELECT * FROM `bc_users` WHERE `storebox_email` = '".DBM::escape($sbemail)."'";
			if($result = DBM::queryData($unique_query, $database_link)) {
				$row = DBM::numRows($result);
			}
			if( $row > 0) $error['storebox_email_unique_error'] = $language['storebox_unique_phone'];

			$unique_query = "SELECT * FROM `bc_users` WHERE `storebox_phone` = '".DBM::escape($sbphone)."'";
			if($result = DBM::queryData($unique_query, $database_link)) {
				$row = DBM::numRows($result);
			}
			if( $row > 0) $error['storebox_phone_unique_error'] = $language['storebox_unique_phone'];

		}


		if( count($error) == 0 ) {

			//register user

			$insert_query = "INSERT INTO
										`bc_users`
									SET
										`email` = '".DBM::escape($email)."',
										`phone` = '".DBM::escape($phone)."',
										`storebox_email` = '".DBM::escape($sbemail)."',
										`storebox_phone` = '".DBM::escape($sbphone)."',
										`registration_date` = '".DBM::escape($registration_date)."',
										`nemid` = '". DBM::escape($nemid) ."'
							";
			// die($insert_query);
			if( DBM::query($insert_query, $database_link) ) {
				$insert_user_id = DBM::insertID($database_link);

				//automatic email sending
				// $subject = $language['registration_email_subject'];
				// $no_reply_email = $setting_data['contact_email'];
				// $message = $setting_data['registration_email_body'];

				// if(send_mail($email, $no_reply_email, $subject, $message))	 {
				//
				// 	$notification[] = $language['registration_email_sended_notice'];
				// 	$success['email'] = $language['mail_sended'];
				//
				// } else $warning['email_send_error'] = $language['resend_email'];


				// header("Location: ".SITE_URL.$siteData['language'].'/'.$siteData['section_slug']."/?registration_done".$str);

				// Add diseases to DB
				$dis=array();
				foreach($_POST['selectedDiseases'] as $v) {
					if(is_numeric($v)) {
						$query = "SELECT * FROM `bc_disease` WHERE `id` = ".$v.";";
						if($query = DBM::queryData($query, $database_link)) {
							while($row = DBM::fetchObject($query)) {
								$query1="INSERT INTO `bc_user_disease`
													SET
														`user_id` = ". DBM::escape($insert_user_id) .",
														`disease_id` = ". DBM::escape($v) ."
												";
								DBM::query($query1, $database_link);
								$dis[] = $row->title;
							}
						}
					}
					else {
						if(strlen(trim($v)) > 3 ) {
							$dis[] = $v;
							$query="SELECT * from `bc_disease` WHERE `title` = '" . DBM::escape(trim($v)) . "';";
							$insertNew=true;
							if($query = DBM::queryData($query, $database_link)) {
								$rownum=DBM::numRows($query);
								if($rownum>0) {
									$insertNew = false;
									while($row = DBM::fetchObject($query)) {
										$query1="INSERT INTO `bc_user_disease`
															SET
																`user_id` = ". DBM::escape($insert_user_id) .",
																`disease_id` = ". $row->pk ."
														";
										DBM::query($query1, $database_link);
									}
								}
							}

							if($insertNew) {
								$query = "INSERT INTO `bc_disease`
													SET
														`title` = '". DBM::escape(trim($v)) ."',
														`language` = '" . DBM::escape($siteData['language']) . "',
														`active` = 'N';
								";
								if( $query = DBM::query($query,$database_link) ) {
									$disease_id = DBM::insertID($database_link);
									$query1="INSERT INTO `bc_user_disease`
														SET
															`user_id` = ". DBM::escape($insert_user_id) .",
															`disease_id` = ". DBM::escape($disease_id) ."
													";

									DBM::query($query1, $database_link);
								}
							}
						}
					}
					

					if(isset($url)) {
						$data = array(
							'email' => $email,
							'phone' => $phone,
							'storebox_email' => $sbemail,
							'storebox_phone' => $sbphone,
							'registration_date' => $registration_date,
							'nemid' =>  $nemid
						);

						// use key 'http' even if you send the request to https://...
						$options = array(
						    'http' => array(
						        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						        'method'  => 'POST',
						        'content' => http_build_query(array('data' => json_encode($data)))
						    )
						);
						$context  = stream_context_create($options);
						$result = file_get_contents($url, false, $context);
						if ($result === FALSE) { /* Handle error */ }
					}
				}

				echo json_encode(array('error' => false, 'message' => 'success'));
			}
				else {
					echo json_encode(array('error' => 'unknown'));
				}

		}
		else {
			echo json_encode(array('error' => $error));
		}


		exit;
		// $post = array(
		// 	'name' => $name,
		// 	'email' => $email,
		// 	'phone' => $phone,
		// 	'age' => $age,
		// 	'region' => $region
		// );
		//
		// $smarty->assign('post', $post);

	}


	//registration info

	$query = "SELECT
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`type`,
					`bc_sections`.`style`,
					`bc_sections`.`slug`
				FROM
					`bc_sections`
				WHERE
					`bc_sections`.`language` = '".$siteData['language']."' AND
					(`bc_sections`.`style` = 2 OR
						(`bc_sections`.`style` IN(3,4,5,6) AND `bc_sections`.`type` = 2)) AND
					`bc_sections`.`active` = 'Y'
				ORDER BY `bc_sections`.`sort`";

	if($query = DBM::queryData($query, $database_link)) {

		while($row = DBM::fetchObject($query)) {

			$additional_info = '';

			$content = info_by_id ($siteData['language'], $row->id, $count = 1, $sort_by = " `bc_info`.`start_date` DESC ");

			if($row->type == 21) {

				$additional_query = "
					SELECT * FROM
						`bc_info_additional`
					WHERE
						`info_id` = '".$content[0]['id']."' AND
						`language` = '".$siteData['language']."'";

				if($additional_result = DBM::queryData($additional_query, $database_link)) {

					while($additional_row = DBM::fetchObject($additional_result)) {

						$additional_info[] = $additional_row;
					}
				}
			}

			$infos[] = array('section' => $row,
							'content' => $content,
							'additional' => $additional_info
							);
		}




		//disease list
		$query = "SELECT * FROM `bc_disease` WHERE `language` = '".$siteData['language']."' AND `active` = 'Y' ORDER BY `title`";

		if($result = DBM::queryData($query, $database_link)) {

			while($row = DBM::fetchObject($result)) {

				$disease[] = $row;
			}

		$smarty->assign('disease', $disease);
		}
	}

	//array for meta tags

	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

$smarty->assign('og_array', $og_array);
$smarty->assign('error', $error);
$smarty->assign('warning', $warning);
$smarty->assign('notification', $notification);
$smarty->assign('infos', $infos);
$smarty->assign('content_file', 'registration.tpl');

?>
