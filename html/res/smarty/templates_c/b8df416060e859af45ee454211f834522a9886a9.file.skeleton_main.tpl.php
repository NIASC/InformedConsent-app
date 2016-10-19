<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:44:44
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690293039558be9ac187874-91896608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8df416060e859af45ee454211f834522a9886a9' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/skeleton_main.tpl',
      1 => 1435216514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690293039558be9ac187874-91896608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'registration_info' => 0,
    'main_menu' => 0,
    'page_class' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558be9ac243e65_01934560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558be9ac243e65_01934560')) {function content_558be9ac243e65_01934560($_smarty_tpl) {?><!DOCTYPE html>
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

    <link rel="stylesheet" type="text/css" href="css/fonts/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/resp.css"/>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <style>
        .main-font {
            font-family: 'FranklinGothic-Book';
        }

        .second-font {
            font-family: 'Calibri-Regular';
        }

        .upper {
            text-transform: uppercase;
        }
    </style>
    
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

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
<div class="header">
    <div class="header-top">
        <div class="logo left">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
            	<img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
            </a>
        </div>
        <div class="search right">
            <form action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search" method="get" name="search">
            	<input type="text" class="second-font" placeholder="Search..." name="que" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
                <button><i class="search-icon icons"></i></button>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header-bottom relative">
        <div class="slider relative">
            <div class="wrap absolute">
                <div class="text-wrap relative">
                    <h1 class="upper"><?php echo $_smarty_tpl->tpl_vars['registration_info']->value[0]['title'];?>
</h1>

                    <div class="text">
                        <?php echo $_smarty_tpl->tpl_vars['registration_info']->value[0]['description'];?>

                    </div>
                    <div class="buttons">
                        <a href="#" class="registration-btn">Register</a>
                        <a href="#" class="login-btn">Sign in</a>
                    </div>
                    <i class="icons background-icon-triangle absolute"></i>
                </div>
            </div>
            <ul class="bxslider">
                <li><img src="images/banner1.jpg" alt=""></li>
                <li><img src="images/banner2.jpg" alt=""></li>
                <li><img src="images/banner3.jpg" alt=""></li>
            </ul>
        </div>
        <div class="hidden-mobile-menu">Menu</div>
        <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>

        <div class="left-gray absolute"></div>
        <div class="right-gray absolute"></div>
        <div class="clear"></div>
    </div>
</div>


<div class="main-wrap <?php echo $_smarty_tpl->tpl_vars['page_class']->value;?>
">
	<?php if (!in_array($_smarty_tpl->tpl_vars['site_data']->value['section_type'],array(4,5))){?>
	<?php echo $_smarty_tpl->getSubTemplate ('left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
	<div class="clear"></div>
</div>  

<!-- FOOTER -->
<div class="footer">
    <div class="main-wrap">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</div>
        <div class="right"><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</div>
        <div class="clear"></div>
    </div>
</div>
<!-- END OF FOOTER -->

<script type="text/javascript" type="text/javascript">
	
    $(document).ready(function () {
		
		$('.fancybox').fancybox();
		
        $('.bxslider').bxSlider({
            pager: false,
            controls: false,
			pause:5000,
            auto:true
        });

        $(".main-wrap .sidebar ul").bxSlider({
            auto:true,
            pager: false,
			pause:8000,
            onSliderLoad:function(){
                Rearange();
                $(window).resize(function(){
                    Rearange();
                });
            }
        });

        function Rearange(){
            $(".main-wrap .sidebar .bx-wrapper").css({
                position: "relative"
            });

            $(".main-wrap .sidebar .bx-prev").addClass("icons").addClass("arrow-left");
            $(".main-wrap .sidebar .bx-next").addClass("icons").addClass("arrow-right");
            $(".main-wrap .sidebar .bx-prev").css({
                position:"absolute",
                left:15,
                top:$(".main-wrap .sidebar .bx-wrapper .image").eq(0).height()/2-6
            });

            $(".main-wrap .sidebar .bx-next").css({
                position:"absolute",
                right:15,
                top:$(".main-wrap .sidebar .bx-wrapper .image").eq(0).height()/2-6
            });
        }
		
		$('.navigation > li:last-child').addClass('last');
    });
</script>

<!--[if !(IE 8)]><!-->
    <script type="text/javascript" src="js/mobile.js"></script>
<!--<![endif]-->


</body>
</html>
<?php }} ?>