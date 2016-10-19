<?php /* Smarty version Smarty-3.1.13, created on 2016-03-11 18:51:32
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767056e18c516cef24-55688858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83773bf1176a1896ab501e355ef504a1b234cbdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\news_page.tpl',
      1 => 1457707697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767056e18c516cef24-55688858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56e18c519ffac0_50155641',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'news' => 0,
    'index' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e18c519ffac0_50155641')) {function content_56e18c519ffac0_50155641($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
            <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <div class="content_top">
                <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>        
                <ul class="news">
                <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
                	<li>
                    	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h2>
                        <div class="news_list">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
                            	<?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                            	<img src="uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                                <?php }else{ ?>
                            	<img src="images/no-image.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                                <?php }?>
                            </a>
                            <div class="news_text">
                            	<date><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</date>
                                <p><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</p>
                            </div>
                        </div>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['index']->value%3==2){?>
                	<li class="line3"></li>
                    <?php }?>
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
            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
</div>
 
            
            
        
    <?php }} ?>