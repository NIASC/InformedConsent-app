<?php

$info_id = (int) extractGet('info_id');

$search_params = str_replace('&page='.extractGet('page'), '', urldecode($siteData['dirty_url']));

$smarty->assign('search_params', $search_params);



if ($info_id > 0) {

	$get_info_query = "SELECT * FROM `library_books` WHERE `id` = '" . $info_id . "'";	
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$get_info_data = DBM::fetchObject($get_info_result);
		
		$cat_arr = array();
		
		if ($get_info_data->category) array_push($cat_arr, $get_info_data->category);
		
		if ($get_info_data->sub_category) array_push($cat_arr, $get_info_data->sub_category);
		
		if(count($cat_arr) > 0) {
		
		$cat_arr = join(',', $cat_arr);
		//get categories
		
		$query = "SELECT * FROM `library_categories` WHERE `id` IN (".$cat_arr.") AND `language` = '".$siteData['language']."'";
		
		if($result = DBM::queryData($query, $database_link))
		
		while($row = DBM::fetchObject($result))
		
		$categories[$row->id] = $row->name;
		
		$smarty->assign('categories', $categories);
		
		}
		
		$smarty->assign('info', $get_info_data);
		
	} else {
		
		$smarty->assign('info_title', '404 NOT FOUND');
	
		$smarty->assign('info_content', 'Error');
		
	}
	
	//meta tags info
	$og_array = array(		
					'title'	=> strip_tags($get_info_data->title),
					'description' => strip_tags($get_info_data->description),
					'thumbnail' => $thumbnail,
					'id' => $get_info_data->id
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'library_card.tpl');
	
	
	
} elseif(isset($_GET['list'])){
	 
	$title = urldecode(extractGet('title'));
	$author = urldecode(extractGet('author'));
	$anothation = urldecode(extractGet('anothation'));
	$yearfrom = extractGet('yearfrom');
	$yearto = extractGet('yearto');
	$publisher = urldecode(extractGet('publisher'));
	$ISSN_ISBN = extractGet('code');
	$language = extractGet('language');
	$category = extractGet('category');
	$subcategory = extractGet('subcategory');
	
	if($title != '') { $addQuery = " AND `title` LIKE '%".DBM::escape($title)."%'";}
	if($author != '') { $addQuery .= " AND `author` LIKE '%".DBM::escape($author)."%'";}
	if($anothation != '') { $addQuery .= " AND `annotation` LIKE '%".DBM::escape($anothation)."%'";}
	if($yearfrom != '') { $addQuery .= " AND `date` >= '".DBM::escape($yearfrom)." 00:00:00'";}
	if($yearto != '') { $addQuery .= " AND `date` <= '".DBM::escape($yearto)." 23:59:59'";}
	if($publisher != '') { $addQuery .= " AND `publisher` LIKE '%".DBM::escape($publisher)."%'";}
	if($ISSN_ISBN != '') { $addQuery .= " AND `code` = '".DBM::escape($ISSN_ISBN)."'";}
	if($language != '') { $addQuery .= " AND `book_lang` = '".DBM::escape($language)."'";}
	if($category > 0) { $addQuery .= " AND `category` = '".DBM::escape($category)."'";}
	if($subcategory > 0) { $addQuery .= " AND `sub_category` = '".DBM::escape($subcategory)."'";}

	$get_info_query = "SELECT 
						  `id`,
						  `title`,
						  `slug`,
						  `author`,
						  `year`,
						  `book_count`,
						  `publisher`
					FROM
						  `library_books`
					WHERE
						  `published` = 'Y' 
						  ".$addQuery."
					ORDER BY `id` DESC";
	
	if ($get_info_result = DBM::queryData($get_info_query, $database_link)) {
		
		$numb = DBM::numRows($get_info_result);
		
		while ($get_info_data = DBM::fetchObject($get_info_result)) {
			
			$list_data[] = $get_info_data;
								
			
		}
			
		$smarty->assign('numb', $numb);
		$smarty->assign('books', $list_data);
		
	}
	
	
	//meta tags info
	$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'library_list.tpl');
}




 else {
	
	$query = "SELECT `id`, `name` FROM `library_categories` WHERE `parent` = 0 AND `language` = '".$siteData['language']."'";
	
	if($result = DBM::queryData($query, $database_link))
	
	while($row = DBM::fetchObject($result))
	
	$category_list[] = $row;
	
	$smarty->assign('category_list', $category_list);
	
	//meta tags info
	$og_array = array(		
					'title'	=> $siteData['section_description'],
					'description' => $siteData['section_name'],
					'thumbnail' => $siteData['section_img'],
					'id' => $siteData['section']
									);
									
	$smarty->assign('og_array', $og_array);
	
	$smarty->assign('content_file', 'library_form.tpl');
	
}
$smarty->assign('sectionData', $sectionData);
$smarty->assign('library_lang', $library_lang);


?>