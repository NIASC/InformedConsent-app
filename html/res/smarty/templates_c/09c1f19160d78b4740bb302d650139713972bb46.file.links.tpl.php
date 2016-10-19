<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 14:38:23
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255755551faffb08c28-43409272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c1f19160d78b4740bb302d650139713972bb46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\links.tpl',
      1 => 1431436659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255755551faffb08c28-43409272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551faffd328f6_10559822',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551faffd328f6_10559822')) {function content_5551faffd328f6_10559822($_smarty_tpl) {?><div class="center-wrap main second-font">

    <div class="clear"></div>
</div>
<div class="center-wrap partners second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
        <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        <ul class="partners-list">
        	<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
            <li>
                <div class="image"><img src="images/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
"/></div>
                <div class="right-desc">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['url'];?>
" target="_blank" class="upper"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                </div>
            </li>
            <?php } ?>
        </ul> 
        <?php }else{ ?>
        <p>
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

        </p>       
        <?php }?>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <div class="clear"></div>
</div>
    
<?php }} ?>