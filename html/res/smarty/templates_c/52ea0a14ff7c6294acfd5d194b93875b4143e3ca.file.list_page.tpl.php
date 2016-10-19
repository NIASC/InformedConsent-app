<?php /* Smarty version Smarty-3.1.13, created on 2014-02-19 12:56:24
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121633281530471b8909ca1-63389569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ea0a14ff7c6294acfd5d194b93875b4143e3ca' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/list_page.tpl',
      1 => 1392633782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121633281530471b8909ca1-63389569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530471b8a4c381_78273834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530471b8a4c381_78273834')) {function content_530471b8a4c381_78273834($_smarty_tpl) {?>
        <div class="content_wrapper">      
		<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
        
        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
        <div class="list_item">
        
        	<?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
            <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
"/>
            <?php }?>
            <h2 class="post_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
              	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
" class="list_title">
            	<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
            </h2>
            <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                
		</div>
        <?php } ?>
        
        </div>
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?><?php }} ?>