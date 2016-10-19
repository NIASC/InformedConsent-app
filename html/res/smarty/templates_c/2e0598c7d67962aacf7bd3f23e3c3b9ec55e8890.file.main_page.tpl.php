<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:44:44
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:917734390558be9ac295b41-89854493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e0598c7d67962aacf7bd3f23e3c3b9ec55e8890' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/main_page.tpl',
      1 => 1435134869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '917734390558be9ac295b41-89854493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'agenda' => 0,
    'news_block' => 0,
    'index' => 0,
    'info' => 0,
    'banner1' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558be9ac2f88e5_22335635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558be9ac2f88e5_22335635')) {function content_558be9ac2f88e5_22335635($_smarty_tpl) {?><div class="content right">
        <div class="about-main">
            <h1><?php echo $_smarty_tpl->tpl_vars['about']->value->name;?>
</h1>

            <div class="name"><?php echo $_smarty_tpl->tpl_vars['about']->value->title;?>
</div>
            <div class="desc">
                <?php echo $_smarty_tpl->tpl_vars['about']->value->description;?>

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['agenda']->value->slug;?>
">
                <div class="agenda second-font right">
                    <i class="icons agenda-icon"></i>
                    <span><span><?php echo $_smarty_tpl->tpl_vars['agenda']->value->name;?>
</span></span>
                </div>
            </a>
            <div class="clear"></div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['news_block']->value){?>
        <div class="speakers-main-list">
            <h1><?php echo $_smarty_tpl->tpl_vars['news_block']->value[0]['section_name'];?>
</h1>
            <ul class="left">
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['index']->value%4==3){?> class="forth"<?php }?>>
                    <div class="image">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
">
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/></a>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
">
                        <div class="name upper"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 -</div>
                        <div class="position"><?php echo $_smarty_tpl->tpl_vars['info']->value['position'];?>
</div>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <div class="clear"></div>
        </div>
        <?php }?>

        <ul class="banners left">
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banner1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li <?php if (count($_smarty_tpl->tpl_vars['banner1']->value)==$_smarty_tpl->tpl_vars['index']->value+1){?> class="last" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
">
                <span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
</span>
                <span class="middle"></span>
                <i class="icons corner-icon"></i>
            </a>
            </li>
			<?php } ?>
        </ul>
    </div><?php }} ?>