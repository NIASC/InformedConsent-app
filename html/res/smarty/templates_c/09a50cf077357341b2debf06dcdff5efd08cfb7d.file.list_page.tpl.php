<?php /* Smarty version Smarty-3.1.13, created on 2015-04-15 16:04:20
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23519550c399db9dbe0-83694138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09a50cf077357341b2debf06dcdff5efd08cfb7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\list_page.tpl',
      1 => 1429090608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23519550c399db9dbe0-83694138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c399dd11716_26736116',
  'variables' => 
  array (
    'info_title' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
    'site_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c399dd11716_26736116')) {function content_550c399dd11716_26736116($_smarty_tpl) {?><div class="container board-list">
    <h1><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <ul class="board-list">
        <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
        <li>
            <?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
            <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
" class="transparent"/>
            </a>
            <?php }?>
            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a></h2>
            <div class="position second-font"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['job'];?>
</div>
            <div class="icons-wrap">
            	<a href="#"><i class="icon fb"></i></a>
                <a href="#"><i class="icon twitter"></i></a>
                <a href="#"><i class="icon linked"></i></a>
			</div>
            <div class="desc"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>
</div>
        </li>                 
        <?php } ?>
        <?php }else{ ?>
        <p>
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

        </p>
        <?php }?>
    </ul>
    <div class="clear"></div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.board-list').offset().top-100
			}, 800);
			
});
</script> <?php }} ?>