<?php /* Smarty version Smarty-3.1.13, created on 2016-04-25 19:57:13
         compiled from "C:\xampp\htdocs\moe\smarty\templates\text_page_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10210571e3e59078655-99527180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b573c35c49386e6471d50fa99a46771eb15b3154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\text_page_2.tpl',
      1 => 1458205324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10210571e3e59078655-99527180',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_571e3e59138c61_47072347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e3e59138c61_47072347')) {function content_571e3e59138c61_47072347($_smarty_tpl) {?><div id="line_green">
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