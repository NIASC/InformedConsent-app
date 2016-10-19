<?php

//logout
if(isset($_GET['logout'])) {

	$_SESSION['user_id'] = 0;
	unset($_SESSION['user_id']);

}

//login
if(!user_authenticated()) header("Location: ".SITE_URL.$siteData['language'].'/sign-in');


//grab slot settings
$allowed_u2s = $setting_data['person_per_slot'];


//post action
if ($_POST['action'] == 'Save') {	
	
	$created = date('Y-m-d H:i:s');
	
	/*grab variables*/
	$tel = extractPost('tel');
	$profile = extractPost('profile');
	//checkboxes	
	$b2b = extractPost('b2b');
	$panel = extractPost('panel');
	
	if($tel == '') $error['tel'] = $language['tel_required'];		
	if($profile == '') $error['profile'] = $language['company_profile_require'];	
	
	$b2b = ($tel != '' && $profile != '' ? 'Y':'N');
	
	if( count($error) == 0 ) {
		
		if($PROFILE['tel'] == '' && $PROFILE['profile'] == '' && $tel != '' && $profile != '') {
		
			$b2b_sign = true;
			
		} else $b2b_sign = false;
	
		//register user
		$update_query = "UPDATE 
							`bc_b2b_users`
						SET 
							`b2b` = '".DBM::escape($b2b)."',
							`tel` = '".DBM::escape($tel)."',
							`profile` = '".DBM::escape($profile)."'
						WHERE `id` = '".(int)$PROFILE['id']."'
						";
		DBM::query($update_query, $database_link);
		
		

	if($reg_deadline) {
		
		//delete extra b2b
		$checked_slots = extractPost('slot');
		
		foreach($checked_slots as $slot => $company) {
			
			$slot_arr[] = $slot;
			$companies_arr[] = $company;
			
			$addQuery .= " AND !(`company_id` = ".(int)$company." AND `slot` = ".(int)$slot.')';
		
		}
		
			$delete_relations = "DELETE FROM `bc_b2b_user_to_company` WHERE `user_id` = " . $PROFILE['id'] . " AND `active` NOT IN('Y', 'R') ".$addQuery;
		
			DBM::query($delete_relations, $database_link);
		
		
		//register to b2b
		
		if(count($checked_slots) > 0) {
			
			foreach($checked_slots as $slot => $company) {
				//check slot/company
				$select_relations = "SELECT * 
									FROM `bc_b2b_user_to_company` 
									WHERE `user_id` = " . $PROFILE['id'] . " AND 
										((`slot` = ".(int)$slot." AND `active` IN('Y', 'N')) OR 
										`company_id` = ".(int)$company.")";
		
				if($result = DBM::queryData($select_relations, $database_link)){
				
				} else {
				//save datas
				$insert_slot_query = "INSERT INTO `bc_b2b_user_to_company` SET
												`user_id` = '".$PROFILE['id']."', 
												`company_id` = '".DBM::escape($company)."', 
												`slot` = '".DBM::escape($slot)."', 
												`created` = '".$created."'";
												
				DBM::query($insert_slot_query, $database_link);
				}
					
			}
			if($b2b_sign) {
			
				$subject = $language['registration_email_b2b_subject'];
				$no_reply_email = $setting_data['no_reply_email'];												
				$message = $setting_data['b2b_registration_email_body'];
				$email = $PROFILE['email'];
				$message = handleShortcodes(
									$setting_data['b2b_registration_email_body'], 
									array(	'user_firstname' => $PROFILE['firstname'], 
											'user_lastname' => $PROFILE['lastname']
										)
									);	
					
				send_mail($email, $no_reply_email, $subject, $message, $files = '');
			}
			}
			
		}
			header('location: '.SITE_URL.$siteData['language'].'/'.$siteData['section_slug']);
	}
	
	$post = array(
		'title' => $title,
		'firstname' => $firstname,
		'lastname' => $lastname,
		'email' => $email,
		'position' => $position,
		'organisation' => $organisation,
		'country' => $country,
		'how_hear' => $how_hear,
		'tel' => $tel,
		'profile' => $profile,
		'b2b' => $b2b,
		'panel' => $panel,
		'slots' => $checked_slots
	);
	
	$smarty->assign('post', $post);
	
} else {
	
}

	$user = array(
		'country' => $country_list[$PROFILE['country']],
	);
	
	$smarty->assign('user', $user);
	
	//get b2b slots
	$query = "SELECT * FROM `bc_b2b_slots` ORDER BY `sort`";
	
	if($result = DBM::queryData($query, $database_link)) {
		
		while ($row = DBM::fetchObject($result))
		
		$slots[] = $row;
	}
	
	
	
	//selected slots	
	$selected_slots_query = "SELECT * FROM `bc_b2b_user_to_company` WHERE `user_id` = '".$PROFILE['id']."'";
	
	if($selected_slots_result = DBM::queryData($selected_slots_query, $database_link)) {
	
		while($selected_slots_row = DBM::fetchObject($selected_slots_result)){
		
			$selected_slot[$selected_slots_row->slot] = $selected_slots_row;
		}
	
	}
	//get user slots	
	$user_choosen_slot = get_user_choosen_slots ($PROFILE['id']);

	//get b2b companies
	$query = "SELECT * FROM `bc_b2b_companies` ORDER BY `sort`";
	
	if($result = DBM::queryData($query, $database_link)) {
		
		while ($company_row = DBM::fetchObject($result)) {
		
			$companies[] = $company_row;
			
			foreach($slots as $item) {				
				
				$user_in_slot = (int)users_in_slot($item->id, $company_row->id);
				
				if ($user_choosen_slot[$company_row->id][$item->id] != '') { 
					//grab slot/company statuses
					$status = $user_choosen_slot[$company_row->id][$item->id]->active; 	
					
					//Approved
					if($status == 'Y'){
						$class = 'check2-icon approved';
						$txt = '';											
						$fulltxt = '';
					//Pending
					} elseif($status == 'N') {						
						$class = 'check2-icon pending';
						$txt = 'Pending';												
						$fulltxt = '';
					//rejected
					} elseif($status == 'R') {						
						$class = '';						
						$txt = '';
						$fulltxt = 'Contact <a href="mailto:'.$setting_data['contact_email'].'">Forum management team</a>';
					//clear
					} else {		
						$class = 'circle-icon';
						$txt = '';												
						$fulltxt = '';
					}
				//clear
				} elseif ( $user_in_slot >= $allowed_u2s ) { 
					//fulled
					$status = ''; 
					$class = 'disabled-icon';
					$txt = '';
					$fulltxt = '';
				} elseif (count($user_choosen_slot[$company_row->id]) > 0 || count($selected_slot[$item->id]) > 0) {
					//busy slot or company					
					$status = ''; 
					$class = 'disabled-icon wasntdisabled';
					$txt = '';
					$fulltxt = '';
					$current_comp = current((array)$user_choosen_slot[$company_row->id]);
					//busy, Approved slot or company	
					if($current_comp->active == 'Y' || $selected_slot[$item->id]->active == 'Y'){ $class = 'disabled-icon'; } 
					//busy, Rejected slot or company
					elseif($current_comp->active == 'R' || $selected_slot[$item->id]->active == 'R') { $class = 'circle-icon'; } 
					//busy, Pending slot or company
					elseif($current_comp->active == 'N' || $selected_slot[$item->id]->active == 'N') { $class = 'disabled-icon wasntdisabled'; }
					
				} else { 
					//free option
					$status = '';
					$class = 'circle-icon';	
					$txt = '';	
					$fulltxt = '';
				}
				
				$user_in_slot = (int)users_in_slot($item->id, $company_row->id);
				
				if($fulltxt != '') {
					
					$rejected[$company_row->id] = array('colspan' => count($slots), 'fulltxt' => $fulltxt);
				}
				
				$matrix[$company_row->id][$item->id] = array(
															'user_count' => $user_in_slot,
															'company' => $company_row->id,
															'slot' => $item->id,
															'status' => $status,
															'icon' => $class,
															'txt' => $txt,
															'fulltxt' => $fulltxt
				);			
			}		
		}
	}
	
	
	
	//array for meta tags
	
	$og_array = array('title' => $get_info_data->title,
					'description' => strip_tags($get_info_data->section_description),
					'photo' => $get_info_data->thumbnail,
					'url' => ''
					);

	$smarty->assign('og_array', $og_array);
	
	
$smarty->assign('selected_row', $selected_row);

$smarty->assign('matrix', $matrix);

$smarty->assign('rejected', $rejected);

$smarty->assign('allowed_u2s', $allowed_u2s);

$smarty->assign('error', $error);

$smarty->assign('companies', $companies);

$smarty->assign('slots', $slots);

$smarty->assign('country_list', $country_list);

$smarty->assign('how_hear_options', $how_hear_options);

$smarty->assign('content_file', 'profile.tpl');

?>