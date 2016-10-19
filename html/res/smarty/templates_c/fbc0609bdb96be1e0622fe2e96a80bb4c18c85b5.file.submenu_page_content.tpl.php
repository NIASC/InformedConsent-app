<?php /* Smarty version Smarty-3.1.13, created on 2015-09-17 10:27:20
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/submenu_page_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103598696355f1114d837b26-42160963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc0609bdb96be1e0622fe2e96a80bb4c18c85b5' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/submenu_page_content.tpl',
      1 => 1442471247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103598696355f1114d837b26-42160963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55f1114d8dda17_35772958',
  'variables' => 
  array (
    'site_data' => 0,
    'info' => 0,
    'index' => 0,
    'site_url' => 0,
    'item' => 0,
    'info_content' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1114d8dda17_35772958')) {function content_55f1114d8dda17_35772958($_smarty_tpl) {?><div class="content-long left">
        <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        
        <h2 class="page_category <?php if ($_smarty_tpl->tpl_vars['index']->value==0){?>first<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section']->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['section']->name;?>
</a></h2>
        
        <ul class="speakers-list">
        	<?php if (is_array($_smarty_tpl->tpl_vars['item']->value['content'])){?>
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
            <li <?php if (count($_smarty_tpl->tpl_vars['info_content']->value)==$_smarty_tpl->tpl_vars['index']->value+1){?>class="last"<?php }elseif($_smarty_tpl->tpl_vars['index']->value==0){?>class="first"<?php }?>>
                <div class="wrap">
                    <div class="image left">
                        <?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section']->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
" class="transparent"/>
                        </a>
                        <?php }?>
                    </div>
                    <div class="text-wrap right">
                        <div class="name">
                            <span class="upper">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section']->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
                            </span>
                        </div>
                        <div class="position">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section']->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['job'];?>
</a>
                        </div>
                        <div class="desc">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['section']->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>             
            <?php } ?>
            <?php }else{ ?>
            <p>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </p>
            <?php }?>

        </ul>
        <?php } ?>
        
        
    </div>

<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>