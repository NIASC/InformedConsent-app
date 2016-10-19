<?php /* Smarty version Smarty-3.1.13, created on 2013-12-06 19:03:07
         compiled from "C:\xampp\htdocs\aig\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31743529f418ba2a373-88529608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad87ccfd475d833698084f709c24b27db3d118eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\gallery.tpl',
      1 => 1386253878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31743529f418ba2a373-88529608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529f418baee3f6_41500929',
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
<?php if ($_valid && !is_callable('content_529f418baee3f6_41500929')) {function content_529f418baee3f6_41500929($_smarty_tpl) {?>
    	<div class="content_wrapper">	
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
		</div> 
        
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>  <?php }} ?>