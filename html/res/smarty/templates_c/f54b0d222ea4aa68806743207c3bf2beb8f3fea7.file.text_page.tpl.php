<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 17:27:51
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30250558a623c44c2a9-16257709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54b0d222ea4aa68806743207c3bf2beb8f3fea7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\text_page.tpl',
      1 => 1441089487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30250558a623c44c2a9-16257709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558a623c53fd00_18900714',
  'variables' => 
  array (
    'site_data' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_title' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a623c53fd00_18900714')) {function content_558a623c53fd00_18900714($_smarty_tpl) {?><div class="content right">
	<div class="about-main">
		<h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
                
        <div class="desc">
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

        </div>
        <div class="clear"></div>
	</div>
</div><?php }} ?>