<?php /* Smarty version Smarty-3.1.13, created on 2014-02-17 14:46:39
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104683910552fe4019399b78-55720487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd353a61b3d54f79a483871ecf30d0b82e26d5b16' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/right_sidebar.tpl',
      1 => 1392633981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104683910552fe4019399b78-55720487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52fe40193f9a14_59683795',
  'variables' => 
  array (
    'site_data' => 0,
    'programs_array' => 0,
    'site_url' => 0,
    'info' => 0,
    'right_banners' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fe40193f9a14_59683795')) {function content_52fe40193f9a14_59683795($_smarty_tpl) {?><div class="right_sidebar">
    
    <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section']!=1){?>
    <div class="program_wrapper">
    	<span class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['programs_array']->value[0]['section_name'];?>
</span>
        <ul class="program_list">
        	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['programs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
           	<li><h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h2></li>
            <?php } ?>
        </ul>
    </div>
    <?php }?>
    
    <div id="calendar"></div>
	
    <div class="sidebar_banners">
	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['right_banners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
" class="banner"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a>
	<?php } ?>
    </div>
</div><?php }} ?>