<?php /* Smarty version Smarty-3.1.13, created on 2015-07-24 12:38:34
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68390644155b1f98a836ee0-57725492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e8a474543107b5db0a2b2d708fe5a941edf3321' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/search_page.tpl',
      1 => 1435216112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68390644155b1f98a836ee0-57725492',
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
  'unifunc' => 'content_55b1f98a88bd85_64173969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b1f98a88bd85_64173969')) {function content_55b1f98a88bd85_64173969($_smarty_tpl) {?><div class="content right">
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