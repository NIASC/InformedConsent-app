<?php /* Smarty version Smarty-3.1.13, created on 2013-10-22 16:23:43
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/skeleton_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10367255735254f9337db1f3-76462538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4bd0acfa5bbf6f733ad0d60b4d47e9a9ef9b4ec' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/skeleton_main.tpl',
      1 => 1382444606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10367255735254f9337db1f3-76462538',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5254f93395a547_37842819',
  'variables' => 
  array (
    'site_url' => 0,
    'og_array' => 0,
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'top_menu' => 0,
    'left_menu' => 0,
    'sidebar_agencies' => 0,
    'info' => 0,
    'content_file' => 0,
    'right_menu' => 0,
    'sidebar_publications' => 0,
    'publication' => 0,
    'sidebar_events' => 0,
    'event' => 0,
    'footer_menu' => 0,
    'menu' => 0,
    'partners' => 0,
    'partner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254f93395a547_37842819')) {function content_5254f93395a547_37842819($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
" />
<meta name="author" content="idea design group, temo surguladze" />

<!-- Required CSS -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />

<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/favicon.ico" type="image/x-icon" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/print.css" rel="stylesheet" type="text/css" media="print"/>

<script type="text/javascript" src="js/jwplayer.js"></script>

<title><?php echo $_smarty_tpl->tpl_vars['og_array']->value['title'];?>
</title>

    

	

</head>

<body>
<div class="full" align="center">
	<div class="header">
		<div class="center head_center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
img/logo.png" alt="idea design group" /></a>
            <div class="header_mid <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
</div>
        	<div class="lang_nav">                
                <ul class="lang right">
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['language']=='geo'){?>
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">Georgian</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_eng'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">English</a></li>
                <?php }else{ ?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
geo/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug_geo'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">Georgian</a></li>
                    <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
eng/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
">English</a></li>
                <?php }?>
                </ul> 
            </div>           
            <div class="searchform">
            	<form name="search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/search">
                    <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" name="que" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="search-query"/>
                    <input type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" class="search_button <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"/>
				</form>
            </div>
        </div>
    </div>
    
    <div class="full menu_bg" align="center">
        <div class="center <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<div class="menu_wrapper">
        	<?php echo $_smarty_tpl->tpl_vars['top_menu']->value;?>

            </div>
        </div>
    </div>
    
    <div class="center <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
    	<div class="center_wrapper">
        
    	<div class="left_sidebar">
        	<?php echo $_smarty_tpl->tpl_vars['left_menu']->value;?>

            
            <div class="agencies">
				<span class="agenci_title">
                     <label>
                        <select class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                            <option selected="selected"><?php echo $_smarty_tpl->tpl_vars['language']->value['agencies'];?>
</option>
                            <option>UNDP</option>
                            <option>UNHCR</option>
                            <option>UNICEF</option>
                            <option>WHO</option>
                            <option>UNFPA</option>
                            <option>FAO</option>
                            <option>UNODC</option>
                            <option>IOM</option>
                            <option>UN Women</option>
                            <option>OHCHR</option>
                            <option>UN DPI</option>
                        </select>
                    </label>​
				</span>     
                
                <div class="ns_box ns_sky-light">
                	<ul id="quotes">
                    	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_agencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                        <li class="textItem">
                        	<table><tr><td><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
"/></td></tr></table>
                            <p class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</p>
                        </li>
                        <?php } ?>
					</ul>
         		</div> 
                          
            </div>     
            
            <div class="social">
            	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['follow_us'];?>
:</span>
                <ul>
                	<li class="facebook"><a href="#"></a><p>Facebook</p></li>
                    <li class="youtube"><a href="#"></a><p>Youtube</p></li>
                    <li class="twitter"><a href="#"></a><p>Twitter</p></li>
                    <li class="linkedin"><a href="#"></a><p>Linkedin</p></li>
                </ul>
                <div class="clr_footer"></div>
            </div> 
                  
        </div>
        
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    	<div class="right_sidebar">
        	<?php echo $_smarty_tpl->tpl_vars['right_menu']->value;?>
            
            <div class="publication">
            	<span class="title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['latest_publication'];?>
</span>
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['publication'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['publication']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_publications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['publication']->key => $_smarty_tpl->tpl_vars['publication']->value){
$_smarty_tpl->tpl_vars['publication']->_loop = true;
?>
                	<li>
                    	<?php if ($_smarty_tpl->tpl_vars['publication']->value['thumbnail']){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['publication']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['publication']->value['id'];?>
">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['publication']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['publication']->value['title'];?>
"/>
                        </a>
                        <?php }else{ ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['publication']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['publication']->value['id'];?>
">
                        <img src="img/publication.png" alt="<?php echo $_smarty_tpl->tpl_vars['publication']->value['title'];?>
"/>
                        </a>
                        <?php }?>
                    	<h1 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['publication']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['publication']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['publication']->value['title'];?>
</a></h1>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            
            <div class="standard">
            	<span class="title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['calendar'];?>
</span>
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                	<li>
                    	<div class="date <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['event']->value['date']['day'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['month'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['date']['year'];?>
</div>
                        
                        <h2 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['title'];?>
</a></h2>
                        
                        <p><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</p>
                    </li>
                    <?php } ?>
                    
                    <li class="more">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['event']->value['section_slug'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['more_events'];?>
</a>
					</li>
                    
                </ul>
            </div>
                 
        </div>
        </div>
        
    </div>
    
    <div class="footer">
    	<div class="center">
        
            <div class="menu <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                <ul>
                	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['menu']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
        
            <div class="partners">
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
            
            <div class="copyright <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                <span><?php echo $_smarty_tpl->tpl_vars['language']->value['website_copyright'];?>
</span>
                <span><?php echo $_smarty_tpl->tpl_vars['language']->value['created_by'];?>
</span>
            </div>
                        
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scripts.js"></script>

</body>
</html>
<?php }} ?>