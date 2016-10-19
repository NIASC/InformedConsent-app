<?php /* Smarty version Smarty-3.1.13, created on 2015-01-22 22:30:01
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\submenu_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24959537b69d562e629-09111809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea649276c35a4d5d02cfa80e98b917caea6e280' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\submenu_page.tpl',
      1 => 1421951399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24959537b69d562e629-09111809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537b69d57305c1_18051480',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info' => 0,
    'index' => 0,
    'site_url' => 0,
    'item' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b69d57305c1_18051480')) {function content_537b69d57305c1_18051480($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
<div class="text_center single">
	<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
<br />
    <?php if ($_smarty_tpl->tpl_vars['info']->value){?>
    <ul class="structure upper">
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
    </ul>
    <?php }?>
    
    <hr class="bottom_rule" />
    <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
    
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>