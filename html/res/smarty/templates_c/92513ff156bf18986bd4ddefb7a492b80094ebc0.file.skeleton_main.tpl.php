<?php /* Smarty version Smarty-3.1.13, created on 2016-05-24 11:37:17
         compiled from "C:\xampp\htdocs\moe\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23257571e383bbc80d2-82232653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92513ff156bf18986bd4ddefb7a492b80094ebc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\skeleton_main.tpl',
      1 => 1464075416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23257571e383bbc80d2-82232653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571e383c2ab8f5_10279472',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'search_key' => 0,
    'language_array' => 0,
    'key' => 0,
    'sectionData' => 0,
    'value' => 0,
    'top_menu' => 0,
    'main_menu' => 0,
    'slider_banners' => 0,
    'banner' => 0,
    'slider_decor' => 0,
    'content_file' => 0,
    'i' => 0,
    'setting_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e383c2ab8f5_10279472')) {function content_571e383c2ab8f5_10279472($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" />
<meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />
<meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['thumbnail']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['og_array']->value['thumbnail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/image.jpg<?php }?>" />
<meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
<?php }elseif($_smarty_tpl->tpl_vars['site_data']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['description'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>" />

<!-- scrolls social -->
<link rel="stylesheet" href="css/contact-buttons.css">

 <!-- scrolls social -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

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

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/raphael-min.js"></script>
<script type="text/javascript" src="js/DevSolutionSkill.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/plugins-scroll.js"></script>

<!-- jQuery KenBurn Slider  -->
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title><?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?></title>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
<script src="js/jquery.contact-buttons.js"></script>
<script src="js/demo.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=482864395251115";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Container -->

	<div id="container">

		<!-- Header ================================================== -->

		<header class="clearfix">

			<!-- Static navbar -->

			<div class="navbar navbar-default navbar-fixed-top">

				<div class="top-line">

					<div class="container">

						<p>

							<span><i class="fa fa-phone"></i>+995 32 272 72 34</span>

							<span><i class="fa fa-envelope-o"></i>pr@moe.gov.ge</span>

						</p>						

						<ul class="social-icons">
							<li><div class="search">
								<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['search_key']->value;?>
" name="que" class="form-control input-sm" maxlength="64" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
								<a class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>
								</form>
								</div>
							</li>
							<li id="language" class="en">
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['language_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<a <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']!=$_smarty_tpl->tpl_vars['key']->value){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_by_language'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
"<?php }else{ ?> class="active"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

								</a>
								<?php } ?>
							</li>
						</ul>

					</div>

				</div>
				

				<div class="container">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						</button>

						<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">

							<img src="images/logo.png" alt="<?php if ($_smarty_tpl->tpl_vars['og_array']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
<?php }?>"/>

						</a>

					</div>

					<div class="navbar-collapse collapse"><?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>
</div>

					<div class="navbar-collapse collapse main-menu">

						<?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>


					</div>

				</div>

			</div>

		</header>

		<!-- End Header -->		

	</div>

	

	

	<div id="slider">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner" >
				<ul>
					<!-- THE FIRST SLIDE -->
                    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
					<li data-transition="fade" data-slotamount="4" data-masterspeed="300">
						<img src="uploads/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['description']);?>
"/> 
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div>
		<div class="deer"><a href="#"><img class="deer" src="images/<?php echo $_smarty_tpl->tpl_vars['slider_decor']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
"/></a></div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/მედია/photo-gallery" class="area"></a>
	</div>
	
	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;

			var api = tpj('.fullwidthbanner').revolution(
				{
					delay:8000,
					startwidth:1170,
					startheight:580,

					onHoverStop:"off",						// Stop Banner Timet at Hover on Slide on/off

					thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
					thumbHeight:50,
					thumbAmount:3,

					hideThumbs:0,
					navigationType:"bullet",				// bullet, thumb, none
					navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

					navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


					navigationHAlign:"center",				// Vertical Align top,center,bottom
					navigationVAlign:"bottom",					// Horizontal Align left,center,right
					navigationHOffset:30,
					navigationVOffset: 40,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,

					touchenabled:"on",						// Enable Swipe Function : on/off


					stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
					stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

					hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
					hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
					hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


					fullWidth:"on",

					shadow:1								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

				});


				// TO HIDE THE ARROWS SEPERATLY FROM THE BULLETS, SOME TRICK HERE:
				// YOU CAN REMOVE IT FROM HERE TILL THE END OF THIS SECTION IF YOU DONT NEED THIS !
					api.bind("revolution.slide.onloaded",function (e) {


						jQuery('.tparrows').each(function() {
							var arrows=jQuery(this);

							var timer = setInterval(function() {

								if (arrows.css('opacity') == 1 && !jQuery('.tp-simpleresponsive').hasClass("mouseisover"))
								  arrows.fadeOut(300);
							},3000);
						})

						jQuery('.tp-simpleresponsive, .tparrows').hover(function() {
							jQuery('.tp-simpleresponsive').addClass("mouseisover");
							jQuery('body').find('.tparrows').each(function() {
								jQuery(this).fadeIn(300);
							});
						}, function() {
							if (!jQuery(this).hasClass("tparrows"))
								jQuery('.tp-simpleresponsive').removeClass("mouseisover");
						})
					});
				// END OF THE SECTION, HIDE MY ARROWS SEPERATLY FROM THE BULLETS
			});
	</script>
    <script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#slider > .fullwidthbanner-container').height(jQuery(window).height());
	});
	</script>
	

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    

	<div class="latest-post">
    	<div class="title-section">
        	<p><?php echo $_smarty_tpl->tpl_vars['language']->value['partners'];?>
</p>
        </div>
        <div id="owl-demo" class="owl-carousel owl-theme">
        	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<10){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<10; $_smarty_tpl->tpl_vars['i']->value++){
?>
            <div class="item news-item">
            	<div class="inner-item">
                	<img alt="" src="uploads/files/thumb/photo1.jpg"/>
                    <div class="hover-item">
                    	<ul>
                        	<li><a class="autor" ><i class="fa fa-user"></i>World Wildlife Fund</a></li>
                            <li><a class="date" href="#"><i class="fa fa-link"></i>www.worldwildlife.org</a></li>
						</ul>
					</div>
				</div>
			</div>
            <?php }} ?>
		</div>
	</div>

	

	<footer>

		<div class="up-footer">

			<div class="footer-line">

				<div class="container">

					<center>

					<div class="social-icons">

			<?php if ($_smarty_tpl->tpl_vars['setting_data']->value['fb_page']){?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['fb_page'];?>
"><img src="images/fb.png" /></a><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['setting_data']->value['youtube_page']){?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['youtube_page'];?>
"><img src="images/youtube.png" /></a><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['setting_data']->value['twitter_page']){?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['twitter_page'];?>
"><img src="images/twitter.png" /></a><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['setting_data']->value['flickr_page']){?><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['setting_data']->value['flickr_page'];?>
"><img src="images/flickr.png" /></a><?php }?>

					</div>

					<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</div>

					<hr>

					<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</div>

					</center>

				</div>					

			</div>

		</div>

	</footer>

<script type="application/javascript">

jQuery(document).ready(function(e) {
	jQuery('.search a').click(function(){
		
		jQuery(this).parents('form').submit();
	
	});
});

</script>	

</body>

</html><?php }} ?>