<?php /* Smarty version Smarty-3.1.13, created on 2014-07-04 17:16:14
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\widgets\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3021953b6a91e7750e0-02044311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3afc29eb67c4acfaa58e438e1b7f4bd8ec3c984' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\widgets\\social.tpl',
      1 => 1404479759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3021953b6a91e7750e0-02044311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'sectionData' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b6a91e7b5a61_55746895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b6a91e7b5a61_55746895')) {function content_53b6a91e7b5a61_55746895($_smarty_tpl) {?>
    <ul class="social_action">
        <li class="fb"><div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
<?php if ($_smarty_tpl->tpl_vars['sectionData']->value['info_slug']){?>/<?php echo $_smarty_tpl->tpl_vars['sectionData']->value['info_slug'][$_smarty_tpl->tpl_vars['item']->value];?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['dirty_url'];?>
" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
	</ul><?php }} ?>