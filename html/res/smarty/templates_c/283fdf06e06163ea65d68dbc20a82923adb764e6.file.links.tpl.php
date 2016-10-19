<?php /* Smarty version Smarty-3.1.13, created on 2015-01-26 17:04:09
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1390554c211a3d2bf87-50971979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283fdf06e06163ea65d68dbc20a82923adb764e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\links.tpl',
      1 => 1422277448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1390554c211a3d2bf87-50971979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c211a41f1514_20153944',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'info_item' => 0,
    'sub_infos' => 0,
    'item' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c211a41f1514_20153944')) {function content_54c211a41f1514_20153944($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<br /><br /></h1>
<div class="text_center single">
    <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
    <div class="post_item">
    
        <h2 class="post_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
" class="list_title"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
		</h2>
        <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                
	</div>
	<?php } ?>
    <?php }else{ ?>
    <p>
    <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    </p>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['sub_infos']->value){?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['infos']){?>
    <div class="grey_widget">
        <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['section']->name;?>
</h2>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <li>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
</a><br />
                <?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>

            </li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>
    <?php } ?>
    <?php }?>
        
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>