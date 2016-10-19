<?php /* Smarty version Smarty-3.1.13, created on 2016-08-20 13:55:19
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/widgets/social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145496549457b8290715a124-78168252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114bc90497177f6ffda8c7bac67d33b053a3311a' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/widgets/social.tpl',
      1 => 1467214561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145496549457b8290715a124-78168252',
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
  'unifunc' => 'content_57b82907183cc7_32689764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b82907183cc7_32689764')) {function content_57b82907183cc7_32689764($_smarty_tpl) {?><p>&nbsp;</p>
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