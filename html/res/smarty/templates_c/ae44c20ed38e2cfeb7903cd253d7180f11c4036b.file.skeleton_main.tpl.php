<?php /* Smarty version Smarty-3.1.13, created on 2013-02-05 16:14:52
         compiled from "/Users/otory/Work/Repos/bidzone/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59466602851110bac6f9797-77359047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae44c20ed38e2cfeb7903cd253d7180f11c4036b' => 
    array (
      0 => '/Users/otory/Work/Repos/bidzone/smarty/templates/skeleton_main.tpl',
      1 => 1360080512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59466602851110bac6f9797-77359047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51110bac7b1532_70691773',
  'variables' => 
  array (
    'site_url' => 0,
    'content_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51110bac7b1532_70691773')) {function content_51110bac7b1532_70691773($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bidzone</title>
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/reset.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/global.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/general.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/layout.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/libraries/ui-lightness/jquery-ui-1.7.2.custom.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/libraries/jquery.countdown.css" />
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/libraries/jquery.bxslider.css" />

<!--[if IE 6]>
<link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
styles/libraries/ie6mustdie.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
scripts/libraries/ie6mustdie.js"></script>
<![endif]-->
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
scripts/libraries/jquery-1.9.0.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
scripts/libraries/jquery-ui-1.10.0.custom.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
scripts/libraries/jquery.countdown.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
scripts/libraries/jquery.bxslider.js"></script>
</head>
<body>
<div id="outer_wrapper">
	<div id="header_wrapper">
    	<div id="header_block">
        	<div id="header_logo"><a href="#"></a></div>
            <div id="header_right">
            
            	<div id="search_block">
                	<input type="text" name="search_input" value="" />
                    <input type="submit" name="search_submit" value=" " />
                </div>
            
            	<div id="login_button" class="header_button">
                	<a href="#">
                    	<p class="button_left"></p>
                        <p class="button_middle"><span class="BPGSquareMtavruli">შესვლა</span></p>
                        <p class="button_right"></p>
                    </a>
                </div>
                
                
            	<div id="language_switcher" class="header_button">
                	<a href="#">
                    	<p class="button_left"></p>
                        <p class="button_middle">ENGLISH</p>
                        <p class="button_right"></p>
                    </a>
                </div>
                <div class="clearer"></div>
                <div id="header_hor_menu" class="shadow_dark BPGSquareMtavruli">
                <ul>
                    <li class="last"><a href="#">დაგვიკავშირდით</a></li>
                    <li><a href="#">ხ.დ.კ.</a></li>
                    <li><a href="#">ჩვენ შესახებ</a></li>
                    <li><a href="#">როგორ მუშაობს</a></li>
                    <li><a href="#">აუქციონები</a></li>
                </ul>
                </div>
            </div>
            <div class="clearer"></div>
            <div id="categories_menu" class="shadow_white">
                <ul>
                    <li><a href="#">მობილური ტელეფონები</a></li>
                    <li class="separetor"></li>
                    <li><a href="#">კომპიუტერული ტექნიკა</a></li>
                    <li class="separetor"></li>
                    <li><a href="#">საყოფაცხოვრებო ტექნიკა</a></li>
                    <li class="separetor"></li>
                    <li class="last"><a href="#">საოფისე და სასკოლო ინვენტარი</a></li>
                </ul>
            </div>
        </div>
        
    </div>
    <div id="header_bg_wrapper">
        <div id="header_bg_left"></div>
        <div id="header_bg_right"></div>
        <div class="clearer"></div>
    </div>
    <div class="clearer"></div>
    <div id="main_wrapper">
    	
    	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
    </div>
    <div class="clearer"></div>
    <div id="footer_wrapper">
    	<div id="footer_arrow"></div>
        <div id="footer_block">
        	<div id="footer_left" class="footer_blocks">
            	<div id="footer_logo"></div>
                <div id="footer_fb"><a href="#"></a></div>
                <div id="footer_twitter"><a href="#"></a></div>
            </div>
            <div id="footer_middle" class="footer_blocks">
            	<div class="bold">BidZone Newsletter</div>
                <div>Be the first to hear about news and offers</div>
            </div>
            <div id="footer_right" class="footer_blocks">
            	<div>
                	Designated trademarks, logos and brands are the property of their respective owners. Use of this web site constitutes acceptance of the uBid.com User Agreement and Privacy Policy.
                </div>
            </div>
            <div class="clearer"></div>
        </div>
        <div id="footer_copyright">
        	<div class="copyright">Copyright © 2012 BidZone.ge  All Rights Reserved</div>
            <div class="created"></div>
            <div class="clearer"></div>
        </div>
        <div class="clearer"></div>
    </div>
    <div class="clearer"></div>
</div>
</body>
</html><?php }} ?>