<?php /* Smarty version Smarty-3.1.13, created on 2013-09-26 18:24:10
         compiled from "C:\xampp\htdocs\un\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164945242f1409e32b9-81830913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e29dd68ba81acc81bde64c858f124c9658dd2a33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\un\\smarty\\templates\\news_single_page.tpl',
      1 => 1380205448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164945242f1409e32b9-81830913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5242f140c4d986_42657555',
  'variables' => 
  array (
    'site_data' => 0,
    'navigator' => 0,
    'language' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_title' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5242f140c4d986_42657555')) {function content_5242f140c4d986_42657555($_smarty_tpl) {?><div class="center_container left">       
		
        <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
<a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></h1>
        
        
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
            <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
            <?php }?>
            
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
</div>
    <?php }} ?>