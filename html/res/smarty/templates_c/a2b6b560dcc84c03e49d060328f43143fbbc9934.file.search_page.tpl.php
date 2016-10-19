<?php /* Smarty version Smarty-3.1.13, created on 2015-06-25 11:08:35
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7682558ba2f3041bc8-16644916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b6b560dcc84c03e49d060328f43143fbbc9934' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\search_page.tpl',
      1 => 1435216112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7682558ba2f3041bc8-16644916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558ba2f31fe0b3_67880359',
  'variables' => 
  array (
    'info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558ba2f31fe0b3_67880359')) {function content_558ba2f31fe0b3_67880359($_smarty_tpl) {?><div class="content right">
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