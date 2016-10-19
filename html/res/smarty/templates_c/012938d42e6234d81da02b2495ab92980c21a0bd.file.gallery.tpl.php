<?php /* Smarty version Smarty-3.1.13, created on 2016-09-02 01:17:01
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210514769457b841ab0d1536-37785214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '012938d42e6234d81da02b2495ab92980c21a0bd' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/gallery.tpl',
      1 => 1471707795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210514769457b841ab0d1536-37785214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57b841ab132164_47891451',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'gall_title' => 0,
    'start_date' => 0,
    'info_content' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b841ab132164_47891451')) {function content_57b841ab132164_47891451($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> | <?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
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
					<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

					<ul class="post-gallery">
					<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
						<li class="col-xs-3">
							<a class="fancybox" data-fancybox-group="gallery" href="res/images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
">
								<img class="img-responsive" src="res/images/thumb/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
" />
							</a>
						</li>
					<?php } ?>
					</ul>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>