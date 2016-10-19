<?php /* Smarty version Smarty-3.1.13, created on 2015-04-20 15:24:47
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21027552645918e4567-89549405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec1d7694daad66545889f79df1a0ac798ecb7070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\gallery.tpl',
      1 => 1429529086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21027552645918e4567-89549405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55264591aab028_27727086',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'gall_title' => 0,
    'group' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55264591aab028_27727086')) {function content_55264591aab028_27727086($_smarty_tpl) {?><div class="container news-full">
	<h1 class="headline upper">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a>
    </h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h2>
    <div id="gallery-1" class="royalSlider rsDefault">
    	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
        <a class="rsImg bugaga" data-rsBigImg="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
">
            <img width="96" height="72" class="rsTmb" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
"/>
        </a>  
		<?php } ?>
    </div> 

    <div class="clear"></div>
</div>
<script src="js/jquery.royalslider.min.js?v=9.3.6"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
  $('#gallery-1').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 450,
    loop: false,
    imageScaleMode: 'fit-if-smaller',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: true,
    globalCaptionInside: false,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 4
    }
  });
  
  $('body,html').animate({
				scrollTop: $('.container.news-full').offset().top-70
			}, 800);
});

</script><?php }} ?>