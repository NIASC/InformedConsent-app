<?php /* Smarty version Smarty-3.1.13, created on 2013-05-27 15:06:37
         compiled from "C:\xampp\htdocs\idea\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303051a33e3dd64e38-52391817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cecd0911a44ff8c1059363aac39f0686ac359d46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\search_page.tpl',
      1 => 1366888123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303051a33e3dd64e38-52391817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_title' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a33e3de5a169_83069807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a33e3de5a169_83069807')) {function content_51a33e3de5a169_83069807($_smarty_tpl) {?><div id="middle">
	<div class="content">
		<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h3>
	
		<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
		
		<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
	    <div class="list">
			<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
">
				<h3><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h3>
	            <div><?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>
</div>
	    	</a>
	    </div>
	    
	    <?php } ?>
		
		<?php }else{ ?>
		
		<div class="text">
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
		
		<?php }?>
		
    	</div>
</div><?php }} ?>