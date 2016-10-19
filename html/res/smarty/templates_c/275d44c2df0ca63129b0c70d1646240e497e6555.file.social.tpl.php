<?php /* Smarty version Smarty-3.1.13, created on 2016-05-23 18:30:56
         compiled from "C:\xampp\htdocs\moe\smarty\templates\widgets\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31782573db189ea44b8-97109769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '275d44c2df0ca63129b0c70d1646240e497e6555' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\widgets\\social.tpl',
      1 => 1464004549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31782573db189ea44b8-97109769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_573db189ee8e11_12634930',
  'variables' => 
  array (
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573db189ee8e11_12634930')) {function content_573db189ee8e11_12634930($_smarty_tpl) {?><div class="social">	
	<div class="fb-share-button" data-href="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['site_data']->value['slug_END']){?>/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['slug_END'];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" data-layout="button_count" data-mobile-iframe="true"></div>
</div><?php }} ?>