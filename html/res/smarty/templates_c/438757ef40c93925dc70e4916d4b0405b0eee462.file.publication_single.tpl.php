<?php /* Smarty version Smarty-3.1.13, created on 2016-03-17 19:44:11
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\publication_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256056eaced399aa95-49268830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '438757ef40c93925dc70e4916d4b0405b0eee462' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\publication_single.tpl',
      1 => 1458229429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256056eaced399aa95-49268830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56eaced3b55b05_05038675',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'info_title' => 0,
    'info_img' => 0,
    'info_content' => 0,
    'info_description' => 0,
    'info_files' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56eaced3b55b05_05038675')) {function content_56eaced3b55b05_05038675($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>
            <div class="content_top">
            	<h2 class="page-title"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
            	<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['info_description']->value){?>
                <iframe class="pdf_window" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/docs/<?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
"></iframe>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['info_files']->value&&count($_smarty_tpl->tpl_vars['info_files']->value)>1){?>
                <ul class="post-gallery">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                <li><a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
                	</a>
                </li>
                <?php } ?>  
                </ul>
                <?php }?>            
            </div>
            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
</div><?php }} ?>