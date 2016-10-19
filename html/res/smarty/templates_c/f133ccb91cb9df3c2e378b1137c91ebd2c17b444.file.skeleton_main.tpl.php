<?php /* Smarty version Smarty-3.1.13, created on 2013-07-23 15:42:10
         compiled from "C:\xampp\htdocs\idea\smarty\templates\skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2366751a32a70862f53-88531902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f133ccb91cb9df3c2e378b1137c91ebd2c17b444' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\skeleton_main.tpl',
      1 => 1372257549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2366751a32a70862f53-88531902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a32a70c54e11_26527107',
  'variables' => 
  array (
    'og_array' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'language' => 0,
    'top_menu' => 0,
    'content_file' => 0,
    'partners' => 0,
    'partner' => 0,
    'clients' => 0,
    'client' => 0,
    'footer_contact' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a32a70c54e11_26527107')) {function content_51a32a70c54e11_26527107($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
" />
<meta name="author" content="idea design group, temo surguladze" />

<!-- Required CSS -->
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/movingboxes.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/jquery.fancybox.css" rel="stylesheet" />


<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" type="image/x-icon" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" mce_href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" media="all"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/print.css" mce_href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/print.css" media="print"/>

<title><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
</title>

    

	

</head>

<body>
<div class="full" align="center">
	<div class="center">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_logo.png" alt="idea design group" class="logo" /></a>
        <div class="right header">
        	<div class="lang_nav">
                <ul class="social right">
                    <li><a href="#" class="facebook"><span></span></a></li>
                    <li><a href="#" class="linkdin"><span></span></a></li>
                </ul>
                <ul class="lang right">
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>
                    <li class="active"><a href="#">geo</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">eng</a></li>
                <?php }else{ ?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">geo</a></li>
                    <li class="active"><a href="#">eng</a></li>
                <?php }?>
                </ul> 
            </div>           
            <div class="searchform">
            	<form name="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" name="que" class="search-query"/>
                    <input type="submit" name="button" value="" class="search_button"/>
				</form>
            </div>
        </div>
    </div>
    
    <div class="full menu_bg" align="center">
        <div class="center <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
        	<?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>

        </div>
    </div>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="full footer">
    	<div class="center">
            <div class="partners">
                <h4 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['partners'];?>
</h4>
                <?php if ($_smarty_tpl->tpl_vars['partners']->value){?>
                <ul><?php  $_smarty_tpl->tpl_vars['partner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['partners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partner']->key => $_smarty_tpl->tpl_vars['partner']->value){
$_smarty_tpl->tpl_vars['partner']->_loop = true;
?>
                	<?php if ($_smarty_tpl->tpl_vars['partner']->value['file']){?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['partner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['partner']->value['target'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['partner']->value['file'];?>
" alt="<?php echo strip_tags($_smarty_tpl->tpl_vars['partner']->value['description']);?>
"/></a></li>
                    <?php }else{ ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['partner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['partner']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['partner']->value['description'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                </ul>
                <?php }?>
            </div>
            
            <div class="clients">
                <h4 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['clients'];?>
</h4>
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['client']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clients']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
$_smarty_tpl->tpl_vars['client']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['client']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['client']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value['description'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            
            <div class="footer_contact">
            	<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value){
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
                	<?php echo $_smarty_tpl->tpl_vars['contact']->value['description'];?>

                <?php } ?>
            </div>
            <div class="copyright">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/logo2.png" alt="idea design group"/>
                <p><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.fancybox.js?v=2.1.4"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.fancybox-media.js?v=1.0.5"></script>    
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/fancy-scripts.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39713075-3', 'ideadesigngroup.ge');
  ga('send', 'pageview');

</script>

<?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']==1){?>    
<!-- Required script -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.8.0.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.movingboxes.js"></script>

	<script>
	$(function(){

		$('#slider').movingBoxes({
			/* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
			width: 500,
			panelWidth: 0.5,
			*/
			startPanel   : 2,      // start with this panel
			wrap         : true,  // if true, the panel will infinitely loop
			buildNav     : true,   // if true, navigation links will be added
			navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
		});

	});
</script>
<?php }?>
</body>
</html>
<?php }} ?>