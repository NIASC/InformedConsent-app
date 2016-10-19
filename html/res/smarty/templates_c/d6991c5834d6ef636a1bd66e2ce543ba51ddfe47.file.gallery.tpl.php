<?php /* Smarty version Smarty-3.1.13, created on 2016-05-19 20:35:17
         compiled from "C:\xampp\htdocs\moe\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24409573deb45083563-43870730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6991c5834d6ef636a1bd66e2ce543ba51ddfe47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\gallery.tpl',
      1 => 1463661082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24409573deb45083563-43870730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gall_title' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_573deb45146939_12054521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573deb45146939_12054521')) {function content_573deb45146939_12054521($_smarty_tpl) {?><div id="content">
	<div class="container">		
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h3>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="zoom" href="uploads/files/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
">
					<img class="img-responsive" src="uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
" />
				</a>
			</div>
			<?php } ?>
       	 </div>
		 <?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>