<?php /* Smarty version Smarty-3.1.13, created on 2016-05-03 22:04:25
         compiled from "C:\xampp\htdocs\moe\smarty\templates\publications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267485728e5a5966117-17226392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba189485512739b179f7c826dbfae49ef0269a51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\publications.tpl',
      1 => 1462298473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267485728e5a5966117-17226392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5728e5a5ca7969_33334758',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5728e5a5ca7969_33334758')) {function content_5728e5a5ca7969_33334758($_smarty_tpl) {?><div id="content">
	<div class="container"> 
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="col-md-9 page-content">
        <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        	<ul class="popular-product">
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
				<li><?php if ($_smarty_tpl->tpl_vars['info_item']->value['file_url']){?>
					<a <?php if ($_smarty_tpl->tpl_vars['info_item']->value['file_url']){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/docs/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['file_url'];?>
"<?php }?> target="_blank">
						<img src="images/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['file_type'];?>
.png" alt="" />
						<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
                        <?php }else{ ?>
						<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
                        <?php }?>
					</a>
				</li>
			<?php } ?>
			</ul>			
		<?php }?>
        <ul class="pagination-list">
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value=='<<'){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['page']->value=='>>'){?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value['lastpage'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['pages']->value['current_page']==$_smarty_tpl->tpl_vars['page']->value){?>
        <li><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }else{ ?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }?>
        <?php } ?>
		</ul>
		</div>
		<!-- End content -->				
		<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div><?php }} ?>