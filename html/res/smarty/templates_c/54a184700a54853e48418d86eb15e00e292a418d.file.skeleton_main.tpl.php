<?php /* Smarty version Smarty-3.1.13, created on 2014-04-25 13:03:40
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12079535943140f3370-95213126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a184700a54853e48418d86eb15e00e292a418d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\skeleton_main.tpl',
      1 => 1398416618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12079535943140f3370-95213126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53594314374276_34776739',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'left_menu' => 0,
    'key' => 0,
    'contact' => 0,
    'top_menu' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53594314374276_34776739')) {function content_53594314374276_34776739($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }?>" />
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="author" content="idea design group, temo surguladze" />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
" /> 
<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }?>" />
<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<!--[if IE]>
<link href="css/IE-style.css" type="text/css" rel="stylesheet"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body class="geo">
<div class="container">
    <div id="pattern" class="pattern"></div>
    <div class="container absolute">
        <div class="center">
          <aside>
                <div class="left_sidebar ie_fix">
                    <div class="logo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
                    </div>
                    
                    <nav>
                    <?php echo $_smarty_tpl->tpl_vars['left_menu']->value;?>

                    </nav>
                    
                    <div class="search_wrapper">
                        <form name="search_form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                            <input class="search_txt geo upper" type="text" name="que" value="<?php if ($_smarty_tpl->tpl_vars['key']->value){?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
...<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
..." placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
                            <input class="search_btn" type="submit" name="search" value=""/>
                        </form>
                        <hr/>
                    </div>
                    
                    <div class="contact">
                    	<?php echo $_smarty_tpl->tpl_vars['contact']->value[0]['description'];?>

                    </div>
                </div>
          </aside>
            
          <header>
                <div class="header upper">
                    <h1 class="slogan"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</h1>
                    <ul class="social">
                        <li class="facebook"><a href="#"><i></i></a></li>
                        <li class="twitter"><a href="#"><i></i></a></li>
                        <li class="youtube"><a href="#"><i></i></a></li>
                        <li class="skype"><a href="#"><i></i></a></li>
                    </ul>
                    <ul class="lang_bar">
                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_geo'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>class="active"<?php }?>>
                    		Geo
                    	</a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='eng'){?>class="active"<?php }?>>
                                Eng
                            </a>
                        </li>                        
                    </ul>
                    <nav>
                    <?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>

                    </nav>
                </div>
			</header>
            
			<section>
                <div class="section" id="section">
                    
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    
                    <div class="banner_widget">
                        <hr />
                        <a href="#" target="_blank"><img src="img/banner1.jpg" alt="ბანერი"/></a>
                        <a href="#" target="_blank"><img src="img/banner2.jpg" alt="ბანერი"/></a>
                    </div>
                    
                </div>
            </section>
		</div>
        
        <footer>
            <div class="footer">
                <div class="center">
                    <p class="copyright upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</p>
                </div>
            </div>
        </footer>    
    
	</div>
</div>

<a href="#top" id="to_top"></a>

<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
<?php }} ?>