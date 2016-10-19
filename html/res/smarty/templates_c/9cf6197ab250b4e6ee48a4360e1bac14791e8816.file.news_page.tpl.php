<?php /* Smarty version Smarty-3.1.13, created on 2016-05-04 21:36:56
         compiled from "C:\xampp\htdocs\moe\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26914571f4ba3d8fc98-90724897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf6197ab250b4e6ee48a4360e1bac14791e8816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\news_page.tpl',
      1 => 1462198323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26914571f4ba3d8fc98-90724897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571f4ba3f22f25_34373081',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'news' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571f4ba3f22f25_34373081')) {function content_571f4ba3f22f25_34373081($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'smarty/libs/plugins\\modifier.replace.php';
?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="col-md-9 page-content">
			
			<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>  
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
			<div class="col-md-6" style="padding: 0;">
				<div class="item news-item">
					<div class="inner-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                        <img src="uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['news']->value['title'],'"','');?>
"/>
                        <?php }else{ ?>
                        <img src="images/no-image.jpg" alt="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['news']->value['title'],'"','');?>
"/>
                        <?php }?>
						</a>
						<div class="hover-item">
							<ul><li><a class="date" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
								<i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>

							</a>
							</li></ul>
						</div>
					</div>
					<h5><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h5>
					<p><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</a></p>
				</div>
			</div>
            <?php } ?>        
            <?php }?>
		<div>				
			
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
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div><?php }} ?>