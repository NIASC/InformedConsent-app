<?php /* Smarty version Smarty-3.1.13, created on 2013-09-26 16:52:05
         compiled from "C:\xampp\htdocs\un\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24077524194da3f2343-28156366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de9610d833533cfb8fc3a6bcea13c6d4c160f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\un\\smarty\\templates\\text_page.tpl',
      1 => 1380199887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24077524194da3f2343-28156366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524194da8b23a8_14439277',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524194da8b23a8_14439277')) {function content_524194da8b23a8_14439277($_smarty_tpl) {?><div class="center_container left">       
		
        <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
</div>
    <?php }} ?>