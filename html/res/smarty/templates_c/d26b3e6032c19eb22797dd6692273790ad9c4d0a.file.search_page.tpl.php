<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 16:36:08
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26186554b58722b4ff2-14441747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26b3e6032c19eb22797dd6692273790ad9c4d0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\search_page.tpl',
      1 => 1431002166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26186554b58722b4ff2-14441747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_554b5872487f96_08098377',
  'variables' => 
  array (
    'info_content' => 0,
    'index' => 0,
    'news' => 0,
    'site_url' => 0,
    'site_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b5872487f96_08098377')) {function content_554b5872487f96_08098377($_smarty_tpl) {?><div class="container news-full">

<div class="left"> 
	
    <ul class="news-list">
    	
	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>class="first"<?php }elseif($_smarty_tpl->tpl_vars['index']->value+1==count($_smarty_tpl->tpl_vars['news']->value)){?>class="last"<?php }?>>
        	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h1>    
			<div class="date second-font upper"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
                <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
			</a>
			<?php }?>    
			<div class="desc second-font"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
		</li>
		<?php } ?>
            
	<?php }else{ ?>
    	<li class="text"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</li>            
	<?php }?>
    
	</ul>
</div>


	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
    
    <div class="clear"></div>
</div><?php }} ?>