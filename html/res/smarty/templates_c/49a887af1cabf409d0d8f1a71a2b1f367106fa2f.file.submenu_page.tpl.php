<?php /* Smarty version Smarty-3.1.13, created on 2014-04-28 17:18:31
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\submenu_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17727535e4f9faddb97-81794555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a887af1cabf409d0d8f1a71a2b1f367106fa2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\submenu_page.tpl',
      1 => 1398691046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17727535e4f9faddb97-81794555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535e4f9fc6d503_02867290',
  'variables' => 
  array (
    'site_data' => 0,
    'info' => 0,
    'site_url' => 0,
    'item' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e4f9fc6d503_02867290')) {function content_535e4f9fc6d503_02867290($_smarty_tpl) {?>

        <div class="content_wrapper">
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <div class="text_center">
            	<?php if ($_smarty_tpl->tpl_vars['info']->value){?>
            	<ul class="structure">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</a></li>
                <?php } ?>
                </ul>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
        </div><?php }} ?>