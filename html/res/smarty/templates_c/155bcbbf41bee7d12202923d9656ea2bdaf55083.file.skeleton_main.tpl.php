<?php /* Smarty version Smarty-3.1.13, created on 2016-10-18 11:28:44
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8787579a11735a4af0-01463651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '155bcbbf41bee7d12202923d9656ea2bdaf55083' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\skeleton_main.tpl',
      1 => 1476782893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8787579a11735a4af0-01463651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_579a1173bdc030_45148081',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'language' => 0,
    'site_data' => 0,
    'setting_data' => 0,
    'top_menu' => 0,
    'main_menu' => 0,
    'header_banner' => 0,
    'content_file' => 0,
    'banner_full' => 0,
    'banner_left' => 0,
    'banner' => 0,
    'banner_center' => 0,
    'banner_right' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579a1173bdc030_45148081')) {function content_579a1173bdc030_45148081($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!-- Bootstrap -->
<link href="scripts/css/bootstrap.min.css" rel="stylesheet" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" href="scripts/css/style.css" type="text/css" />
<link rel="stylesheet" href="scripts/css/jquery.fancybox.css" type="text/css" />


<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['thumbnail']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
themes/default/images/image.jpg<?php }?>" />
<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />


<!-- scrolls social -->
<link rel="icon" href="themes/default/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="themes/default/images/favicon.ico" type="image/x-icon" />

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



<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body data-spy="scroll" data-target="#section-navbar" data-offset="100" class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

<header class="header">
    <nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header pull-right">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div class="row">
				<div class="col-xs-9 col-sm-5">
					<div class="logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['setting_data']->value['logo_url']){?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['logo_url'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>"/>
					<?php }else{ ?>
					<img src="themes/default/images/logo.png" alt="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>"/>
					<?php }?>
					</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7">
					<div class="collapse navbar-collapse" id="header-navbar">
						<div class="container-fluid">
							<div class="row">
								<?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>

							</div>
							<div class="row">
								<?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>

							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
	</nav>
</header>

<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1&&$_smarty_tpl->tpl_vars['header_banner']->value){?>
<div class="container-fluid image-header">
	<div class="row">
		<div class="col-xs-12 background">
			<div class="row">
				<a href="<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['target'];?>
">
				<img src="res/images/<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['file'];?>
" id="main-banner" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['header_banner']->value[0]['title']);?>
"/>
				</a>
				<div class="col-xs-8 col-sm-4 col-md-3 col-sm-offset-1 banner-descrition">
					<?php echo $_smarty_tpl->tpl_vars['header_banner']->value[0]['title'];?>

				</div>
        	</div>
    	</div>
	</div>
</div>
<?php }?>

	<!-- Container -->
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<footer class="container-fluid footer <?php if ($_smarty_tpl->tpl_vars['banner_full']->value){?>full-banner<?php }?>">
	<div class="row">

		<?php if ($_smarty_tpl->tpl_vars['banner_full']->value){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner_full']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner_full']->value[0]['target'];?>
">
			<img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner_full']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner_full']->value[0]['description'];?>
"/>
		</a>
		<?php }else{ ?>
		<div class="col-xs-3 col-sm-3">
			<?php if ($_smarty_tpl->tpl_vars['banner_left']->value){?>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
			<?php } ?>
			<?php }?>
		</div>


		<div class="col-xs-6 col-sm-6">
			<?php if ($_smarty_tpl->tpl_vars['banner_center']->value){?>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_center']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
			<?php } ?>
			<?php }?>
		</div>

		<div class="col-xs-3 col-sm-3 pull-right">
			<?php if ($_smarty_tpl->tpl_vars['banner_right']->value){?>
			<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner_right']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
			<?php } ?>
			<?php }?>
		</div>

		<?php }?>

    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="scripts/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="scripts/js/bootstrap.min.js"></script>
  <script src="scripts/js/jquery.fancybox.js"></script>

  <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==96){?>
  <script src="scripts/js/bootstrap-combobox.js"></script>
  <script src="scripts/js/jquery.maskedinput.min.js"></script>
  <script src="scripts/js/registration.js"></script>
  <script src="scripts/js/animation.slider.js"></script>
  <?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['section_type']==95){?>
  <script src="scripts/js/windraw.js"></script>
  <?php }else{ ?>
  <script src="scripts/js/site.js"></script>
  <script src="scripts/js/animation.slider.js"></script>
  <?php }?>
  <script src="scripts/js/scripts.js"></script>
</body>

</html>
<?php }} ?>