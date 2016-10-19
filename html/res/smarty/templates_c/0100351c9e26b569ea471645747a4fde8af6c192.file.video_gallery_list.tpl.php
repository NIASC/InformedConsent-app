<?php /* Smarty version Smarty-3.1.13, created on 2014-05-01 15:28:19
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\video_gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298465360e503028692-11187227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0100351c9e26b569ea471645747a4fde8af6c192' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\video_gallery_list.tpl',
      1 => 1398943665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298465360e503028692-11187227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5360e503162a59_22317702',
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360e503162a59_22317702')) {function content_5360e503162a59_22317702($_smarty_tpl) {?><div class="gallery_wrapper">
	<h1 class="headline upper"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

    <ul class="gallery">
    <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?>          
    <?php if (($_smarty_tpl->tpl_vars['g']->index+1)%3==0){?>
    <li class="trim">
    <?php }else{ ?>
    <li>
    <?php }?>
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
" class="cover"/>
        </a>
        <h2 class="description upper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</a>
        </h2>
    </li>          
    <?php } ?>
    </li>
    
    <ul class="paging">
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
        <li><a href="#<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php } ?>
    </ul>
    
</div><?php }} ?>