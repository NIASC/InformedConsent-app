<?php /* Smarty version Smarty-3.1.13, created on 2014-07-08 17:23:18
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1209653bbb771001aa7-93974476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f95db3b93151e022cd9c5ed587165f921b2dc49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\list_single_page.tpl',
      1 => 1404825793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1209653bbb771001aa7-93974476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bbb7713ced74_96112121',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_title' => 0,
    'info_thumbnail' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bbb7713ced74_96112121')) {function content_53bbb7713ced74_96112121($_smarty_tpl) {?><h1 class="headline"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>

<div class="text_center single"><br />
	<h1 class="info_title upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <div class="text_center">
    	<?php if ($_smarty_tpl->tpl_vars['info_thumbnail']->value){?>
        <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
		</a>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

	</div>
    
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