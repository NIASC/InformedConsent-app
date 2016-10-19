<?php /* Smarty version Smarty-3.1.13, created on 2016-10-19 14:10:01
         compiled from "/Applications/MAMP/htdocs/research/html/themes/default/templates/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48031252558075ffac53e58-79690975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b0f6358c350b58c51320e75457f7548ed54656' => 
    array (
      0 => '/Applications/MAMP/htdocs/research/html/themes/default/templates/slider.tpl',
      1 => 1476872335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48031252558075ffac53e58-79690975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58075ffac6dcd6_87106423',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58075ffac6dcd6_87106423')) {function content_58075ffac6dcd6_87106423($_smarty_tpl) {?><div class="slider">
  <img src="res/images/3988fake-video.png" class="play" style="width:100%;" alt="">
  <div class="slide-content" style="display:none">
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
			<img src="res/images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" style="width:50%" alt="">
		</li>
	  	<?php } ?>
    </ul>
  </div>
  <button class="btn btn-link btn-slider-prev" disabled="" style="display:none">
  	<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 
  </button>
  <button class="btn btn-link btn-slider-next" style="display:none"> 
  	<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
  </button>
</div>
<?php }} ?>