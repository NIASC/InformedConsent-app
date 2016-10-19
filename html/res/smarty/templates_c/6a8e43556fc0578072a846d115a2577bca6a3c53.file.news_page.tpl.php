<?php /* Smarty version Smarty-3.1.13, created on 2015-05-18 20:13:42
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44525551dc26352d45-07396101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8e43556fc0578072a846d115a2577bca6a3c53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\news_page.tpl',
      1 => 1431952736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44525551dc26352d45-07396101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551dc265cc6a5_52093304',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'index' => 0,
    'news' => 0,
    'site_url' => 0,
    'language' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551dc265cc6a5_52093304')) {function content_5551dc265cc6a5_52093304($_smarty_tpl) {?><div class="center-wrap main second-font">

    <div class="clear"></div>
</div>
<div class="center-wrap news second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
    	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>        
        <ul class="news">
        <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
       		<li <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>class="first"<?php }elseif($_smarty_tpl->tpl_vars['index']->value+1==count($_smarty_tpl->tpl_vars['news']->value)){?>class="last"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <div class="poster">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
                    	<img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
">
                    </a>
                </div>
                <?php }?>
                <div class="desc">
                    <h1 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h1>
                    <div class="date upper"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</div>
                    <div class="text"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
..</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
		<?php } ?>
        </ul>            
		<?php }?>
    </div>
    <!-- RIGHT-->
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
    <!-- END RIGHT -->
    </div>
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
            
            
        
    <?php }} ?>