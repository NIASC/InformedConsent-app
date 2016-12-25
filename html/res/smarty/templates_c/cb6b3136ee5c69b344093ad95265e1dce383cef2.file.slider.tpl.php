<?php /* Smarty version Smarty-3.1.13, created on 2016-12-25 20:26:35
         compiled from "/Applications/MAMP/htdocs/InformedConsent-app/html/themes/default/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300825501581f270eb18a04-84522605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6b3136ee5c69b344093ad95265e1dce383cef2' => 
    array (
      0 => '/Applications/MAMP/htdocs/InformedConsent-app/html/themes/default/templates/slider.tpl',
      1 => 1481644454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300825501581f270eb18a04-84522605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_581f270eb2b3f7_71799685',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581f270eb2b3f7_71799685')) {function content_581f270eb2b3f7_71799685($_smarty_tpl) {?><div class="slider">
  <div class="slide-content">
    <ul class="slides">
		<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['banner']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
 $_smarty_tpl->tpl_vars['banner']->iteration++;
?>
		<li data-step="<?php echo $_smarty_tpl->tpl_vars['banner']->iteration;?>
" class="active">
			<div class="animation-text">
				<span></span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['banner']->value['title']);?>

			</div>
			<a href="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" class="fancy"><img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" style="width:50%" alt=""></a>
		</li>
	  	<?php } ?>
    </ul>
  </div>
  <button class="btn btn-link btn-slider-prev" disabled="">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link playbtn">
  	<span class="glyphicon glyphicon glyphicon-play" style="font-size:20px" aria-hidden="true"></span>
  </button>
  <button class="btn btn-link btn-slider-next">
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
</div>
<?php }} ?>