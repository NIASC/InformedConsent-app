<?php /* Smarty version Smarty-3.1.13, created on 2016-01-11 15:39:02
         compiled from "C:\xampp\htdocs\event42\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123445667f478537212-08442767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8068dbb268659bec83b61e289924121806b010c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\skeleton_main.tpl',
      1 => 1452512256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123445667f478537212-08442767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5667f478f321a5_93990649',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'page_style' => 0,
    'page_class' => 0,
    'main_menu' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5667f478f321a5_93990649')) {function content_5667f478f321a5_93990649($_smarty_tpl) {?><!DOCTYPE html>
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
<meta name="author" content="idea design group, temo surguladze" />
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

<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/<?php echo $_smarty_tpl->tpl_vars['page_style']->value;?>
" media="all"/>
<link rel="stylesheet" type="text/css" href="css/respons.css" media="all"/>


<link rel="stylesheet" type="text/css" href="css/print-style.css" media="print"/>
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
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.fancybox.js?v=2.1.5" type="text/javascript"></script>
<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>

</head>



<body class="<?php echo $_smarty_tpl->tpl_vars['page_class']->value;?>
">
	<audio>
   		<source src="sound/click.mp3">
        <source src="sound/click.ogg">
	</audio>

    <header>
    	<div class="nav-bar">
        	<figure role="banner" class="logo">
            	<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/logo1.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
                <?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
                <?php }?>
			</figure>
			<nav role="navigation" class="menu"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</nav>
		</div>
	</header>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
	<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==5){?>    
	<footer class="contact-footer">
		<p>Copyright  ©  2015-2016, Event42 . All Rights Reserved</p>
	</footer>
    <?php }else{ ?>
	<footer>
		<p>Copyright  ©  2015-2016, Event42 . All Rights Reserved</p>
	</footer>
	<?php }?>
<script type="text/javascript">

    $(document).ready(function () {		

		$('.fancybox').fancybox();

    });

</script>
<?php }?>
<script type="text/javascript">

function playclip() {
	
	if (navigator.appName == "Microsoft Internet Explorer") {
		if (document.all) {
		  document.all.sound.src = "sound/click.wav";
		 }
	}
	
	else {
		var audio = document.getElementsByTagName("audio")[0];
		audio.play();
	}
}

    $(document).ready(function () {	
		
		$('a').mouseover(function(){
			playclip();	
		});

    });

</script>
</body>
</html><?php }} ?>