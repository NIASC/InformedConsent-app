<?php /* Smarty version Smarty-3.1.13, created on 2015-04-20 15:48:26
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\text_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19739550c39976cc667-26125318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f53069eb3f1102d652300daefd1929c71711c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\text_page.tpl',
      1 => 1429530500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19739550c39976cc667-26125318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_550c39978b0ad3_21708585',
  'variables' => 
  array (
    'info_title' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550c39978b0ad3_21708585')) {function content_550c39978b0ad3_21708585($_smarty_tpl) {?><div class="container news-full">
    <!-- LEFT -->

    <div class="left">
        <div class="news-container">
            <h1><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
            
            <div class="desc">
                <?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
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
</script> 
    <?php }} ?>