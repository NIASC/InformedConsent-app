<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 13:45:13
         compiled from "C:\xampp\htdocs\idea\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2385451a32fc1dcbe61-17409792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76d80274ec2d498fddda54634bbd948c0d2604ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\list_page.tpl',
      1 => 1372238341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2385451a32fc1dcbe61-17409792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a32fc1ecc850_06223588',
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
<?php if ($_valid && !is_callable('content_51a32fc1ecc850_06223588')) {function content_51a32fc1ecc850_06223588($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>

<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1></div>
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
	</div>
</div><?php }} ?>