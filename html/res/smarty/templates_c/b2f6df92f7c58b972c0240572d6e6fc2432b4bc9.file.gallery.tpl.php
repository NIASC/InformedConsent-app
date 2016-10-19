<?php /* Smarty version Smarty-3.1.13, created on 2014-01-31 17:37:30
         compiled from "C:\xampp\htdocs\eeu.edu.ge\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210852eba6dd708c31-94228200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f6df92f7c58b972c0240572d6e6fc2432b4bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eeu.edu.ge\\smarty\\templates\\gallery.tpl',
      1 => 1391175444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210852eba6dd708c31-94228200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52eba6dd865748_37013053',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'gall_title' => 0,
    'gall_desc' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eba6dd865748_37013053')) {function content_52eba6dd865748_37013053($_smarty_tpl) {?>
    	<div class="gallery_wrapper">	
        	<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
            <h4 class="gall_title"><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h4>
            <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['gall_desc']->value;?>
</span>
            
            <ul class="gall_images">
    
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
" />
            </a>
            </li>      
            <?php } ?>
            
            </ul>
		</div>   <?php }} ?>