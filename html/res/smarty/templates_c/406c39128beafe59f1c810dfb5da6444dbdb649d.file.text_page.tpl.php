<?php /* Smarty version Smarty-3.1.13, created on 2015-12-23 09:02:21
         compiled from "C:\xampp\htdocs\event42\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2016256682efb73b3d5-26646580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406c39128beafe59f1c810dfb5da6444dbdb649d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\text_page.tpl',
      1 => 1450846538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016256682efb73b3d5-26646580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56682efb8fefa1_58357788',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56682efb8fefa1_58357788')) {function content_56682efb8fefa1_58357788($_smarty_tpl) {?><main role="main">
	<div class="text-page-cover">
    	<div class="cover-image"></div>
    </div>
    <div class="about-us">
        <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    </div>
    <div class="cl-b"></div>
</main><?php }} ?>