<?php /* Smarty version Smarty-3.1.13, created on 2016-06-29 19:36:07
         compiled from "C:\xampp\htdocs\moe.gov.ge\html\themes\default\templates\widgets\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317915745684a724803-68632406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae02b4fb7dedfc1d1d88c5362834494f0bd0077' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe.gov.ge\\html\\themes\\default\\templates\\widgets\\social.tpl',
      1 => 1467214561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317915745684a724803-68632406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5745684a75f291_91086788',
  'variables' => 
  array (
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745684a75f291_91086788')) {function content_5745684a75f291_91086788($_smarty_tpl) {?><p>&nbsp;</p>
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