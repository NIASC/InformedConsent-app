<?php /* Smarty version Smarty-3.1.13, created on 2013-03-15 12:33:38
         compiled from "/home/blackand/domains/blackandwhite.ge/public_html/justice/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9285661155142a7170e2f88-11245367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c0e83196a399ed7efcaf7b30334ed0b3b7322a' => 
    array (
      0 => '/home/blackand/domains/blackandwhite.ge/public_html/justice/smarty/templates/skeleton_main.tpl',
      1 => 1363336409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9285661155142a7170e2f88-11245367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5142a7171457e2_12560796',
  'variables' => 
  array (
    'language' => 0,
    'site_url' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5142a7171457e2_12560796')) {function content_5142a7171457e2_12560796($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	
	<meta charset='UTF-8'>
	
	<title><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</title>
	
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css">
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/jflow.style.css"/>
	
</head>
<body>

	<div class="first" align="center">
	<div class="center">
		<header>
			<div class="header">
	        	<div class="headerbg"></div>
	            <div class="top_nav">
	            	<div class="nav1">
	                    <ul class="topmenu">
	                        <li><a href="#">მთავარი</a></li><li class="space"></li>
	                        <li><a href="#">ჩვენ შესახებ</a></li><li class="space"></li>
	                        <li><a href="#">პროექტები</a></li><li class="space"></li>
	                        <li><a href="#">პრესსამსახური</a></li><li class="space"></li>
	                        <li><a href="#">გალერეა</a></li><li class="space"></li>
	                        <li><a href="#">კონტაქტი</a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="menu_container">
	            	<ul class="menu">
	                	<li><a href="#">ახალი ამბები</a></li>
	                    <li><a href="#">საერთაშორისო თანამშრომლობა</a></li>
	                    <li><a href="#">პროკურატურის არქივი</a></li>
	                    <li><a href="#">ლიბერალური პროკურატურა</a></li>
	                </ul>
	                <ul class="social left">
	                    <li><a href="#"><div class="facebook"></div></a></li>
                        <li><a href="#"><div class="twitter"></div></a></li>
                        <li><a href="#"><div class="youtube"></div></a></li>
                        <li><a href="#"><div class="google"></div></a></li>
	                </ul>
	                <ul class="langbox">
	                	<li><a href="#" class="active">Geo</a></li>
	                    <li>|</li>
	                    <li><a href="#">Eng</a></li>
	                </ul>
	                <div class="search_box">
	                <form method="post">
	                	<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" class="box" name="key"/><input type="submit" class="butt" value=""/>
	                </form>
	                </div>
	            </div>
	            
			</div>
		</header>
	    
	    <div id="container">
	      
	      <div id="container-left">
	      
		      <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		      	      
	      </div>
	      
	      <div id="container-right">
		      <ul id="rightsidebar">
		      	<li class="relative">
		        	<ul id="submenu" class="shadow">
		            	<li class="title">საქართველოს მთავარი პროკურატურა</li>
		            	<li><a href="#">პროკურატურის შესახებ</a></li>
		                <li><a href="#">პროკურატურის ეთიკის კოდექსი</a></li>
		                <li><a href="#">პროკურატურის დეპარტამენტი</a></li>
		                <li><a href="#">პროკურატურის ოფისები</a></li>
		                <li><a href="#">სასამართლო საქმეები</a></li>
		                <li><a href="#">რეფორმები</a></li>
		                <li><a href="#">ტრეინინგები</a></li>
		                <li><a href="#">ვაკანსიები</a></li>                
		            </ul>
		            <div class="sub_footer"></div>
		        </li>
		      	<li id="calendar"></li>
		        <li><img src="img/hotline.png"/></li>
		        <li><img src="img/banner.png" class="shadow"/></li>
		        <li><img src="img/banner.png" class="shadow"/></li>
		        <li><img src="img/banner.png" class="shadow"/></li>
		      </ul>
	      </div>
	            
	    </div>
	</div>
	<div class="footer">
		<div class="center"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>

	    	<ul class="social">
	        	<li><a href="#"><div class="facebook"></div></a></li>
	            <li><a href="#"><div class="twitter"></div></a></li>
	            <li><a href="#"><div class="youtube"></div></a></li>
	            <li><a href="#"><div class="google"></div></a></li>
	        </ul>
	    </div>
	</div>
	</div>
	
	<!-- JavaScript. In the end for faster loading -->
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/cal.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jflow.plus.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/script.js"></script>
	<!-- -->
	
</body>
</html><?php }} ?>