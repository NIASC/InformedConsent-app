<?php /* Smarty version Smarty-3.1.13, created on 2014-04-28 19:44:00
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5101535e6de4c6f0a1-64591990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc133034b98c44628aeb2d5ded556d42cd3c0da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\gallery.tpl',
      1 => 1398699837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5101535e6de4c6f0a1-64591990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535e6de4da3709_63721985',
  'variables' => 
  array (
    'navigator' => 0,
    'info' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'nav_item' => 0,
    'gall_title' => 0,
    'gall_desc' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e6de4da3709_63721985')) {function content_535e6de4da3709_63721985($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['info']->value['title'])){?>
	<ul class="crumb upper">
    	<li><a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></li>
		<?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['nav_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_item']->key => $_smarty_tpl->tpl_vars['nav_item']->value){
$_smarty_tpl->tpl_vars['nav_item']->_loop = true;
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['nav_item']->value->name;?>
</a></li>
		<?php } ?>
		<?php }elseif($_smarty_tpl->tpl_vars['navigator']->value){?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['title']){?>
		<li><h1><a><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a></h1></li>
		<?php }?>
	</ul>
<?php }else{ ?>
	<ul class="crumb upper">  
    	<li><a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></li>      	
		<li><h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1></li>
	</ul>
<?php }?>
    	<div class="gallery_wrapper">	
        	<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h1>
            <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['gall_desc']->value;?>
</span>
            
            <ul class="gallery">
    
            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?>
            <?php if (($_smarty_tpl->tpl_vars['g']->index+1)%3==0){?>
            <li class="trim">
            <?php }else{ ?>
            <li>
            <?php }?>
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