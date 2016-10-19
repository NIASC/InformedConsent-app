<?php /* Smarty version Smarty-3.1.13, created on 2013-06-26 13:45:34
         compiled from "C:\xampp\htdocs\idea\smarty\templates\list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2504751c2df04e19fc9-38187059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b4156ae2a99929b24503e393450f12c85a98ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\list_single_page.tpl',
      1 => 1372238330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504751c2df04e19fc9-38187059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c2df054fb740_29848636',
  'variables' => 
  array (
    'site_data' => 0,
    'info_title' => 0,
    'language' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'start_date' => 0,
    'info_content' => 0,
    'related_infos' => 0,
    'related_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c2df054fb740_29848636')) {function content_51c2df054fb740_29848636($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>
    
<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1></div>
        
        <p><a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a></p>
        <div class="text_center">
        	<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="defult_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
            <?php }?>
            <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h5>
            <span class="date"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</span>
            <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

		</div>
        
        <div class="right_widget">
        
        	<?php if ($_smarty_tpl->tpl_vars['related_infos']->value){?>            
            <div class="relations">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['language']->value['related_projects'];?>
:</h3>
            	<ul>
                	<?php  $_smarty_tpl->tpl_vars['related_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['related_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['related_info']->key => $_smarty_tpl->tpl_vars['related_info']->value){
$_smarty_tpl->tpl_vars['related_info']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['related_info']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['related_info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['related_info']->value['title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php }?>

        </div>
        
	</div>
</div>
    
    <?php }} ?>