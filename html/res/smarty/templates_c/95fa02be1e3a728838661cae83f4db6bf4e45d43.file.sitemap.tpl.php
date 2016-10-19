<?php /* Smarty version Smarty-3.1.13, created on 2016-03-18 18:16:59
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1796456ec0c97376aa5-57258870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95fa02be1e3a728838661cae83f4db6bf4e45d43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\sitemap.tpl',
      1 => 1458310616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796456ec0c97376aa5-57258870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56ec0c97652a84_94201092',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'sitemap' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec0c97652a84_94201092')) {function content_56ec0c97652a84_94201092($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h1>
            <div class="content_top">
            	<div class="sitemap">
                	<?php echo $_smarty_tpl->tpl_vars['sitemap']->value;?>

                </div>          
            </div>
            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
</div>
<?php }} ?>