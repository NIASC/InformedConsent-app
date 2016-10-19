<?php /* Smarty version Smarty-3.1.13, created on 2014-02-17 11:00:09
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1055868935301b3798c7be2-10262235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69142461f850417157f14904d11cf89b85fe5bf9' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/news_single_page.tpl',
      1 => 1392394054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055868935301b3798c7be2-10262235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_title' => 0,
    'date' => 0,
    'start_date' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5301b379955459_71124821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301b379955459_71124821')) {function content_5301b379955459_71124821($_smarty_tpl) {?>
        <div class="content_wrapper">
            <div class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</div>
            
        
            <div class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                <?php }?>
                <h1 class="info_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
                <time datetime="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</time>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
            
        	<p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
		</div>
        
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>
    <?php }} ?>