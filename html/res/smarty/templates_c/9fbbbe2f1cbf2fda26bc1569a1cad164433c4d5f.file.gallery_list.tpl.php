<?php /* Smarty version Smarty-3.1.13, created on 2016-08-16 13:23:41
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2959757b2db9d758aa0-86789548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbbbe2f1cbf2fda26bc1569a1cad164433c4d5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\gallery_list.tpl',
      1 => 1464342034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959757b2db9d758aa0-86789548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b2db9d8b7167_33617035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b2db9d8b7167_33617035')) {function content_57b2db9d8b7167_33617035($_smarty_tpl) {?><div id="content">
	<div class="container">		
		<h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h3>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
				<a class="thumbnail" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
					<img class="img-responsive" src="res/images/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
					<span><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</span>
					<div class="date"><date><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</date></div> 
				</a>
			</div>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
			<ul class="pagination-list">
			<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
				<li><a class="shadow active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
			<?php }else{ ?>
				<li><a class="shadow" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
			<?php }?>
			<?php } ?>
			</ul>
			<?php }?>
       	 </div>
    </div>
</div><?php }} ?>