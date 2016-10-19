<?php /* Smarty version Smarty-3.1.13, created on 2013-06-21 17:26:19
         compiled from "C:\xampp\htdocs\idea\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2065951a4d17deeccd2-77781333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6818dbbff707fc7a165546a3a095370a406b54fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\gallery.tpl',
      1 => 1371821177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2065951a4d17deeccd2-77781333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a4d17e0deb98_74664269',
  'variables' => 
  array (
    'site_data' => 0,
    'gall_title' => 0,
    'gall_desc' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a4d17e0deb98_74664269')) {function content_51a4d17e0deb98_74664269($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>

<div class="center">
	<div class="container">
    
    <div class="headline"><span class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</span></div>
    
    <h4 class="gall_title"><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h4>
    <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['gall_desc']->value;?>
</span>
    
    <div class="full"></div>
    
    <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
    
		<div class="gall_thumb">
        	<a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="" />
            </a>
		</div>       
	<?php } ?> 
    
    </div>   
</div><?php }} ?>