<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:44:44
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/left_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302308311558be9ac2495a1-27566223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b641a3f7731ee16bb4938c46b02584b6fda10e3c' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/left_sidebar.tpl',
      1 => 1435213856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302308311558be9ac2495a1-27566223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'welcomers' => 0,
    'post' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'banner2' => 0,
    'banner' => 0,
    'banner3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558be9ac291972_51591046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558be9ac291972_51591046')) {function content_558be9ac291972_51591046($_smarty_tpl) {?><div class="sidebar left">
        <div class="member-wrap">
            <div class="slider">
                <h1>Welcome</h1>

                <ul>
                	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['welcomers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <li>
                        <div class="image relative">
                            <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['post']->value->thumbnail;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
"/>

                            <div class="name absolute">
                                <?php echo $_smarty_tpl->tpl_vars['post']->value->job;?>

                            </div>
                        </div>
                        <div class="text">
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>

                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->info_slug;?>
" class="more right">More...</a>

                        <div class="clear"></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="organizer-supporter-wrap">
            <h1>Organizers</h1>

            <div class="wrap">
            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            <h1>Supporters</h1>

            <div class="wrap">
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
        </div>
    </div><?php }} ?>