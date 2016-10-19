<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:46:08
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1812688083558bea002d7fb1-84491584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81146b498f6984f8cc599faeeaebc21e2ee36f7' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/text_page.tpl',
      1 => 1435137421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812688083558bea002d7fb1-84491584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558bea0031e0d6_13118112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558bea0031e0d6_13118112')) {function content_558bea0031e0d6_13118112($_smarty_tpl) {?><div class="content right">
	<div class="about-main">
		<h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        
        <div class="name"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</div>
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