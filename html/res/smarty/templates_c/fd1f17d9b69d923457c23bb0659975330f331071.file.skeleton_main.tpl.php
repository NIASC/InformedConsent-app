<?php /* Smarty version Smarty-3.1.13, created on 2015-10-02 12:26:33
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145874526558bed4da4c603-09369184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1f17d9b69d923457c23bb0659975330f331071' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/skeleton_main.tpl',
      1 => 1443774397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145874526558bed4da4c603-09369184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558bed4db09513_68522441',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'PROFILE' => 0,
    'registration_info' => 0,
    'reg' => 0,
    'main_menu' => 0,
    'page_class' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558bed4db09513_68522441')) {function content_558bed4db09513_68522441($_smarty_tpl) {?><!DOCTYPE html>

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

    <link rel="stylesheet" type="text/css" href="css/style.css?v=12364"/>

    <link rel="stylesheet" type="text/css" href="css/forms.css"/>

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



<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>

</head>



<body class="main-font <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">



<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=312061418959500";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>



<div class="header">

    <div class="header-top">

        <div class="logo left">

        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

            	<img src="img/logo.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
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

        <?php if ($_smarty_tpl->tpl_vars['PROFILE']->value){?>

        <div class="right top profile">

        	<ul class="user-navigation">

            <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/profile/"><i class="icons profile-icon"></i></a></li>

            <li class="user-name"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/profile/"><?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['PROFILE']->value['lastname'];?>
</a></li>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/profile/?logout">LOG OUT</a></li>

            <li class="last"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/profile/?edit"><i class="icons edit-icon"></i></a></li>

        </ul>

        </div>

        <?php }?>

        <div class="clear"></div>

    </div>

    <div class="header-bottom relative">

        <div class="slider relative">

            <div class="wrap absolute">

                <div class="text-wrap relative">                

                    <h1 class="upper"><?php if (!$_smarty_tpl->tpl_vars['PROFILE']->value){?><?php echo $_smarty_tpl->tpl_vars['registration_info']->value[0]['title'];?>
<?php }?></h1>                



                    <div class="text">

                        <?php echo $_smarty_tpl->tpl_vars['registration_info']->value[0]['description'];?>


                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['PROFILE']->value){?>

                    <div class="buttons">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['reg']->value->slug;?>
" class="registration-btn">Register</a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/sign-in" class="login-btn">Sign in</a>

                    </div>

                    <?php }?>

                    <i class="icons background-icon-triangle absolute"></i>

                </div>

            </div>

            <ul class="bxslider">

                <li><img src="images/banner1.jpg" alt=""></li>

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

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  

	<?php if (!in_array($_smarty_tpl->tpl_vars['site_data']->value['section_type'],array(4,5,16,18,19,20,21))){?>

	<?php echo $_smarty_tpl->getSubTemplate ('left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <?php }?>

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



<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-39713075-25', 'auto');

  ga('send', 'pageview');



</script>



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