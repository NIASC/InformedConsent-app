<?php /* Smarty version Smarty-3.1.13, created on 2013-10-15 15:19:38
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6984635835257ce37179e65-73584914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a136ec3acaf2e632583ddf432e8f608a58d01c0' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/search_page.tpl',
      1 => 1381835922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6984635835257ce37179e65-73584914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5257ce37204f28_83836652',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257ce37204f28_83836652')) {function content_5257ce37204f28_83836652($_smarty_tpl) {?><div class="center_container left">  
		<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['search_query'];?>
: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"</h1>
	
		<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
		
		<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
	    <article class="news_item">
        	<h2 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a></h2>
            <div><?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>
</div>	    	
	    </article><hr />
	    
	    <?php } ?>
		
		<?php }else{ ?>
		
		<div class="text">
			<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
		
		<?php }?>
		
</div><?php }} ?>