<?php /* Smarty version Smarty-3.1.13, created on 2014-04-22 18:38:28
         compiled from "C:\xampp\htdocs\eeu.edu.ge\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:598552e113cf16c9b1-28060644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35308098aa91e2c63cdfbda2beb07a7c4ea5df29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eeu.edu.ge\\smarty\\templates\\skeleton_main.tpl',
      1 => 1397642551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '598552e113cf16c9b1-28060644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e113cf41d057_17918508',
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
<?php if ($_valid && !is_callable('content_52e113cf41d057_17918508')) {function content_52e113cf41d057_17918508($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" /> 
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
<!--
Required CSS -->

<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />


<link rel="stylesheet" type="text/css" href="css/style.css"media="all"/>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/iespecific.css" />
<![endif]-->
<![if !IE]>
<link rel="stylesheet" type="text/css" href="css/newBrowsers.css" />
<![endif]>

<link rel="stylesheet" href="css/rs-default.css?v=1.0.4"/>
<link rel="stylesheet" href="css/royalslider.css"/>

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>


<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
<style>
.compact .under_construction {
	display:none;
}
.num {
	float:right;
}
.compact .num {
	display:none;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<?php }?>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

<div class="header">
	<div class="center head_center">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" class="logo"><img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
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
                    		Georgian<span> | </span><b class="caret"></b>
                    	</a>
                    </li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" alt="eng" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='eng'){?>class="active"<?php }?>>
                    		English<span> | </span><b class="caret"></b>
                    	</a>
                    </li>                    
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
rus/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" alt="rus" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='rus'){?>class="active"<?php }?>>
                    		Russian<span> | </span><b class="caret"></b>
                    	</a>
                    </li>
				</ul> 
            </div>           
        </div>
        
        <div class="num">
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>        
            	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="121" height="77" id="FlashID" title="eeu">
                  <param name="movie" value="img/num.swf" />
                  <param name="quality" value="high" />
                  <param name="wmode" value="opaque" />
                  <param name="swfversion" value="6.0.65.0" />
                  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                  <param name="expressinstall" value="Scripts/expressInstall.swf" />
                  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                  <!--[if !IE]>-->
                  <object type="application/x-shockwave-flash" data="img/num.swf" width="121" height="77">
                    <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="swfversion" value="6.0.65.0" />
                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                    <div>
                      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                    </div>
                    <!--[if !IE]>-->
                  </object>
                  <!--<![endif]-->
                </object>
                <script type="text/javascript">
                swfobject.registerObject("FlashID");
                </script>
        <?php }else{ ?>
        <img src="img/num.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
        <?php }?>
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
			<div class="counters right"> 
				<script language="JavaScript" type="text/javascript" src="http://counter.top.ge/cgi-bin/cod?100+94290"></script>
                <noscript>
                <a target="_top" href="http://counter.top.ge/cgi-bin/showtop?94290">
                <img src="http://counter.top.ge/cgi-bin/count?ID:94290+JS:false" border="0" alt="TOP.GE" /></a>
                </noscript>
            </div>
            
            <span class="right"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</span>
            
		</div>
	</div>
</div>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39713075-12', 'eeu.edu.ge');
  ga('send', 'pageview');

</script>



<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
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
<script type="text/javascript" src="js/cal.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
<?php }} ?>