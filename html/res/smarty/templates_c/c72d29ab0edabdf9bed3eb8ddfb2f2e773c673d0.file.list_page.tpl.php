<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:45:57
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810973118558be9f52e2160-55847027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72d29ab0edabdf9bed3eb8ddfb2f2e773c673d0' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/list_page.tpl',
      1 => 1435146172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810973118558be9f52e2160-55847027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'index' => 0,
    'info_item' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558be9f5354117_89554536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558be9f5354117_89554536')) {function content_558be9f5354117_89554536($_smarty_tpl) {?>	<div class="content-long left">
        <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        <ul class="speakers-list">
        	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
">
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
" class="transparent"/>
                        </a>
                        <?php }?>
                    </div>
                    <div class="text-wrap right">
                        <div class="name"><span class="upper"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
 - </span></div>
                        <div class="position"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['job'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

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
    </div>

<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>