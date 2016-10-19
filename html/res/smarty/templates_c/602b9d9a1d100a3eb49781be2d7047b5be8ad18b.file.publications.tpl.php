<?php /* Smarty version Smarty-3.1.13, created on 2016-09-15 13:38:29
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/publications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54815575257b74bdfa5df61-37260810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '602b9d9a1d100a3eb49781be2d7047b5be8ad18b' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/publications.tpl',
      1 => 1473691391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54815575257b74bdfa5df61-37260810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b74bdfb813f0_75501630',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'info_item' => 0,
    'site_url' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b74bdfb813f0_75501630')) {function content_57b74bdfb813f0_75501630($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row publications">
				<?php if (is_array($_smarty_tpl->tpl_vars['info_content']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info_item']->key;
?>
					<div class="col-xl-2 col-lg-2 col-md-3  col-sm-4 col-xs-6 thumb"><?php if ($_smarty_tpl->tpl_vars['info_item']->value['file']&&$_smarty_tpl->tpl_vars['info_item']->value['thumbnail']){?>
						<a <?php if ($_smarty_tpl->tpl_vars['info_item']->value['file']){?> href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/docs/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['file'];?>
"<?php }elseif($_smarty_tpl->tpl_vars['url']->value!=''){?> href="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['url'];?>
"<?php }?> target="_blank">
							<img src="res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="" />
							<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
							<?php }elseif($_smarty_tpl->tpl_vars['info_item']->value['file']){?>
							<div><h6><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h6></div>
							<?php }?>
						</a>
					</div>
				<?php } ?>	
				<?php }?>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>