<?php /* Smarty version Smarty-3.1.13, created on 2015-04-15 16:31:05
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4176550c3998e603a7-33681651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e753a7dbd2da6449ac55b98b9b18047e0b7dce9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\news_page.tpl',
      1 => 1429101048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4176550c3998e603a7-33681651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c39991a5250_48905841',
  'variables' => 
  array (
    'info_content' => 0,
    'index' => 0,
    'news' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c39991a5250_48905841')) {function content_550c39991a5250_48905841($_smarty_tpl) {?><div class="container news-full">
    <!-- LEFT -->

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
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h1>    
                <div class="date second-font upper"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
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
            <?php }?>
        </ul>
    </div>

    <!-- END LEFT -->

    <!-- RIGHT-->
    
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    

    <!-- END RIGHT -->

    <div class="clear"></div>

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
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.news-full').offset().top-100
			}, 800);
			
});
</script> 
            
            
        
    <?php }} ?>