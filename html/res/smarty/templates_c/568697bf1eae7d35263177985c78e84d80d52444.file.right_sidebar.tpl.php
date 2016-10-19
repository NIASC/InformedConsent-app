<?php /* Smarty version Smarty-3.1.13, created on 2013-10-30 11:21:57
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\right_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7113526e634c1cf529-77058465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568697bf1eae7d35263177985c78e84d80d52444' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\right_sidebar.tpl',
      1 => 1383117712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7113526e634c1cf529-77058465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e634c1d4778_76465533',
  'variables' => 
  array (
    'sidebar_services' => 0,
    'site_data' => 0,
    'language' => 0,
    'site_url' => 0,
    'info' => 0,
    'sidebar_contact' => 0,
    'sidebar_gall' => 0,
    'gall_section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e634c1d4778_76465533')) {function content_526e634c1d4778_76465533($_smarty_tpl) {?><div class="right_sidebar">
	<ul class="sidebar_blue">
    	<li class="decoration"><span></span></li>
        <?php if ($_smarty_tpl->tpl_vars['sidebar_services']->value){?>
        <li>
        	<h3 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['services'];?>
</h3>
            <ul>
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebar_services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            	<li><span class="cyrcle"></span>
                	<h4 class="sidebar_info_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a>
                    </h4>
                	<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

                </li>
                <?php } ?>
            </ul>
            
            
        </li>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['sidebar_contact']->value){?>
        <li>
        	
            <h3 class="<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['sidebar_contact']->value[0]['title'];?>
</h3>
            <div class="contact_area">
            <?php echo $_smarty_tpl->tpl_vars['sidebar_contact']->value[0]['content'];?>

            </div>            
		</li>
        <?php }?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['sidebar_gall']->value){?>
    <div class="gallery_block">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['gall_section']->value->slug;?>
">
    	<img src="images/small_<?php echo $_smarty_tpl->tpl_vars['sidebar_gall']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['website_title'];?>
" class="fade"/>
        </a>
        <h3 class="marker <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['gall_section']->value->slug;?>
">
        	<span></span><?php echo $_smarty_tpl->tpl_vars['language']->value['photo_gallery'];?>

        </a>
        </h3>
    </div>
    <?php }?>
</div><?php }} ?>