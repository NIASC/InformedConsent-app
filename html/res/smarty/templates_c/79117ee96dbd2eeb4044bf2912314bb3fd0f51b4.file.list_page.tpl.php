<?php /* Smarty version Smarty-3.1.13, created on 2014-05-01 17:25:56
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\list_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23678535a82430848e7-77584668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79117ee96dbd2eeb4044bf2912314bb3fd0f51b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\list_page.tpl',
      1 => 1398950753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23678535a82430848e7-77584668',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535a82431f7cf8_10809219',
  'variables' => 
  array (
    'top_info_content' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'news' => 0,
    'language' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'info_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a82431f7cf8_10809219')) {function content_535a82431f7cf8_10809219($_smarty_tpl) {?><ul class="important_post">
        <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value){
$_smarty_tpl->tpl_vars["news"]->_loop = true;
?>
        	<li>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['news']->value['thumbnail']){?>
                <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['news']->value['thumbnail'];?>
" width="276" height="187" class="thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }else{ ?>
                <img src="images/top_nothumb.png" width="276" height="187" class="thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
"/>
                <?php }?>
				</a>
                <div class="exept">
                	<h1 class="title2 upper">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
					</h1>
                    <div class="cont"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div>
                    <div class="nav">
                    	<span class="date upper"><?php echo $_smarty_tpl->tpl_vars['news']->value['start_date'];?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['news']->value['info_slug'];?>
" class="read_more upper">
                        	<?php echo $_smarty_tpl->tpl_vars['language']->value['read_more'];?>
 >>
						</a>
					</div>
				</div>
			</li>
		<?php } ?>
</ul>
        
<div class="content_wrapper">
	<h2 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
    
    <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
?>
    <div class="post_item">
    	
        <?php if ($_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" width="121" height="89" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
"/>
        <?php }?>
        <h2 class="post_title <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['info_slug'];?>
" class="list_title"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a>
		</h2>
        <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                
	</div>
	<?php } ?>
        
</div><?php }} ?>