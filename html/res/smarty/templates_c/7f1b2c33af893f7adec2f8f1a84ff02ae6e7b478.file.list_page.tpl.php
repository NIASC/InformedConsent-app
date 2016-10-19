<?php /* Smarty version Smarty-3.1.13, created on 2016-05-02 18:24:05
         compiled from "C:\xampp\htdocs\moe\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2209457275e950bc223-55302530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1b2c33af893f7adec2f8f1a84ff02ae6e7b478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\list_page.tpl',
      1 => 1462198590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2209457275e950bc223-55302530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57275e9528c334_51936338',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57275e9528c334_51936338')) {function content_57275e9528c334_51936338($_smarty_tpl) {?><div id="content">
	<div class="container"> 
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="col-md-9 page-content">
			<div class="col-md-12 page-content">
               	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>  
				<div class="shop-widget">
					<ul class="category-shop-list">
                        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['info_item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
 $_smarty_tpl->tpl_vars['info_item']->iteration++;
?>
						<li>
							<a class="accordion-link <?php if ($_smarty_tpl->tpl_vars['info_item']->iteration==1){?>active<?php }?>" href="#"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
							<ul class="accordion-list-content <?php if ($_smarty_tpl->tpl_vars['info_item']->iteration==1){?>collapse in<?php }?>"><span ><?php echo $_smarty_tpl->tpl_vars['info_item']->value['content'];?>
</span>
							</ul>
						</li>
                        <?php } ?>
					</ul>
				</div>			
				<?php }?>
			</div>
		</div>
		<!-- End content -->				
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>