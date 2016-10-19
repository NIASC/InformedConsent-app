<?php /* Smarty version Smarty-3.1.13, created on 2016-08-16 13:23:43
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\widgets\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:656857b2db9f381a61-76238922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c8d2a10da09f6c7fc4b51d347d43606cb59bcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\widgets\\social.tpl',
      1 => 1467214561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '656857b2db9f381a61-76238922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b2db9f3da4d4_25354671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b2db9f3da4d4_25354671')) {function content_57b2db9f3da4d4_25354671($_smarty_tpl) {?><p>&nbsp;</p>
<p>&nbsp;</p>
<div class="social">	
	<div class="fb-share-button" data-href="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" data-layout="button_count" data-mobile-iframe="true"></div>
</div><?php }} ?>