<?php /* Smarty version Smarty-3.1.13, created on 2016-09-22 15:20:03
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/publication_single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131562577757d6b476152630-67555623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83431f0fa2dedb92612a7900802006baa45b1741' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/research/html/themes/default/templates/publication_single.tpl',
      1 => 1473691817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131562577757d6b476152630-67555623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57d6b47621bae9_97232218',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'info_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d6b47621bae9_97232218')) {function content_57d6b47621bae9_97232218($_smarty_tpl) {?><section id="news" class="container-fluid section">
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
                <div class="col-xs-8 col-sm-offset-0 col-sm-3">
				<?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
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

				<?php if ($_smarty_tpl->tpl_vars['info_description']->value){?>
                <iframe class="pdf_window" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
res/docs/<?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
"></iframe>
                <?php }?>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><?php }} ?>