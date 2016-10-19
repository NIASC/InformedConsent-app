<?php /* Smarty version Smarty-3.1.13, created on 2015-06-14 09:36:00
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25576555064dfbca623-69882133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c979cc4ab1666da3cb9b669d05665537f8ef4e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\skeleton_main.tpl',
      1 => 1432818210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25576555064dfbca623-69882133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555064e0175267_10975210',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'site_languages' => 0,
    'sectionData' => 0,
    'main_menu' => 0,
    'menu' => 0,
    'main_menu_sub' => 0,
    'item' => 0,
    'sub' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555064e0175267_10975210')) {function content_555064e0175267_10975210($_smarty_tpl) {?><!DOCTYPE html>
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

<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/fonts/fonts.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/resp.css" type="text/css"/>

<style type="text/css">
		.ka, .ka .lower {
		font-family: 'bpg_arialregular';
		}
		.ka .upper, .ka h1, .ka h2, .ka h3, .ka h4, .ka h5, .ka h6 {
			font-family: 'BPGArialCaps2010';
		}
        .upper {
            text-transform: uppercase;
            font-family: 'BPGNinoMtavruli';
        }

        .en, .md, .ru, .bl, .az, .ar, .ur, 
		.en .lower, .lower .md, .lower .ru, .lower .bl, .lower .az, .lower .ar, .lower .ur {
            font-family: 'Calibri';
        }

        .en .upper, .md .upper, .ru .upper, .bl .upper, .az .upper, .ar .upper, .ur .upper {
            font-family: 'Calibri';			
            text-transform: uppercase;
        } 
</style>
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

<script src="js/jquery-1.11.1.min.js"></script>
<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body class="main-font <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

<div id="fb-root"></div>
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="header first-font">
    <div class="center-wrap top">
        <div class="logo">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
            <img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
            </a>
        </div>
        <div class="right">
            <ul class="languages en">
                <li>LANGUAGE</li>
                <li id="contentLang" class="last" title="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
 <i class="icon drop-arrow-icon"></i>
                	<ul>
                        <li>
                            <ul class="first">
                                <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[4];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[4]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[4]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='az'){?>class="active"<?php }?> title="az">aze</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[3];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[3]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[3]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='ar'){?>class="active"<?php }?> title="ar">arm</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[2];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[2]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[2]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='ka'){?>class="active"<?php }?> title="ka">Geo</a></li>
                                <li  class="last"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[6];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[6]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[6]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='ur'){?>class="active"<?php }?> title="ur">ukr</a></li>
                            </ul>
                        </li>
                        <li class="last">
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[0]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[0]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='en'){?>class="active"<?php }?> title="en">Eng</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[1]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[1]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='ru'){?>class="active"<?php }?> title="ru">Rus</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[5];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[5]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[5]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='mo'){?>class="active"<?php }?> title="mo">Mda</a></li>
                            </ul>
                        </li>
                        <li class="icon language-arrow-two-icon"></li>
                    </ul>
                </li>
            </ul>
            <form class="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                <input type="text" placeholder="SEARCH..." name="que"/>
                <button><i class="icon icon-search"></i></button>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="line"></div>
    <div class="navigation upper">
        <div class="mobile-menu"><i class="icon menu-icon"></i> <span>Menu</span></div>
        <ul class="center-wrap">
        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->index++;
?>
        	<li <?php if ($_smarty_tpl->tpl_vars['menu']->index==0){?>class="first"<?php }?>>
            	<?php if ($_smarty_tpl->tpl_vars['menu']->value->type==1){?><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
">
                	<i class="icon home-icon"></i><span class="home"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</span>
                </a>
                <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a>
                <?php }?>
                
				<?php if (count($_smarty_tpl->tpl_vars['main_menu_sub']->value[$_smarty_tpl->tpl_vars['menu']->value->id])>0){?>
                <ul class="submenu">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_menu_sub']->value[$_smarty_tpl->tpl_vars['menu']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            </li>
        <?php } ?>
        	<li class="sub-menus lower">
            	<ul>
                	<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main_menu_sub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
                    	<li><?php if (count($_smarty_tpl->tpl_vars['sub']->value)>0){?>
                        	<ul>
                        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</div>


<div class="slider-wrap">
    <div class="slider">
        <ul id="slider">
            <li><img src="images/slider-image.jpg" alt="slider image"/></li><?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
            <li><img src="images/slider-image2.jpg" alt="slider image"/></li>
            <li><img src="images/slider-image3.jpg" alt="slider image"/></li>
            <li><img src="images/slider-image4.jpg" alt="slider image"/></li><?php }?>
        </ul>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    
        $(".header .languages li.last").click(function () {
            $(this).find("ul").slideToggle(200);
        });

        $("#slider").bxSlider({
            controls: false,
            auto: true,
            pause: 10000,
            mode: 'fade'

        });
});
</script>


<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    

<!-- FOOTER -->
<div class="footer">
    <div class="center-wrap second-font">
        <ul>
            <li class="first"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</li>
            <li class="last upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</li>
        </ul>
    </div>
</div>



<!-- END OF FOOTER -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39713075-23', 'auto');
  ga('send', 'pageview');

</script>


<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
<?php }?>
<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function () {
		
		$('.fancybox').fancybox();
		
        
       

        $(".mobile-menu").click(function (e) {
            e.preventDefault();
            $(this).next().slideToggle(400);
        });

        $(window).resize(function () {
            if ($(".navigation ul").attr('style') !== undefined) {
                if ($('body').width() >= 500) {
                    $(".navigation ul").removeAttr("style");
                }
            }

            $(".navigation  .sub-menus li").not(".navigation  .sub-menus li li").each(function () {
                var index = $(".navigation  .sub-menus li").not(".navigation  .sub-menus li li").index($(this));
                $(this).css({
                    "min-width": $(".navigation ul li").not(".navigation ul li li").not(".sub-menus").eq(index).outerWidth(),
                    "max-width": $(".navigation ul li").not(".navigation ul li li").not(".sub-menus").eq(index).outerWidth()
                })
            });
        });

        $(".navigation  .sub-menus li").not(".navigation  .sub-menus li li").each(function () {
            var index = $(".navigation  .sub-menus li").not(".navigation  .sub-menus li li").index($(this));
            $(this).css({
                "min-width": $(".navigation ul li").not(".navigation ul li li").not(".sub-menus").eq(index).outerWidth(),
                "max-width": $(".navigation ul li").not(".navigation ul li li").not(".sub-menus").eq(index).outerWidth()
            });
        });

        var slideUp = true;
        var slideDown=true;
        $(".navigation ul").hover(function () {
            if ($('body').width() >= 500 && slideDown)
                $(".navigation  .sub-menus").slideDown(400);
        }, function () {
            if (slideUp) {
                slideDown=false;
                $(".navigation  .sub-menus").slideUp(400,function(){
                    slideDown=true
                });
            }
        });

        $(".navigation  .sub-menus").hover(function () {
            slideUp = false;
        }, function () {
            if (pageY > 20) {
                slideDown=false;
                $(this).slideUp(400,function(){
                    slideDown=true;
                });
            }
            slideUp = true;
        });
        var pageY = 0;
        $(".navigation  .sub-menus").on("mousemove", function (event) {
            pageY = event.pageY - $(this).offset().top;
        });

        $(".navigation ul li a").not(".navigation ul li li a").click(function(e){
            if($("body").width() <= 500&&$(this).find('ul').length>0){
                e.preventDefault();
                $(this).next().slideToggle(400);
                if($(this).parent().is('.open')){
                    $(this).parent().removeClass('open');
                }
                else {
                    $(this).parent().addClass('open');
                }
            }
        });
    
    
    });
</script>

</body>
</html>
<?php }} ?>