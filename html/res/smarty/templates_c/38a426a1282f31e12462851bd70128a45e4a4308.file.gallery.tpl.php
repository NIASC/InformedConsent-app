<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:48:25
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1824083547558bea89a16655-24957113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a426a1282f31e12462851bd70128a45e4a4308' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/gallery.tpl',
      1 => 1435149181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1824083547558bea89a16655-24957113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'gall_title' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558bea89a64d59_14888328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558bea89a64d59_14888328')) {function content_558bea89a64d59_14888328($_smarty_tpl) {?><div class="content right">
	<div class="gallery-full">
    	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h1>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
            <li>
            	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
"/>
				</a>
            </li>
            <?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
</div><?php }} ?>