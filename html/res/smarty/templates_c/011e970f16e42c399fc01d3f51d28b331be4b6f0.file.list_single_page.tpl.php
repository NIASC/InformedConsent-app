<?php /* Smarty version Smarty-3.1.13, created on 2015-04-20 15:19:50
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\list_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23950552e2a828ca630-71441988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011e970f16e42c399fc01d3f51d28b331be4b6f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\list_single_page.tpl',
      1 => 1429524532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23950552e2a828ca630-71441988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_552e2a829d03a2_25650943',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'info_thumbnail' => 0,
    'info_title' => 0,
    'job' => 0,
    'info_description' => 0,
    'ppt' => 0,
    'pdf' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e2a829d03a2_25650943')) {function content_552e2a829d03a2_25650943($_smarty_tpl) {?><div class="container board-full">
    <h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a></h1>
    <div class="top-wrap">
        <div class="image">
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
        </div>
        <div class="right-wrap">
            <h2><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h2>
            <div class="position"><?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</div>
            <div class="desc"><?php echo $_smarty_tpl->tpl_vars['info_description']->value;?>
</div>
            <div class="icons">
                <div class="icons-left">
                	<a href="#"><i class="icon fb"></i></a>
                    <a href="#"><i class="icon twitter"></i></a>
                    <a href="#"><i class="icon linked"></i></a>
				</div>
                <div class="icons-right">
                	<?php if ($_smarty_tpl->tpl_vars['ppt']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['ppt']->value;?>
" target="_blank"><i class="icon ppt"></i></a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['pdf']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['pdf']->value;?>
" target="_blank"><i class="icon pdf"></i></a><?php }?>
				</div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="wrap">
        <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    </div>
    <div class="clear"></div>
</div>

<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.board-full').offset().top-100
			}, 800);
			
});
</script>  <?php }} ?>