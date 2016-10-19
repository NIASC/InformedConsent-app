<?php /* Smarty version Smarty-3.1.13, created on 2014-04-25 19:00:49
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13639535a37cfafdb75-31387851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbb77afc2f0ec1eb8f893efee1977e06033de5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\news_single_page.tpl',
      1 => 1398438046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13639535a37cfafdb75-31387851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535a37cfc66800_55223540',
  'variables' => 
  array (
    'navigator' => 0,
    'info' => 0,
    'language' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'nav_item' => 0,
    'info_img' => 0,
    'info_title' => 0,
    'date' => 0,
    'start_date' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a37cfc66800_55223540')) {function content_535a37cfc66800_55223540($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['navigator']->value)||($_smarty_tpl->tpl_vars['navigator']->value&&$_smarty_tpl->tpl_vars['info']->value['title'])){?>
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
        
            <div class="text_center">
                <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" width="276" height="187" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                <?php }?>
                <h1 class="info_title upper"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
                <time datetime="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</time>
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
            
        	<p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
		</div>
    <?php }} ?>