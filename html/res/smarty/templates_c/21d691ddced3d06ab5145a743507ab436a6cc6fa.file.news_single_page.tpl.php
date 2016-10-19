<?php /* Smarty version Smarty-3.1.13, created on 2014-07-07 16:22:55
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7867537c8ce2132bc3-51672429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d691ddced3d06ab5145a743507ab436a6cc6fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\news_single_page.tpl',
      1 => 1404514844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7867537c8ce2132bc3-51672429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537c8ce22d26e7_41117705',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_img' => 0,
    'info_title' => 0,
    'date' => 0,
    'start_date' => 0,
    'info_content' => 0,
    'info_files' => 0,
    'image' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c8ce22d26e7_41117705')) {function content_537c8ce22d26e7_41117705($_smarty_tpl) {?><h1 class="headline"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>

<div class="text_center single"><br />

<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" width="276" height="187" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
	</a>
<?php }?>
	<h1 class="info_title"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <time datetime="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</time>
	<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['info_files']->value){?>
    <ul class="info_gall">
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
    <li>
    <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumb/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" width="121" height="89" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
    </a>
    </li>
    <?php } ?>
    </ul>
    <?php }?>
    <hr class="bottom_rule" />
    <a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
    <?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }} ?>