<?php /* Smarty version Smarty-3.1.13, created on 2014-02-14 18:33:41
         compiled from "C:\xampp\htdocs\eeu.edu.ge\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:692852e7b66f027742-12287245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5ad103551ae4c03fe7c289b97a6667617762fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\eeu.edu.ge\\smarty\\templates\\search_page.tpl',
      1 => 1392388419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692852e7b66f027742-12287245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e7b66f209497_79218816',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'key' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7b66f209497_79218816')) {function content_52e7b66f209497_79218816($_smarty_tpl) {?>
        <div class="content_wrapper"> 
         
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['search_query'];?>
: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"</h1>
        
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
            <article class="list_item search_result">
                <h2 class="post_title">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
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
        
        <?php if ($_smarty_tpl->tpl_vars['site_data']->value['section_type']!=1){?>
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?><?php }} ?>