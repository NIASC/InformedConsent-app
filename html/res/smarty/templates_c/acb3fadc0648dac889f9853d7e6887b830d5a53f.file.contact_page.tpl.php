<?php /* Smarty version Smarty-3.1.13, created on 2013-10-15 13:02:49
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74139802525d036dc24652-63962941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb3fadc0648dac889f9853d7e6887b830d5a53f' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/contact_page.tpl',
      1 => 1381827766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74139802525d036dc24652-63962941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525d036dc916f3_86805559',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525d036dc916f3_86805559')) {function content_525d036dc916f3_86805559($_smarty_tpl) {?><div class="center_container left">  

	<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

	<span class="contact_text">
		<hr  />
		<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		<hr  />
	</span>
             
</div><?php }} ?>