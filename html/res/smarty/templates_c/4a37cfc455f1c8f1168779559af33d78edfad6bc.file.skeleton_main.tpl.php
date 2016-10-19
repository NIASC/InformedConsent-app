<?php /* Smarty version Smarty-3.1.13, created on 2014-03-07 16:53:07
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108719695152fe4019146783-73202441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a37cfc455f1c8f1168779559af33d78edfad6bc' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/skeleton_main.tpl',
      1 => 1394196784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108719695152fe4019146783-73202441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52fe401926e450_57310437',
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
<?php if ($_valid && !is_callable('content_52fe401926e450_57310437')) {function content_52fe401926e450_57310437($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" /> 
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
" />
<meta name="author" content="idea design group, temo surguladze" />
<!--
Required CSS -->

<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" />


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css"media="all"/>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/iespecific.css" />
<![endif]-->
<![if !IE]>
<link rel="stylesheet" type="text/css" href="css/newBrowsers.css" />
<![endif]>

<link rel="stylesheet" href="css/rs-default.css?v=1.0.4"/>
<link rel="stylesheet" href="css/royalslider.css"/>

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
img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" /></a>
        <div class="header_cont">
            <div class="searchform">
                <form name="search" method="get" id="search" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                    <span class="searchbar_toggle"></span>
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" name="que" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="search-query"/>
                    <input type="submit" name="button" value="" class="search_button"/>
                </form>
            </div>
            <div class="social">
                <ul>
                    <li><a href="http://www.facebook.com/EEUniversity" target="_blank" class="facebook"><span></span></a></li>
                </ul>
            </div>            
            <div class="lang_nav">
            	<span id="lang_title"></span>
                <ul id="lang" class="lang right">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_geo'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" alt="geo" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>class="active"<?php }?>>
                    		georgian<span> | </span><b class="caret"></b>
                    	</a>
                    </li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" alt="eng" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='eng'){?>class="active"<?php }?>>
                    		english<span> | </span><b class="caret"></b>
                    	</a>
                    </li>                    
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
rus/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" alt="rus" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='rus'){?>class="active"<?php }?>>
                    		russian<span> | </span><b class="caret"></b>
                    	</a>
                    </li>
				</ul> 
            </div>
        </div>  
    <div id="top_menu" class="menu_wrapper <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
		<?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>
        
	</div>      
		
	</div>
</div>

<div class="center_container">
	<div class="center">
    	<div class="background_wrapper">
        
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        </div>        
	</div>      
</div>

<a href="#top" id="to_top"></a>

<div class="footer">
	<div class="center">
    	<div class="copyright <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
			<span class="left">
            	<a href="#" class="webmail"><i></i>Webmail</a>
                <a href="#" class="student_area"><i></i>Student Area</a>
            </span>
            <span class="right"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
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
    controlNavigation: 'bullets',
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
js/cal.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>

</body>
</html>
<?php }} ?>