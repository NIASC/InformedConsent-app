<?php /* Smarty version Smarty-3.1.13, created on 2014-04-30 17:06:06
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\search_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138995360f25a5b4333-04689087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a19413941fd3a28d8b0b04f4a767896574eb2ef1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\search_page.tpl',
      1 => 1398863164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138995360f25a5b4333-04689087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5360f25a7932f0_97109170',
  'variables' => 
  array (
    'language' => 0,
    'key' => 0,
    'info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360f25a7932f0_97109170')) {function content_5360f25a7932f0_97109170($_smarty_tpl) {?>
        <div class="content_wrapper"> 
         
            <h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['language']->value['search_query'];?>
: "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"</h1>
        
            <?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
            
            <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
            <article class="list_item search_result">
                <h2 class="post_title upper">
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
		</div><?php }} ?>