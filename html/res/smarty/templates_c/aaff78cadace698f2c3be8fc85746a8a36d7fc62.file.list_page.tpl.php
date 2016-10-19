<?php /* Smarty version Smarty-3.1.13, created on 2013-10-29 12:11:34
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29556526e570d873f71-03417267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaff78cadace698f2c3be8fc85746a8a36d7fc62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\list_page.tpl',
      1 => 1383034291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29556526e570d873f71-03417267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e570db0c001_28031093',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e570db0c001_28031093')) {function content_526e570db0c001_28031093($_smarty_tpl) {?><div class="center_container">
	<div class="center">    
		
        <div class="content_wrapper">      
		<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
        <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
        <div class="post_item">
        
			<div class="post_desc list">
            	<h2 class="post_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="list_title">
                		<?php echo $_smarty_tpl->tpl_vars['info_item']->value->title;?>
</a></h2>
                <?php echo $_smarty_tpl->tpl_vars['info_item']->value->description;?>

                
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value->id;?>
" class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
			</div>
			
			<div class="full stroke"></div>
		</div>
        <?php } ?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>

	</div>
</div><?php }} ?>