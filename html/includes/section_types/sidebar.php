<?php
	
	
	//banners
	$banner_right = page_banners($siteData['section'], $siteData['language'], 1);
	$banner_left = page_banners($siteData['section'], $siteData['language'], 2);
	$banner_center = page_banners($siteData['section'], $siteData['language'], 3);
	$banner_full = page_banners($siteData['section'], $siteData['language'], 4);
	$header_banner = page_banners($siteData['section'], $siteData['language'], $type = 5);
	$slider_banner = page_banners($siteData['section'], $siteData['language'], $type = 6);
	
	
	$smarty->assign('contact_slug', $row->slug);
	
	$smarty->assign('banner_right', $banner_right);
	$smarty->assign('banner_left', $banner_left);
	$smarty->assign('banner_center', $banner_center);
	$smarty->assign('banner_full', $banner_full);
	$smarty->assign('header_banner', $header_banner);
	$smarty->assign('slider_banner', $slider_banner);
	
	
?>