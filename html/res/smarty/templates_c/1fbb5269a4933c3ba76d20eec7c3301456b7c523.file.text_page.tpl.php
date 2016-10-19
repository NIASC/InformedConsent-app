<?php /* Smarty version Smarty-3.1.13, created on 2014-01-18 21:00:45
         compiled from "C:\xampp\htdocs\aig\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11745295c39d327339-04902453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbb5269a4933c3ba76d20eec7c3301456b7c523' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\text_page.tpl',
      1 => 1389973046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11745295c39d327339-04902453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295c39d5a1056_62503425',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295c39d5a1056_62503425')) {function content_5295c39d5a1056_62503425($_smarty_tpl) {?>
        <div class="content_wrapper">
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
            <div class="text_center">
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
        </div>        

        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?> <?php }} ?>