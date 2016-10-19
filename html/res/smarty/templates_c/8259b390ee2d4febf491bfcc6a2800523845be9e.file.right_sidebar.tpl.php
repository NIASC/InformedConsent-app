<?php /* Smarty version Smarty-3.1.13, created on 2015-05-14 20:52:07
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202155551dc212a2567-99359460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8259b390ee2d4febf491bfcc6a2800523845be9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\right_sidebar.tpl',
      1 => 1431622324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202155551dc212a2567-99359460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551dc2145f038_26034272',
  'variables' => 
  array (
    'language' => 0,
    'banner2' => 0,
    'item' => 0,
    'latest_news' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551dc2145f038_26034272')) {function content_5551dc2145f038_26034272($_smarty_tpl) {?><div class="right">
	
    <h1 class="upper right" style="margin:-40px 0 0;"><?php echo $_smarty_tpl->tpl_vars['language']->value['partner_countries'];?>
</h1>
        <ul class="countries upper">
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="cover" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
"/></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
</a>
            </li>
            <?php } ?>
        </ul>

        <h1 class="upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['latest_news'];?>
</h1>
        <ul class="latest-news-sidebar upper">
        	<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></li>
            <?php } ?>
        </ul>
</div><?php }} ?>