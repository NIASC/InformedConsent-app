<?php /* Smarty version Smarty-3.1.13, created on 2015-08-05 17:29:55
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:803321850558bf5325a1a13-70423565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '654436b55b4ac8c0c66b308065f0900df5955daa' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/list_single_page.tpl',
      1 => 1438781454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803321850558bf5325a1a13-70423565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558bf5325fb264_79850750',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_thumbnail' => 0,
    'info_title' => 0,
    'job' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558bf5325fb264_79850750')) {function content_558bf5325fb264_79850750($_smarty_tpl) {?><div class="content left list-single">
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>
	<?php if ($_smarty_tpl->tpl_vars['info_thumbnail']->value){?>
		<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/thumb/<?php echo $_smarty_tpl->tpl_vars['info_thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
		</a>
	<?php }?>
        <h2 class="name"><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
		<div class="position"><?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</div>
        <div class="desc">
        	<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

        </div>
        <div class="clear"></div>
</div>

    <script type="text/javascript">
	$(document).ready(function(e) {
		$('body,html').animate({
					scrollTop: $('.content.left.list-single').offset().top-500
				}, 500);
				
	});
	</script> 
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>