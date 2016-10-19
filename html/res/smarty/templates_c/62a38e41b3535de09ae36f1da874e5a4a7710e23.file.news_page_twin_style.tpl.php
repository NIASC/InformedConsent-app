<?php /* Smarty version Smarty-3.1.13, created on 2014-05-23 15:15:37
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\news_page_twin_style.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22795537f108641a764-92246459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a38e41b3535de09ae36f1da874e5a4a7710e23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\news_page_twin_style.tpl',
      1 => 1400843734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22795537f108641a764-92246459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537f108688c8e4_36904480',
  'variables' => 
  array (
    'info_title' => 0,
    'info_content' => 0,
    'i' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'language' => 0,
    'j' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f108688c8e4_36904480')) {function content_537f108688c8e4_36904480($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
<div class="text_center">
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<ceil(count($_smarty_tpl->tpl_vars['info_content']->value)/2)){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<ceil(count($_smarty_tpl->tpl_vars['info_content']->value)/2); $_smarty_tpl->tpl_vars['i']->value++){
?>
            <article>
                <h3 class="post_title upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['title'];?>
</a></h3>
                
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['start_date'];?>
 / </span>
                <a class="read_more upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['i']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
</a>
            </article>
            <?php }} ?>
            <?php }?>
            
        
        <div class="col_separator"></div>
        
        <div class="col_2 twin_style">
        	<br /><br />
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value;
  if ($_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['info_content']->value)){ for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value<count($_smarty_tpl->tpl_vars['info_content']->value); $_smarty_tpl->tpl_vars['j']->value++){
?>
            <article>
                <h3 class="post_title upper">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</a>
                </h3>                
                <a class="read_more upper" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_content']->value[$_smarty_tpl->tpl_vars['j']->value]['info_slug'];?>
">
                	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>

                </a>
            </article>
            <?php }} ?>
            <?php }?>            
        </div>
</div>
        <ul class="pagination">
        	<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
           		<?php if ($_smarty_tpl->tpl_vars['page']->value=='<<'){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }elseif($_smarty_tpl->tpl_vars['page']->value=='>>'){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value['lastpage'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }elseif($_smarty_tpl->tpl_vars['pages']->value['current_page']==$_smarty_tpl->tpl_vars['page']->value){?>
			<li><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }else{ ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?<?php echo $_smarty_tpl->tpl_vars['pages']->value['current_url'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
				<?php }?>
			<?php } ?>
		</ul>
        
    <?php }} ?>