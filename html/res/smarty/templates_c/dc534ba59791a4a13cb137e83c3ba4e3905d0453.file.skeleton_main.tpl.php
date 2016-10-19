<?php /* Smarty version Smarty-3.1.13, created on 2015-02-16 11:55:38
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267905371ccb993e2f0-07936077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc534ba59791a4a13cb137e83c3ba4e3905d0453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\skeleton_main.tpl',
      1 => 1423605601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267905371ccb993e2f0-07936077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5371ccb9b9c8b3_90234808',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'top_menu' => 0,
    'main_menu' => 0,
    'site_languages' => 0,
    'item' => 0,
    'sectionData' => 0,
    'key' => 0,
    'category_search' => 0,
    'current_category' => 0,
    'content_file' => 0,
    'site_Data' => 0,
    'footer_map' => 0,
    'footer_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371ccb9b9c8b3_90234808')) {function content_5371ccb9b9c8b3_90234808($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 9]><html lang="en" class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en"><!--<![endif]-->
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

<link rel="icon" href="img/favicon1.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/jquery.geokbd.css" />
<!--[if IE]>
<link href="css/IE-style.css" type="text/css" rel="stylesheet"/>
<![endif]-->
<!--[if lt IE 9]>
<link href="css/LTIE-style.css" type="text/css" rel="stylesheet"/>
<script src="js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" href="css/rs-default.css?v=1.0.4"/>
<link rel="stylesheet" href="css/royalslider.css"/>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
<link rel="stylesheet" type="text/css" href="css/response.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/library.css" media="all"/>

<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container header">

    <div class="top_group">
	<div class="center top">
    	<header>
            <div class="logo">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_logo.png" height="79" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
            </div>
    		<nav class="upper"><?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>
</nav>
		</header>
    </div>
    
    <div class="nav">
    	<div class="center upper">
        	<div class="small_logo">
       			<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/logo_small.png" width="69" height="54" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
            </div>
    		<nav><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</nav>
            
            <div class="lang_bar">
            <ul id="lang">
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/" title="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">GEO</a></li>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['site_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']!=$_smarty_tpl->tpl_vars['item']->value){?>
                <li class="hidden"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['item']->value];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['item']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                <?php }?>
                <?php } ?> 
                          	
            	<li class="hidden"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_data']->value['language']];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['item']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" class="active" title="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
                	<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
</a>
				</li>            
			</ul>
            </div> 
            
            <div class="login_wrapper dd_box">
            	<label><span title="<?php echo $_smarty_tpl->tpl_vars['language']->value['autorization'];?>
"></span><i></i></label>
                <div class="form_container">
            	<form>
            	<input type="text" class="large geo" id="Username" name="username" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['username'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['username'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['username'];?>
"/>
                <input type="password" class="large geo" name="password" id="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['password'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['password'];?>
"/>
                <input type="submit" class="btn btn-info geo" name="login" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['enter'];?>
"/>
                </form>
                </div>
            </div>     
            
            <div class="search_wrapper dd_box">
                <label><span class="search_btn"></span><i></i></label>
                <div class="form_container">
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>
            	<input id="kbd-switcher" type="checkbox" />                
                <?php }?>
            	<form name="search_form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                <input class="search_txt geo kbd" type="text" name="que" value="<?php if ($_smarty_tpl->tpl_vars['key']->value){?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
                <select name="category" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['category'];?>
">
                	<option value="0"><?php echo $_smarty_tpl->tpl_vars['language']->value['category'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['item']->value->id){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
                    <?php } ?>
                </select>
                <input class="btn btn-info geo" type="submit" name="search" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
                </form>
                </div>
			</div>   
                       
		</div>
            
	</div>    
	</div>
    
</div>

<div class="container main">

	<div class="center">    
    	<section>
        	<div class="section" id="section">
            	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
                    
			</div>
		</section>
	</div>
    
</div>

<footer>
	<div class="footer">
    	<div class="center">
        	<div class="court_map upper">
            	<h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_Data']->value['language'];?>
<?php echo $_smarty_tpl->tpl_vars['footer_map']->value[0]['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['court_map'];?>
</a></h3>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_Data']->value['language'];?>
<?php echo $_smarty_tpl->tpl_vars['footer_map']->value[0]['section_slug'];?>
"><div class="map"><i></i></div></a>
            </div>
            <div class="demarker"></div>
        	<nav>
            	<?php if ($_smarty_tpl->tpl_vars['footer_menu']->value){?>
                <ul class="menu">
            	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></li>
                <?php } ?>
                </ul>
                <?php }?>
            </nav>
            <div class="demarker"></div>
            <div class="footer_logo">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><img src="img/logo_small.png" width="69" height="54" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a>
                <h3 class="footer_title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</a></h3>
            	<p class="copyright"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</p>
            </div>
		</div>
	</div>
</footer>
<div class="funded">
	<div class="center">
    	<img src="img/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_usaid.png" width="260" height="78" class="left" alt="USAID"/>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_funded'];?>
</div>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_ewmi.png" width="142" height="70" class="right" alt="EWMI"/>
	</div>
</div>

<a href="#top" id="to_top"></a>

<ul class="social">
   	<li class="facebook"><a target="_blank" href="https://www.facebook.com/hsoj.ge"><i></i>Facebook</a></li>
    <li class="twitter hidden"><a target="_blank" href="#"><i></i>Twitter</a></li>
	<li class="linkedin hidden"><a target="_blank" href="#"><i></i>linkedin</a></li> 
    <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCKzM_5LMvheiKuOE2Ihr4jw/videos"><i></i>Youtube</a></li>   
	<li class="email"><a target="_blank" href="http://webmail.hsoj.ge/"><i></i>Email</a></li>
</ul>

<script type="text/javascript" src="js/GGS.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="js/jquery.geokbd.js"></script>

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
    autoScaleSlider: true, 
    autoScaleSliderWidth: 401,     
    autoScaleSliderHeight: 402,
	autoPlay: {
    	enabled: true,
    	pauseOnHover: true
    	},

    imgWidth: 361,
    imgHeight: 162

  });
});

</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>
<script type="text/javascript">
	jQuery('#kbd-switcher').geokbd();
</script>
<?php }?> 
<script type="text/javascript" src="js/scripts.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39713075-21', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
<?php }} ?>