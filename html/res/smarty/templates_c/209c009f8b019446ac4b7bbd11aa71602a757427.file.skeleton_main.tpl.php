<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 18:10:43
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17214550c386e99db86-80307821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209c009f8b019446ac4b7bbd11aa71602a757427' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\skeleton_main.tpl',
      1 => 1431007840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17214550c386e99db86-80307821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c386ee6e977_86541340',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'site_languages' => 0,
    'sectionData' => 0,
    'setting_data' => 0,
    'top_menu' => 0,
    'index' => 0,
    'menu' => 0,
    'main_menu' => 0,
    'content_file' => 0,
    'contact_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c386ee6e977_86541340')) {function content_550c386ee6e977_86541340($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/resp.css" type="text/css"/>

<link href="css/royalslider.css" rel="stylesheet">
    <link href="css/rs-default.css?v=1.0.4" rel="stylesheet"> 
<style type="text/css">
		.ka {
		font-family: 'bpg_arialregular';
		}
		.ka .upper, .ka h1, .ka h2, .ka h3, .ka h4, .ka h5, .ka h6 {
			font-family: 'BPGArialCaps2010';
		}
        .upper {
            text-transform: uppercase;
            font-family: 'BPGNinoMtavruli';
        }

        .en, .no {
            font-family: 'Calibri';
        }

        .en .upper, .no .upper {
            font-family: 'Candara';			
            text-transform: uppercase;
        }
</style>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>

<script src="js/jquery/jquery-1.11.2.min.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>
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


<div id="header" class="header">
    <div class="header-top">
        <div class="logo">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
            <img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/>
            </a>
        </div>
        <div class="right">
            <ul id="lang_wrapper">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[1];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[1]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[1]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='en'){?>class="active"<?php }?> title="en">
                    ENGLISH
                    </a>/
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[0]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[0]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='ka'){?>class="active"<?php }?> title="ka">GEORGIAN</a>/
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_languages']->value[2];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['site_languages']->value[2]];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['site_languages']->value[2]];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='no'){?>class="active"<?php }?> title="no">NORWEGIAN</a>
                </li>
                <li class="social-icons">
                    <a href="#"><div class="rrs"></div></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><div class="youtube"></div></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><div class="fb"></div></a>
                </li>
            </ul>
            <form class="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                <input type="text" placeholder="SEARCH..." value="" name="que"/>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="navigation">
        <ul class="main-font upper">
        	<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
        	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>
            <li class="first"><a href="#header"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a> </li>
            <?php }else{ ?>
            <li><a href="#<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a> </li>
            <?php }?>
            <?php } ?>
            <?php }else{ ?>
            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>
            <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value->id==$_smarty_tpl->tpl_vars['site_data']->value['section']){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a> </li>
            <?php }else{ ?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
" <?php if ($_smarty_tpl->tpl_vars['menu']->value->id==$_smarty_tpl->tpl_vars['site_data']->value['section']){?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a> </li>
            <?php }?>
            <?php } ?>
            <?php }?>
            <li class="last iconmenu">
            	<i class="icon menu"></i>
                <?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>

            </li>
        </ul>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
<section class="main-image" style="background-image: url('img/image.png')">

</section>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    

<!-- FOOTER -->

<div class="footer second-font">
    <div class="wrap">
		<div class="left">
        <ul>
            <li><i class="icon location"></i> <span><?php echo $_smarty_tpl->tpl_vars['setting_data']->value['address'];?>
</span> </li>
            <li><i class="icon phone"></i> <span>Tel: <?php echo $_smarty_tpl->tpl_vars['setting_data']->value['phone'];?>
</span> </li>
            <li><i class="icon email"></i> <span>Email: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['contact_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['setting_data']->value['contact_email'];?>
</a></span> </li>
            <li class="copyright"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['contact_info']->value->description){?>
            <?php echo $_smarty_tpl->tpl_vars['contact_info']->value->description;?>

            <?php }?>
        </ul>
        </div>
        <ul class="right">
            <li>
            	<a href="#"><i class="icon rs"></i></a> 
                <a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><i class="icon youtu"></i></a> 
                <a href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><i class="icon fb"></i></a> 
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['contact_info']->value->slug;?>
"><i class="icon contact"></i></a></li>
            <li>&nbsp;</li>
            <li style="margin-top: 40px"><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<!-- END OF FOOTER -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39713075-22', 'auto');
  ga('send', 'pageview');

</script>


<script type="text/javascript">
    $(document).ready(function () {
        

        var NavPos = $("#header .navigation").eq(0).offset().top;
        $(window).scroll(function () {

            /* $("section").each(function () {
             var offset = window.pageYOffset+100;
             $("section").css("background-position", "50% " + (offset *.5) + "px");
             }
             )*/

            if ($(window).scrollTop() >= NavPos) {
                $("#header .navigation").addClass('fixed');
            }
            else {
                $("#header .navigation").removeClass('fixed');
            }

        });

       
    });


    /*$(document).ready(function(){
     $(".down-arrow-icon").click(function(){
     $('section.mission .mission-wrap .wrap .left .text-wrap div').animate({
     top:$('section.mission .mission-wrap .wrap .left .text-wrap div').position().top-500
     },400);

     });
     });*/
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-69
                    }, 1000);
                    return false;
                }

        });
    });

   $(window).ready(function(){

        $(".icon.menu ").click(function(){
            if($(window).width() <= 660){
               if(!$("#header .navigation").is(".open")){
                   $("#header .navigation").addClass("open");
               }
                else {
                   $("#header .navigation").removeClass("open");
               }
            }
            else {
                $(this).next().slideToggle(400);
            }
        });

        $(window).resize(function(){
            if($(window).width()<=660){
                $(".icon.menu ").next().removeAttr('style');
            }
        });
		
        $(window).resize(function() {
            $("section.main-image").height($("section.main-image").width() *.42);
        });
		
		
        function msieversion() {

            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
                return true;
            else return false;
        }

        if(msieversion())
        {
            $(".header .navigation ul").addClass("ieSucks");
        }
		
    });
</script>

<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>
<script type="text/javascript">
    $(document).ready(function() {
		$(window).scroll(function(){
            $("#header .navigation ul li a").not("#header .navigation ul li li a").each(function(){
                var element=$(this);
                var correspondent=$(element.attr("href"));
                if(correspondent.length>0)
                if($(window).scrollTop()>=correspondent.offset().top-72){
                    element.addClass("active");
                    $("#header .navigation ul li a").not(element).removeClass("active");
                }
            });
        });
    });
</script>
<?php }?>
<!-- PARALLAX EFFECT -->

<!--[if !IE]-->
<script src="js/parallax-scroll.nonIE.js"></script>
<!--[endif]-->

<!--[if lt IE 9]>
<script src="js/parallax-scroll.ie.js"></script>
<![endif]-->


</body>
</html>
<?php }} ?>