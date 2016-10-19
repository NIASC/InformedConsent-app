<?php /* Smarty version Smarty-3.1.13, created on 2016-08-20 13:55:18
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139392902157b82907002dd6-31804246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b74afefc05c66ff3ab1950bb4065f4dc6a1da04' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/text_page.tpl',
      1 => 1464163612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139392902157b82907002dd6-31804246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b82907085bd0_92988908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b82907085bd0_92988908')) {function content_57b82907085bd0_92988908($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
		<div class="col-md-9 page-content">
			<div class="col-md-12">
			<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
			<div class="col-md-4">
			<a class="zoom standard_image" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
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