<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 17:00:24
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\publications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1003755532aa532d9e0-40323688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6c733beb7a04f41687fc510d1469724b60702f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\publications.tpl',
      1 => 1431522019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003755532aa532d9e0-40323688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55532aa54d38c1_25038141',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'news' => 0,
    'site_url' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532aa54d38c1_25038141')) {function content_55532aa54d38c1_25038141($_smarty_tpl) {?><div class="center-wrap main second-font">
    <div class="clear"></div>
</div>
<div class="center-wrap publications second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
    	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
        <ul class="publication-list">
            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
            <li>
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <div class="image">
                	<a href="<?php if ($_smarty_tpl->tpl_vars['news']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/files/<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
<?php }?>" target="_blank">
                    <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                    </a>
                </div>
				<?php }?>
                <div class="right-desc">
                    <div class="date"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</div>
                    <div class="bottom">
                        <a href="<?php if ($_smarty_tpl->tpl_vars['news']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/files/<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
<?php }?>"><i class="icon icon-pdf"></i></a>
                        <h2 class="name upper"><a href="<?php if ($_smarty_tpl->tpl_vars['news']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/files/<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h2>
                        <span><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</span>
                    </div>
                </div>
            </li>
			<?php } ?>
        </ul>        
        <?php }?>
    
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
    <!-- RIGHT-->    
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- END RIGHT -->
    </div>
    <div class="clear"></div>
</div>      
            
        
    <?php }} ?>