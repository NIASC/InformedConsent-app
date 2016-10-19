<?php /* Smarty version Smarty-3.1.13, created on 2015-12-15 12:21:13
         compiled from "C:\xampp\htdocs\event42\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25792566fcd79c6da09-07525384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615a154b2dfa30f7ea896b86e04a8f86a7178e2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\news_page.tpl',
      1 => 1448459576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25792566fcd79c6da09-07525384',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_566fcd7a2c3df1_41646523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fcd7a2c3df1_41646523')) {function content_566fcd7a2c3df1_41646523($_smarty_tpl) {?><div class="center-wrap main second-font">
    <div class="clear"></div>&nbsp;
</div>
<div class="content-long left">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
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
                <div class="image left">
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
                    <h2 class="name"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h2>
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
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
            
            
        
    <?php }} ?>