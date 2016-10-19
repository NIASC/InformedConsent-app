<?php /* Smarty version Smarty-3.1.13, created on 2013-10-11 12:58:15
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13455356375257bda7e5bd32-42646793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '841f0336503ca9eac0e970b054984f2592e7aa05' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/list_page.tpl',
      1 => 1381245682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13455356375257bda7e5bd32-42646793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'info_item' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5257bda7efd162_16110682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257bda7efd162_16110682')) {function content_5257bda7efd162_16110682($_smarty_tpl) {?><div class="center_container">       
		<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
        <div class="news_item">
        
			<div class="news_desc list">
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="list_title">
                		<?php echo $_smarty_tpl->tpl_vars['info_item']->value->title;?>
</a>
                <?php echo $_smarty_tpl->tpl_vars['info_item']->value->description;?>

                
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="read_more"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
			</div>
			
			<div class="full stroke"></div>
		</div>
        <?php } ?>
</div><?php }} ?>