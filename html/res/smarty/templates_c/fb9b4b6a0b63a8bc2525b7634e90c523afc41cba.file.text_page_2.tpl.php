<?php /* Smarty version Smarty-3.1.13, created on 2016-03-17 13:02:06
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\text_page_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2855856ea7125b9cdd0-17695802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb9b4b6a0b63a8bc2525b7634e90c523afc41cba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\text_page_2.tpl',
      1 => 1458205324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855856ea7125b9cdd0-17695802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56ea7125ecb230_21358119',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'info_files' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ea7125ecb230_21358119')) {function content_56ea7125ecb230_21358119($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>


<div id="content">
    <div class="center">
    	<div class="gaard">
    		<h1><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h1>
        </div>
        <div class="content_top_full">
        <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
        	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
			</a>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['info_files']->value&&count($_smarty_tpl->tpl_vars['info_files']->value)>1){?>
        	<ul class="post-gallery">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                <li><a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
uploads/files/thumb/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
                	</a>
                </li>
                <?php } ?>  
			</ul>
		<?php }?>       
        </div>
    </div>
</div><?php }} ?>