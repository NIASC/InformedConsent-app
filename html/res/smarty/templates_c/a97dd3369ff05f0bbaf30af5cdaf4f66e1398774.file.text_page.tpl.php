<?php /* Smarty version Smarty-3.1.13, created on 2013-10-16 13:26:48
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4928530985254f96b109f21-31608170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97dd3369ff05f0bbaf30af5cdaf4f66e1398774' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/un/smarty/templates/text_page.tpl',
      1 => 1381915601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4928530985254f96b109f21-31608170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5254f96b155e57_78662423',
  'variables' => 
  array (
    'navigator' => 0,
    'navigator_info' => 0,
    'site_data' => 0,
    'site_url' => 0,
    'nav_item' => 0,
    'info_title' => 0,
    'thumbnail' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254f96b155e57_78662423')) {function content_5254f96b155e57_78662423($_smarty_tpl) {?><div class="center_container left"> 

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
</h1>
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
        	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
</div>
    <?php }} ?>