<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 13:44:56
         compiled from "C:\xampp\htdocs\idea\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2334451a32fbc7c99d6-69126571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b4a5a3060b5546ad170d5d41423d5aa9563de1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\text_page.tpl',
      1 => 1372238377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2334451a32fbc7c99d6-69126571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a32fbc84d526_59710007',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'info_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a32fbc84d526_59710007')) {function content_51a32fbc84d526_59710007($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>
    
<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1></div>
        
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
        <div class="right_widget">
        	<?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
  

        </div>
        
	</div>
</div>
    <?php }} ?>