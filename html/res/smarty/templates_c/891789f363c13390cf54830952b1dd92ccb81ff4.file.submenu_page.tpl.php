<?php /* Smarty version Smarty-3.1.13, created on 2015-05-15 11:15:05
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\submenu_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306215551f67ee02b26-39731849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '891789f363c13390cf54830952b1dd92ccb81ff4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\submenu_page.tpl',
      1 => 1431674101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306215551f67ee02b26-39731849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551f67f018216_67860098',
  'variables' => 
  array (
    'site_data' => 0,
    'info' => 0,
    'index' => 0,
    'site_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551f67f018216_67860098')) {function content_5551f67f018216_67860098($_smarty_tpl) {?><div class="center-wrap main second-font">
	<div class="clear"></div>
</div>
<div class="center-wrap about second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <?php if (($_smarty_tpl->tpl_vars['index']->value+1)%3==0){?>
        <li class="extreme"><h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></h2></li>
        <?php }else{ ?>
        <li><h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></h2></li>
        <?php }?>
        <?php } ?>
    </div>   

    <!-- RIGHT-->
    
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- END RIGHT -->
    </div>
    <div class="clear"></div>
</div><?php }} ?>