<?php /* Smarty version Smarty-3.1.13, created on 2014-02-17 11:59:02
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1253184975301c146b6e540-78531826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '485f69c8d8e6732b13115736db65aad5f4c2e067' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/list_single_page.tpl',
      1 => 1392394054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253184975301c146b6e540-78531826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'language' => 0,
    'info_thumbnail' => 0,
    'site_url' => 0,
    'start_date' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5301c146bf2e31_21446783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301c146bf2e31_21446783')) {function content_5301c146bf2e31_21446783($_smarty_tpl) {?>
        <div class="content_wrapper">
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
            <p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
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
                <span class="date"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>           
        </div>
        
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
    
    <?php }} ?>