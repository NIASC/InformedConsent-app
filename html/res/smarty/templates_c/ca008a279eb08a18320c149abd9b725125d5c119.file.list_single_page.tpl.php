<?php /* Smarty version Smarty-3.1.13, created on 2016-03-22 18:55:50
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2130456e7d8a89a9392-45144422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca008a279eb08a18320c149abd9b725125d5c119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\list_single_page.tpl',
      1 => 1458658548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2130456e7d8a89a9392-45144422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56e7d8a8a77e14_46963451',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'info_title' => 0,
    'job' => 0,
    'info_thumbnail' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e7d8a8a77e14_46963451')) {function content_56e7d8a8a77e14_46963451($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>

<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>
            <div class="content_top">
            	<h2 class="name"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</p>
            	<?php if ($_smarty_tpl->tpl_vars['info_thumbnail']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
          
            </div>            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
            
        </div>        
    </div>
</div><?php }} ?>