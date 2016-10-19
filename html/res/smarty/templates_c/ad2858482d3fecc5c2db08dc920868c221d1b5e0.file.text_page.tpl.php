<?php /* Smarty version Smarty-3.1.13, created on 2015-05-15 14:39:13
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193455551dc2109f0a0-80508392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2858482d3fecc5c2db08dc920868c221d1b5e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\text_page.tpl',
      1 => 1431674038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193455551dc2109f0a0-80508392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551dc21233e17_47837735',
  'variables' => 
  array (
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551dc21233e17_47837735')) {function content_5551dc21233e17_47837735($_smarty_tpl) {?><div class="center-wrap main second-font">
	<div class="clear"></div>
</div>
<div class="center-wrap about second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
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

    <!-- RIGHT-->
    
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- END RIGHT -->
    </div>
    <div class="clear"></div>
</div>
    <?php }} ?>