<?php /* Smarty version Smarty-3.1.13, created on 2013-10-16 14:14:14
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584564450525cf3d108df74-76561580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a82ca98deb4d33ab8d18f5828ea10099b0dc36b' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/news_single_page.tpl',
      1 => 1381918450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584564450525cf3d108df74-76561580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525cf3d10ff306_20542507',
  'variables' => 
  array (
    'navigator' => 0,
    'navigator_info' => 0,
    'site_data' => 0,
    'site_url' => 0,
    'nav_item' => 0,
    'info_title' => 0,
    'language' => 0,
    'info_img' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525cf3d10ff306_20542507')) {function content_525cf3d10ff306_20542507($_smarty_tpl) {?><div class="center_container left">       
		
        <?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['navigator_info']->value)){?>
        <div class="crumb <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<ul>
        	<?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['nav_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_item']->key => $_smarty_tpl->tpl_vars['nav_item']->value){
$_smarty_tpl->tpl_vars['nav_item']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->language;?>
/<?php echo $_smarty_tpl->tpl_vars['nav_item']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['nav_item']->value->name;?>
</a></li>
                <?php } ?>
            <?php }elseif($_smarty_tpl->tpl_vars['navigator_info']->value){?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['navigator']->value->language;?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['navigator']->value->name;?>
</a></li>
            <?php }?>
        	</ul>
        </div>
        <?php }?>
        
        <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></h1>
        
        
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
            <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            </a>
            <?php }?>
            
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
</div>
    <?php }} ?>