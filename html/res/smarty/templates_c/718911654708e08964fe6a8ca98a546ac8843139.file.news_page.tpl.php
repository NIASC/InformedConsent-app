<?php /* Smarty version Smarty-3.1.13, created on 2014-01-31 15:59:26
         compiled from "C:\xampp\htdocs\eeu.edu.ge\smarty\templates\news_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015352e67c04f030e7-20031960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718911654708e08964fe6a8ca98a546ac8843139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eeu.edu.ge\\smarty\\templates\\news_page.tpl',
      1 => 1391169564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015352e67c04f030e7-20031960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e67c05210334_84030639',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'news' => 0,
    'site_url' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e67c05210334_84030639')) {function content_52e67c05210334_84030639($_smarty_tpl) {?>
    	<div class="content_wrapper">
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value){
$_smarty_tpl->tpl_vars["news"]->_loop = true;
?>
            <article class="post_item">
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }?>
                <span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</span>
                <h2 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></h2>
                <time datetime="<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</time>
                <?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

                <a class="read_more <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><span></span></a>
            </article>
            <?php } ?>
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

        
    <?php }} ?>