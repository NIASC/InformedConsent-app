<?php /* Smarty version Smarty-3.1.13, created on 2016-08-19 21:08:05
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3131457b6f2104bd6b2-50412591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edcb45586891a89bcfcd82ced15b2457094e16c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\news_single_page.tpl',
      1 => 1471626481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3131457b6f2104bd6b2-50412591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b6f2106bfc06_99313352',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'info_title' => 0,
    'start_date' => 0,
    'info_img' => 0,
    'info_files' => 0,
    'info_content' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b6f2106bfc06_99313352')) {function content_57b6f2106bfc06_99313352($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
					<p><i><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</i></p>
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
				<?php if ($_smarty_tpl->tpl_vars['info_img']->value&&$_smarty_tpl->tpl_vars['info_files']->value<2){?>
					<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
					</a>
				<?php }?>
                </div>
				<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                <ul class="post-gallery">
					<?php if ($_smarty_tpl->tpl_vars['info_files']->value){?>
						<li class="active col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
							</a>
						</li>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['info_img']->value!=$_smarty_tpl->tpl_vars['image']->value->file){?>
						<li class="col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['image']->value->file;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->name;?>
"/>
							</a>
						</li>
						<?php }?>
					<?php } ?>
					</ul>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>