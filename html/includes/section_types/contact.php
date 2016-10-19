<?php

if(isset($_POST['action'])) {
	
	$subject = extractPost('name');
	$email = extractPost('email');
	$phone = extractPost('phone');
	$message = ($phone != '')?'<b>ტელეფონი:'.$phone.'</b><br/>'.extractPost('message'):extractPost('message');
	$contact_page_email = ($phone != '')?$setting_data['hotline_email']:$setting_data['contact_email'];
	
	if(check_email($email) && $subject && $message) {
	
		if(send_mail($contact_page_email, $email, $subject, $message, $files)){
			
			$notification = $language['mail_sended'];
			
			header("refresh:5;url='".SITE_URL.$siteData['language']."");
			
		} else $error = $language['sanding_faild'];
	
	} else $error = $language['complite_fields'];
	
	
	$smarty->assign('name', $name);
	$smarty->assign('subject', $subject);
	$smarty->assign('email', $email);
	$smarty->assign('phone', $phone);
	$smarty->assign('message', $message);
	
	$smarty->assign('notification', $notification);
	$smarty->assign('error', $error);
	
}



$get_info_query = "SELECT `section_id`,
						  `language`,
						  `title`,
						  `description`,
						  `content`,
						  `thumbnail`,
						  `url`,
						  `lng`,
						  `lat`
					FROM
						  `bc_info`
					WHERE
						  `section_id` = " . $siteData['section'] . " AND
						  `language` = '" . $siteData['language'] . "'";

if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
	
	$get_info_data = DBM::fetchObject($get_info_result);
	
	$smarty->assign('info_title', $get_info_data->title);
	
	$smarty->assign('email', $get_info_data->thumbnail);
	
	$smarty->assign('address', $get_info_data->description);
	
	$smarty->assign('phone', $get_info_data->url);
	
	$smarty->assign('lng', $get_info_data->lng);
	
	$smarty->assign('lat', $get_info_data->lat);
	
	$smarty->assign('info_content', $get_info_data->content);
	
} else {
	
	$smarty->assign('info_title', $language['under_construction']);
	
	$smarty->assign('info_content', $language['under_construction_text']);
	
}

//meta tags info
$og_array = array(		
					'title'	=> $siteData['section_name'],
					'description' => $siteData['section_description'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
$smarty->assign('og_array', $og_array);

$smarty->assign('page_style', 'contact.css');
$smarty->assign('content_file', 'contact_page.tpl');
$smarty->assign('page_class', 'contact');

?>