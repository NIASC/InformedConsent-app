<?php /* Smarty version Smarty-3.1.13, created on 2016-03-24 14:49:36
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1713856d5eb747a6052-26692523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74141bef83ccb88c56f2fde7e7c9b3daefffc06c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\skeleton_main.tpl',
      1 => 1458816574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713856d5eb747a6052-26692523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56d5eb74b2d270_56889519',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'language_array' => 0,
    'sectionData' => 0,
    'value' => 0,
    'contact_info' => 0,
    'setting_data' => 0,
    'main_menu' => 0,
    'content_file' => 0,
    'footer_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d5eb74b2d270_56889519')) {function content_56d5eb74b2d270_56889519($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="author" content="idea design group" />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['thumbnail']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/image.jpg<?php }?>" />
<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />

<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<link rel= "stylesheet" type="text/css" href="css/resp.css" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

<link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" />
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" />

<script src="js/jquery-2.2.1.min.js"></script>
<script src="js/jquery.fancybox.js?v=2.1.5" type="text/javascript"></script>
<script src="js/rotator.js" type="text/javascript"></script>
<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
    <div id="header">
        <div class="center">
        <div id="slogan"><?php echo $_smarty_tpl->tpl_vars['language']->value['project_slogan'];?>
</div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="images/logo2.png" class="logo" alt="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>"/></a>
            
             <div id="header_right">
                <div id="search">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search" method="get">
                        <input type="text" name="que" placeholder="Search" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
                        <input type="submit" name="search" value="" class="search-icon"/>
                    </form>
                </div>
                <div id="language" class="en">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                	<a <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']!=$_smarty_tpl->tpl_vars['key']->value){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
"<?php }else{ ?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
				<?php } ?>
                </div>
             </div>
            <div id="icons">
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['contact_info']->value->slug;?>
"><div class="contact"><span>Contact</span></div></a></li>
                    <li class="subscribe"><a href="#" class="subscribe" style="font-size:14px"><?php echo $_smarty_tpl->tpl_vars['language']->value['subscribe'];?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['fb_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><div class="facebook2"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['instagram_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['instagram_page'];?>
"><div class="instagram2"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['twitter_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['twitter_page'];?>
"><div class="twitter2"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['youtube_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><div class="youtube2"></div></a></li><?php }?>
                    <li class="lang"><span>Language:</span>
                    	<div id="language" class="en">
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <a <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']!=$_smarty_tpl->tpl_vars['key']->value){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
"<?php }else{ ?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
                        <?php } ?>
                        </div>
					</li>
                 </ul>
             </div>
            
            <div id="menu" class="nav">
            	<div id="s_menu">
                	<a class="mobile_icons "><img src="images/mobile-menu.jpg" id="img"/></a>
                    <a class="small_menu "><img src="images/mobile-menu.jpg" id="img"/></a>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>

			</div>
             
        </div>
    </div>
    
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
	<div id="footer">
        <div class="center">
            <div id="footer_left">
                <?php echo $_smarty_tpl->tpl_vars['footer_menu']->value;?>
<br /><br />
                <div id="social_icons">
                    <ul>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['fb_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><div class="facebook"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['instagram_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['instagram_page'];?>
"><div class="instagram"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['twitter_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['twitter_page'];?>
"><div class="twitter"></div></a></li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['setting_data']->value['youtube_page']){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><div class="youtube"></div></a></li><?php }?>
                    </ul>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</p>
             </div>
             <div id="footer_right">
                <?php echo $_smarty_tpl->tpl_vars['contact_info']->value->description;?>
<br/><br/>
                <span><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</span>
             </div>
         </div>
    </div>
    
<script type="text/javascript">
	$(document).ready(function () {
		$('.fancybox').fancybox();
	});
</script>

<script type="text/javascript">
    $(document).ready(function () {

		$('.toggle-button').click(function(e) {
				$(this).toggleClass('toggle-button-active');
				$('.menu').slideToggle('show');
				e.preventDefault();
		});
    });
</script>


<script type="text/javascript">
	$(document).ready(function(e) {
		if($(window).width() <= 640) {
			$('.nav > ul').hide();
			$('.small_menu').click(function(e) {
				$('.nav > ul').toggle('slow');
			});
			$('.mobile_icons ').click(function(e) {
				$('#icons > ul').toggle('slow');
			});
		}
	});
</script>
</body>
</html><?php }} ?>