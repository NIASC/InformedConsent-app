<?php /* Smarty version Smarty-3.1.13, created on 2016-07-06 13:12:47
         compiled from "C:\xampp\htdocs\moe.gov.ge\html\themes\default\templates\video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15872577cae562d1868-50371421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de9e071bae75404bbc19a4f37e83e1c63459c49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe.gov.ge\\html\\themes\\default\\templates\\video_gallery.tpl',
      1 => 1467796365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15872577cae562d1868-50371421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_577cae564d0e56_75640030',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'group' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cae564d0e56_75640030')) {function content_577cae564d0e56_75640030($_smarty_tpl) {?><div id="content">
	<div class="container">		
		<h3 class="page-title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_title'];?>
</h3>
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
			<div class="col-lg-4 col-md-6 col-xs-12 thumb">
				<iframe width="100%" height="300" src="http://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['g']->value['video_id'];?>
" frameborder="0" allowfullscreen></iframe><span><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</span><div class="date"><date><i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</date></div>
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
		 <?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>