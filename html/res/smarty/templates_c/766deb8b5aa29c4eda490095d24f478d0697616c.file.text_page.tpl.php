<?php /* Smarty version Smarty-3.1.13, created on 2016-05-23 18:30:56
         compiled from "C:\xampp\htdocs\moe\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18567571f2653340b19-89170484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766deb8b5aa29c4eda490095d24f478d0697616c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\text_page.tpl',
      1 => 1463661001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18567571f2653340b19-89170484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571f26535f3b74_04509750',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f26535f3b74_04509750')) {function content_571f26535f3b74_04509750($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
		<div class="col-md-9 page-content">
			<div class="col-md-12">
			<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
			<div class="col-md-4">
			<a class="zoom standard_image" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
			</a>
			</div>
			<div class="col-md-8">
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

			</div>
			<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

			<?php }?>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php }} ?>