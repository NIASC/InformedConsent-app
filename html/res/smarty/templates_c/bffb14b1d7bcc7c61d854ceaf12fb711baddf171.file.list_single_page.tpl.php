<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 11:19:46
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2961558a685ed636e8-84142991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bffb14b1d7bcc7c61d854ceaf12fb711baddf171' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\list_single_page.tpl',
      1 => 1435216784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2961558a685ed636e8-84142991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558a685ee92ff7_97097421',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_title' => 0,
    'job' => 0,
    'info_thumbnail' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a685ee92ff7_97097421')) {function content_558a685ee92ff7_97097421($_smarty_tpl) {?><div class="content left list-single">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>
        
        <h2 class="name"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
		<div class="position"><?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</div>
        <div class="desc">
        	<?php if ($_smarty_tpl->tpl_vars['info_thumbnail']->value){?>
            <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
            <?php }?>
        	<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

        </div>
        <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>