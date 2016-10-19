<?php /* Smarty version Smarty-3.1.13, created on 2014-06-09 17:43:30
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298515382fe9e1531e9-01145658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41158076d6312bf584303239d223d37ee3135a7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\search_page.tpl',
      1 => 1402321406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298515382fe9e1531e9-01145658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5382fe9e3573d1_41728861',
  'variables' => 
  array (
    'language' => 0,
    'key' => 0,
    'category_search' => 0,
    'item' => 0,
    'current_category' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5382fe9e3573d1_41728861')) {function content_5382fe9e3573d1_41728861($_smarty_tpl) {?><h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['search_query'];?>
: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<br /><br /></h1>
<div class="inner_search">
	<form name="inner_search" method="get">
    	<input type="text" class="xx-large" name="que" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
"/>
        <select name="category" class="xx-large">
        	<option value="0"><?php echo $_smarty_tpl->tpl_vars['language']->value['category'];?>
</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['current_category']->value==$_smarty_tpl->tpl_vars['item']->value->id){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
            <?php } ?>
		</select>
        <input type="submit" name="search" class="btn" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['search'];?>
" />
    </form>
</div>
<div class="text_center single"> 
	<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
            <article class="post_item search_result">
                <h2 class="title upper">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
                </h2>
                <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>
	    	
            </article>
            
            <?php } ?>
            
	<?php }else{ ?>
            
            <div class="text">
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
            
	<?php }?>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>