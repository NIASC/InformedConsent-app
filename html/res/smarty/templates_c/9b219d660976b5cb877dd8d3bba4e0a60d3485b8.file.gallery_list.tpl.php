<?php /* Smarty version Smarty-3.1.13, created on 2015-04-15 17:56:23
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585550c39a00dbfa3-95746031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b219d660976b5cb877dd8d3bba4e0a60d3485b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\gallery_list.tpl',
      1 => 1429106182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585550c39a00dbfa3-95746031',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c39a02708f9_83763044',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c39a02708f9_83763044')) {function content_550c39a02708f9_83763044($_smarty_tpl) {?><div class="container gallery">
    <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <ul class="gallery">
    	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?> 
        <li>
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumbnail_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
"/>
            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</a></h2>
            <div class="date second-font upper"><?php echo $_smarty_tpl->tpl_vars['g']->value['date'];?>
</div>
            <div class="desc"><?php echo $_smarty_tpl->tpl_vars['g']->value['description'];?>
</div>
		</li>          
		<?php } ?>
    </ul>
    <div class="clear"></div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.gallery').offset().top-100
			}, 800);
			
});
</script> 

    
<div class="text_center single non_transparent">
	<ul class="pagination">
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
</div><?php }} ?>