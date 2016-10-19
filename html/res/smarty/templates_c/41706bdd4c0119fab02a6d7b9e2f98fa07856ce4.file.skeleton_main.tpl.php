<?php /* Smarty version Smarty-3.1.13, created on 2013-05-27 10:26:52
         compiled from "C:\xampp\htdocs\judo\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1294351554fc2d1dbe0-79575343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41706bdd4c0119fab02a6d7b9e2f98fa07856ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\judo\\smarty\\templates\\skeleton_main.tpl',
      1 => 1369294535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294351554fc2d1dbe0-79575343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51554fc3050cf7_88589113',
  'variables' => 
  array (
    'og_array' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'top_menu_ass' => 0,
    'left_menu' => 0,
    'left_menu_name' => 0,
    'top_video' => 0,
    'top_photo' => 0,
    'left_banners' => 0,
    'banner' => 0,
    'content_file' => 0,
    'next_prime_event' => 0,
    'info' => 0,
    'main_events' => 0,
    'right_banners' => 0,
    'footer_banners' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51554fc3050cf7_88589113')) {function content_51554fc3050cf7_88589113($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	
	<meta charset='UTF-8'>
    
	<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?>
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
" />
    <?php }else{ ?>
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" />
    <?php }?>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
" /> 
    <?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?>
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
" />
    <?php }else{ ?>
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
" />
    <?php }?>
    
	<title><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/jflow.style.css" type="text/css"/>
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/jquery.fancybox.css?v=2.1.4" media="screen" />
    <?php }?>
    
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-39713075-2', 'gjf.ge');
	  ga('send', 'pageview');
	
	</script>
    
    
	
	<script type="text/javascript">
		function fbs_click(u) {
		t="pog"; window.open("http://www.facebook.com/sharer.php?u="+encodeURIComponent(u)+"&amp;t="+encodeURIComponent(t),"sharer","toolbar=0,status=0,width=626,height=436");return false;}
	</script>
	
    
</head>
<body>

<div class="first blue" align="center">
    <div class="center">
    	<h3 style="color:#fff;font-family: 'alk_rounded_mtavmedium';margin:0;padding:0;font-weight:normal;"><?php echo $_smarty_tpl->tpl_vars['language']->value['under_construction'];?>
</h4>
        <header>
            <div class="header">
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/logo.png" class="logo"/></a>
                <ul class="social">
                	<?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
" class="lang">english</a></li>
                	<?php }else{ ?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
" class="lang">georgian</a></li>
                	<?php }?>
                    <li><a target="_blank" href="https://twitter.com/JUDOGeorgian" class="soc twitter"></a></li>
                    <li><a target="_blank" href="http://www.facebook.com/GeorgianJudoFederation" class="soc facebook"></a></li>
                    <li><a target="_blank" href="http://www.youtube.com/judoofficial" class="soc youtube"></a></li>
                    <li><a target="_blank" href="https://plus.google.com/114204294289495122477/posts" class="soc google"></a></li>
                </ul>
                <div class="searchform">
                    <form name="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" name="que" class="search-query"/>
                    <input type="submit" name="button" value="" class="search_button"/>
                    </form>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['top_menu_ass']->value;?>

            </div>
        </header>    
    </div>
    <div class="strip"></div>
</div>

<div class="first" align="center">
    <div class="center">
    	
        <ul id="left_sidebar">
        	<?php if ($_smarty_tpl->tpl_vars['left_menu']->value){?>
        	<li><div class="title_bg2"><?php echo $_smarty_tpl->tpl_vars['left_menu_name']->value;?>
</div><?php echo $_smarty_tpl->tpl_vars['left_menu']->value;?>
</li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['top_video']->value){?>
            <li><div class="title_bg1"><?php echo $_smarty_tpl->tpl_vars['language']->value['top_video'];?>
</div>
                <iframe width="212" height="150" src="<?php echo $_smarty_tpl->tpl_vars['top_video']->value;?>
?wmode=transparent" frameborder="0" wmode="Opaque" allowfullscreen class="padding"></iframe>
            </li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['top_photo']->value){?>
            <li>
                <div class="title_bg1"><?php echo $_smarty_tpl->tpl_vars['language']->value['top_picture'];?>
</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['top_photo']->value;?>
" target="_blank">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['top_photo']->value;?>
" class="top_photo padding"/>
                </a>
            </li>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section']!=17){?>
            <li id="calendar" alt="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"></li>
            <?php }?>
            
            <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
            <li>
            	<?php if ($_smarty_tpl->tpl_vars['banner']->value['description']){?>
                <div class="title_bg2"><?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
</div>
                <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="padding banner"/>
                </a>
            </li>
            <?php } ?>
        </ul>
    	
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
    	<ul id="right_sidebar">
        <?php if ($_smarty_tpl->tpl_vars['next_prime_event']->value){?>
        <li><div class="title_bg1"><?php echo $_smarty_tpl->tpl_vars['language']->value['next_prime_event'];?>
</div>
        	<ul class="events hot">
            
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['next_prime_event']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            	<li><div class="excerpt"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <br /><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div>
                	<div class="more_links">
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['gallery']>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['gallery_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['gallery'];?>
" class="tab1"><?php echo $_smarty_tpl->tpl_vars['language']->value['gallery'];?>
</a>
                    <?php }else{ ?>
                    <a class="tab1 inactive"><?php echo $_smarty_tpl->tpl_vars['language']->value['gallery'];?>
</a>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['results']>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['results_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['results'];?>
" class="tab2"><?php echo $_smarty_tpl->tpl_vars['language']->value['results'];?>
</a>
                    <?php }else{ ?>
                    <a class="tab2 inactive"><?php echo $_smarty_tpl->tpl_vars['language']->value['results'];?>
</a>
                    <?php }?>
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="tab3"><?php echo $_smarty_tpl->tpl_vars['language']->value['info'];?>
</a> 
                    </div>               
                </li>
                <?php } ?>
                
			</ul>
        </li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['main_events']->value){?>
        <li><div class="title_bg2"><?php echo $_smarty_tpl->tpl_vars['language']->value['main_events'];?>
</div>
        	<ul class="events">
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            	<li><div class="excerpt"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <br /><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</div>
                	<div class="more_links">
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['gallery']>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['gallery_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['gallery'];?>
" class="tab1"><?php echo $_smarty_tpl->tpl_vars['language']->value['gallery'];?>
</a>
                    <?php }else{ ?>
                    <a class="tab1 inactive"><?php echo $_smarty_tpl->tpl_vars['language']->value['gallery'];?>
</a>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['results']>0){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['results_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['results'];?>
" class="tab2"><?php echo $_smarty_tpl->tpl_vars['language']->value['results'];?>
</a>
                    <?php }else{ ?>
                    <a class="tab2 inactive"><?php echo $_smarty_tpl->tpl_vars['language']->value['results'];?>
</a>
                    <?php }?>
                    
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="tab3"><?php echo $_smarty_tpl->tpl_vars['language']->value['info'];?>
</a> 
                    </div>               
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php }?>
        
        <li><div class="title_bg2"><?php echo $_smarty_tpl->tpl_vars['language']->value['media_portal'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/youtube.png" align="right" vspace="4"/></div><a target="_blank" href="http://www.youtube.com/judoofficial"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/vidio.png" class="padding"/></a></li>
        <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        <li>
            <?php if ($_smarty_tpl->tpl_vars['banner']->value['description']){?>
            <div class="title_bg2"><?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
</div>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="padding banner"/>
            </a>
         </li>
         <?php } ?>
         
         <li>
         	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FGeorgianJudoFederation&amp;width=224&amp;height=300&amp;show_faces=true&amp;colorscheme=dark&amp;stream=false&amp;show_border=true&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:224px; height:300px;" allowTransparency="true"></iframe>
         </li>
    </ul>
        
    </div>
</div> 
        
<div class="first footer" align="center">
    <div class="center">
           <table class="partners">
            <tr>
            <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
            
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
"  target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="footer_banner"/></a></td>
            
            <?php } ?>
            </tr>
           </table>
    </div>
    <div class="strip2"></div>
</div>	
	<!-- JavaScript. In the end for faster loading -->
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.fancybox.js?v=2.1.4"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.fancybox-media.js?v=1.0.5"></script>    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/fancy-scripts.js"></script>
    <?php }?>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/cal.js"></script>    
    
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jflow.plus.min.js"></script>	
    <?php }?>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>   
	<!-- -->
	
</body>
</html><?php }} ?>