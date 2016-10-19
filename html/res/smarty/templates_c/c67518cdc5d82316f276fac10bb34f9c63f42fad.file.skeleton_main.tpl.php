<?php /* Smarty version Smarty-3.1.13, created on 2013-11-20 23:51:46
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719526e1971530c33-74243866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67518cdc5d82316f276fac10bb34f9c63f42fad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\skeleton_main.tpl',
      1 => 1384949352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719526e1971530c33-74243866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e19719b4446_91171625',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'top_menu' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e19719b4446_91171625')) {function content_526e19719b4446_91171625($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" /><!-- 
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
" />
<meta name="author" content="idea design group, temo surguladze" />

Required CSS -->

<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css"media="all"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/print.css" media="print"/>

<title><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
</title>

</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

<div class="header">
	<div class="center head_center">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/logo.png" alt="idea design group" /></a>
        <div class="header_cont">            
            <h1 class="header_mid <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</h1>            
            <div class="lang_nav">
                <ul class="lang right">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_geo'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">
						<img src="img/geo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">
						<img src="img/eng.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
					</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
rus/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_rus'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">
						<img src="img/rus.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
					</a></li>
				</ul> 
            </div>
            <div class="searchform">
                <form name="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" name="que" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="search-query"/>
                    <input type="submit" name="button" value="" class="search_button <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"/>
                </form>
            </div>
        </div>        
		<div class="menu_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
            <?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>

		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="footer">
	<div class="center">
    	<div class="copyright <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
			<span class="left"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</span>
            <span class="right"><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</span>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>
</body>
</html>
<?php }} ?>