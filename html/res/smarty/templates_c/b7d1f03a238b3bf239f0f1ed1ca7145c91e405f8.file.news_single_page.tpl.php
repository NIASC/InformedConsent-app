<?php /* Smarty version Smarty-3.1.13, created on 2015-05-12 15:10:13
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\news_single_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31895551df9540aed1-62703034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d1f03a238b3bf239f0f1ed1ca7145c91e405f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\news_single_page.tpl',
      1 => 1429528771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31895551df9540aed1-62703034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_title' => 0,
    'start_date' => 0,
    'info_img' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551df95566c59_50657788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551df95566c59_50657788')) {function content_5551df95566c59_50657788($_smarty_tpl) {?><div class="container news-full">
    <!-- LEFT -->

    <div class="left">
        <div class="news-container">
            <h1><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>

            <div class="date second-font upper"><?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
</div>
            <div class="desc">
                <?php if ($_smarty_tpl->tpl_vars['info_img']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['info_img']->value;?>
" width="100%" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
                </a>
                <?php }?> 
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>

            <a class="back upper" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
            <?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
    </div>

    <!-- END LEFT -->

    <!-- RIGHT-->

    <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- END RIGHT -->

    <div class="clear"></div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.news-full').offset().top-100
			}, 800);
			
});
</script> <?php }} ?>