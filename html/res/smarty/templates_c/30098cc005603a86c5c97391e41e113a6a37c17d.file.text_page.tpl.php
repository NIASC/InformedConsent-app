<?php /* Smarty version Smarty-3.1.13, created on 2015-09-10 11:20:05
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:618888066558beef648f029-92124831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30098cc005603a86c5c97391e41e113a6a37c17d' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/text_page.tpl',
      1 => 1441089487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '618888066558beef648f029-92124831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558beef64d1468_15027941',
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
<?php if ($_valid && !is_callable('content_558beef64d1468_15027941')) {function content_558beef64d1468_15027941($_smarty_tpl) {?><div class="content right">
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