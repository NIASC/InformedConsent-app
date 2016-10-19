<?php /* Smarty version Smarty-3.1.13, created on 2014-05-29 15:15:45
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27543537cc1f6f23cb1-96195568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632f03b502d56d724a222fdadf025fd6135bbc48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\list_page.tpl',
      1 => 1401361023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27543537cc1f6f23cb1-96195568',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537cc1f71d3299_34704071',
  'variables' => 
  array (
    'info_title' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_data' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537cc1f71d3299_34704071')) {function content_537cc1f71d3299_34704071($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<br /><br /></h1>
<div class="text_center single">
    <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
    <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
    <div class="post_item">
    	
        <?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" width="121" height="89" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
"/>
        <?php }?>
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
        
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>