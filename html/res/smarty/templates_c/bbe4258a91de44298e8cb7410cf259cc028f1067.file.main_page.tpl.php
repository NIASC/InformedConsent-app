<?php /* Smarty version Smarty-3.1.13, created on 2014-04-28 16:35:39
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6460535943143cf8d8-08746845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe4258a91de44298e8cb7410cf259cc028f1067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\main_page.tpl',
      1 => 1398688533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6460535943143cf8d8-08746845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53594314572da7_41714194',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'news_block' => 0,
    'language' => 0,
    'info' => 0,
    'articles_block' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53594314572da7_41714194')) {function content_53594314572da7_41714194($_smarty_tpl) {?>					<ul class="important_post">
                        <li>
                            <a href="#"><img src="img/1.jpg" width="276" height="187" class="thumbnail" alt="დისციპლინერი"/></a>
                            <h1 class="title upper"><a href="#" >დისციპლინერი პროცესი</a></h1>
                        </li>
                        <li>
                            <a href="#"><img src="img/1.jpg" width="276" height="187" class="thumbnail" alt="დისციპლინერი"/></a>
                            <h1 class="title upper"><a href="#" >დისციპლინერი პროცესი</a></h1>
                        </li>
                        <li>
                            <a href="#"><img src="img/1.jpg" width="276" height="187" class="thumbnail" alt="დისციპლინერი"/></a>
                            <h1 class="title upper"><a href="#" >დისციპლინერი პროცესი</a></h1>
                        </li>
                    </ul>
                    
                    <div class="col_2">
                        <h2 class="col_title upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news_block']->value[0]->section_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['news'];?>
</a></h2>
                        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                        <article>
                            <h3 class="post_title upper">
                            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->info_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</a>
                            </h3>
                            <div class="expect">
                            <?php echo $_smarty_tpl->tpl_vars['info']->value->description;?>

                            </div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->info_slug;?>
" class="read_more upper">
                            	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>

                            </a>
                        </article>
                        <?php } ?>
                        
                    </div>
                    
                    <div class="col_separator"></div>
                    
                    <div class="col_2">
                        <h2 class="col_title upper">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['articles_block']->value[0]->section_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['articles'];?>
</a>
                        </h2>
                        
                        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                        <article>
                            <h3 class="post_title upper">
                            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->info_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value->title;?>
</a>
                            </h3>
                            <div class="expect">
                            <?php echo $_smarty_tpl->tpl_vars['info']->value->description;?>

                            </div>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->section_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value->info_slug;?>
" class="read_more upper">
                            	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>

                            </a>
                        </article>
                        <?php } ?>                
                    </div><?php }} ?>