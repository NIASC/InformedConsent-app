<?php /* Smarty version Smarty-3.1.13, created on 2016-03-24 11:34:26
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2196756f2c4988d6e97-08840815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77614f59d150b2e69cea498b435fb0245042c309' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\search_page.tpl',
      1 => 1458804864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2196756f2c4988d6e97-08840815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56f2c498e8a0b4_53226994',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f2c498e8a0b4_53226994')) {function content_56f2c498e8a0b4_53226994($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h1>
            <div class="content_top">
            	<ul class="search-results">
                    <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
                    <li>
                        <div class="title upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></div>
                        <div class="category"><?php echo $_smarty_tpl->tpl_vars['news']->value['section_name'];?>
</div>
                        <div class="text"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
                    </li>
                    <?php } ?>          
                    <?php }?>
                </ul>    
            </div>
            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
</div><?php }} ?>