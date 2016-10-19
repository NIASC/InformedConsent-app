<?php /* Smarty version Smarty-3.1.13, created on 2013-06-21 16:30:17
         compiled from "C:\xampp\htdocs\idea\smarty\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:905251a4d1765444c6-30610519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be416d96850e476ce53b220418071db93e979c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\gallery_list.tpl',
      1 => 1371817814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905251a4d1765444c6-30610519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a4d17692c616_62942305',
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
<?php if ($_valid && !is_callable('content_51a4d17692c616_62942305')) {function content_51a4d17692c616_62942305($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>

<div class="center">
	<div class="container">
    
    <div class="headline"><span class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</span></div>
    
    <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>          
    <div class="gallery <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
        <div class="cover"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
"></div>
        <div class="description"><h5><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</h5></div>
        </a>
    </div>          
    <?php } ?>
    
    <ul class="paging">
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
    
    </div>
</div>
    <?php }} ?>