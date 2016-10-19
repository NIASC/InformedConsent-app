<?php /* Smarty version Smarty-3.1.13, created on 2014-12-08 12:53:36
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26703537b69d2903eb7-50838257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fa9458ed8d988d263fd6817c543a75a82048547' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\text_page.tpl',
      1 => 1406731082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26703537b69d2903eb7-50838257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537b69d2a98756_96638016',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b69d2a98756_96638016')) {function content_537b69d2a98756_96638016($_smarty_tpl) {?><h1 class="headline upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</a></h1>

<div class="text_center single"><br />
	<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
    <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
	</a>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    
    <hr class="bottom_rule" />
    
    <a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
    
    <ul class="social_action">
        <li class="fb"><div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
	</ul>
        
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>