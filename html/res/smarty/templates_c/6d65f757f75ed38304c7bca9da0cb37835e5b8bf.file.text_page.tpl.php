<?php /* Smarty version Smarty-3.1.13, created on 2014-04-25 19:40:05
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3915535a1619e27676-16313733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d65f757f75ed38304c7bca9da0cb37835e5b8bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\text_page.tpl',
      1 => 1398440403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3915535a1619e27676-16313733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535a1619f3d463_87083407',
  'variables' => 
  array (
    'navigator' => 0,
    'info' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'nav_item' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a1619f3d463_87083407')) {function content_535a1619f3d463_87083407($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['info']->value['title'])){?>
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
        <div class="content_wrapper">
            <h1 class="info_title upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
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
        </div>       <?php }} ?>