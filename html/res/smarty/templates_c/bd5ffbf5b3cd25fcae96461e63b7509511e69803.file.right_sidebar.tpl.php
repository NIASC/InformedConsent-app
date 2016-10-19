<?php /* Smarty version Smarty-3.1.13, created on 2015-02-03 18:31:42
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22365537ca038a48ed6-67003754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5ffbf5b3cd25fcae96461e63b7509511e69803' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\right_sidebar.tpl',
      1 => 1422625611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22365537ca038a48ed6-67003754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537ca038a817e8_91970100',
  'variables' => 
  array (
    'site_data' => 0,
    'right_banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537ca038a817e8_91970100')) {function content_537ca038a817e8_91970100($_smarty_tpl) {?><div class="right_sidebar"> 
    
    <div id="calendar"></div>
	
    <div class="sidebar_banners">
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
	<?php } ?>
    <?php }else{ ?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['right_banners']->value[0]['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['right_banners']->value[0]['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['right_banners']->value[0]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
    <?php }?>
    </div>
</div>
<script type="application/javascript" src="js/cal.js"></script><?php }} ?>