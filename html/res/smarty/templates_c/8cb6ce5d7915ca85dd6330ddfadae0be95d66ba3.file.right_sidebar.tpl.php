<?php /* Smarty version Smarty-3.1.13, created on 2013-12-06 19:05:50
         compiled from "C:\xampp\htdocs\aig\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225515295c39d60a052-49831036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb6ce5d7915ca85dd6330ddfadae0be95d66ba3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\right_sidebar.tpl',
      1 => 1386342348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225515295c39d60a052-49831036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295c39d7e1e09_50992125',
  'variables' => 
  array (
    'sidebar_news_block' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'post' => 0,
    'language' => 0,
    'right_banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295c39d7e1e09_50992125')) {function content_5295c39d7e1e09_50992125($_smarty_tpl) {?><div class="right_sidebar">
	
    <?php if ($_smarty_tpl->tpl_vars['sidebar_news_block']->value){?>
    <div class="news_area">
    	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <article class="post">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
        	<img src="images/small_<?php echo $_smarty_tpl->tpl_vars['post']->value->thumbnail;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
"/>
            </a>
        	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->section_slug;?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</a></h2>        
        </article>
        <?php } ?>
    </div>
    <?php }?>
	
    <div class="sidebar_banners">
	<h2 class="title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['sponsors'];?>
:</h2>
	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
	<?php } ?>
    </div>
</div><?php }} ?>