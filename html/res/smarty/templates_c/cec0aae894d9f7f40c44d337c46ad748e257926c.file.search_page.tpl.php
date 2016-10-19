<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 15:49:32
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1067382932558beacc6fecf9-25645256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec0aae894d9f7f40c44d337c46ad748e257926c' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/test/smarty/templates/search_page.tpl',
      1 => 1435216112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1067382932558beacc6fecf9-25645256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558beacc74f521_94771303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558beacc74f521_94771303')) {function content_558beacc74f521_94771303($_smarty_tpl) {?><div class="content right">
        <div class="search-wrap">
            <h1>Search Results</h1>

            <ul class="search-results">
            	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
                <li>
                    <div class="title upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></div>
                    <div class="category"><?php echo $_smarty_tpl->tpl_vars['news']->value['section_name'];?>
</div>
                    <div class="text"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
                </li>
                <?php } ?>          
                <?php }?>
            </ul>
            <div class="clear"></div>
        </div>
    </div><?php }} ?>