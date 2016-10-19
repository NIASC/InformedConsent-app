<?php /* Smarty version Smarty-3.1.13, created on 2014-01-21 13:42:57
         compiled from "C:\xampp\htdocs\aig\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283595295b952bc4e35-14822828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c6c55bf043a53f3114b7ce055946b17c6e7371' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\skeleton_main.tpl',
      1 => 1390297355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283595295b952bc4e35-14822828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295b952df25d5_38416749',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'lang' => 0,
    'top_menu' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295b952df25d5_38416749')) {function content_5295b952df25d5_38416749($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<link href="css/rs-default.css?v=1.0.4" rel="stylesheet">
<link href="css/royalslider.css" rel="stylesheet">

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
"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</h1>
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
            <div class="lang_nav">
                <ul class="lang right">
                	<?php if ($_smarty_tpl->tpl_vars['lang']->value['on']){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_geo'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">geo</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">eng</a></li>
                    <?php }?>
				</ul> 
            </div>
        </div>        
		
	</div>
    <div id="top_menu" class="menu_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
		<?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>
        
	</div>
</div>

<div class="center_container">
	<div class="center">
    
        <div class="social <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"></span>
        	<ul>
            	<li><a href="https://www.facebook.com/abitrationinitiative" target="_blank" class="facebook"><span></span></a></li>
                <li><a href="https://twitter.com/aig_info" target="_blank" class="twitter"><span></span></a></li>
                <li><a href="http://www.linkedin.com/company/4985085?trk=tyah&trkInfo=tas%3AArbitration%20Initiative%2Cidx%3A1-1-1" target="_blank" class="linkedin"><span></span></a></li>
            </ul>
        </div>
        
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
	</div>      
</div>

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
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
<script src="js/jquery.royalslider.min.js?v=9.3.6" type="text/javascript"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
  $('#video-gallery').royalSlider({
    arrowsNav: false,
    fadeinLoadedSlide: true,
    controlNavigationSpacing: 0,
    controlNavigation: 'thumbnails',
    thumbs: {
      autoCenter: false,
      fitInViewport: true,
      orientation: 'vertical',
      spacing: 0,
      paddingBottom: 0
    },
    keyboardNavEnabled: true,
    imageScaleMode: 'fill',
    imageAlignCenter:true,
    slidesSpacing: 0,
    loop: false,
    loopRewind: true,
    numImagesToPreload: 3,
    video: {
      autoHideArrows:true,
      autoHideControlNav:false,
      autoHideBlocks: true
    }, 
    autoScaleSlider: false, 
    autoScaleSliderWidth: 759,     
    autoScaleSliderHeight: 350,
	autoPlay: {
    	enabled: true,
    	pauseOnHover: true
    	},

    imgWidth: 759,
    imgHeight: 360

  });
});

</script>
<?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>
</body>
</html>
<?php }} ?>