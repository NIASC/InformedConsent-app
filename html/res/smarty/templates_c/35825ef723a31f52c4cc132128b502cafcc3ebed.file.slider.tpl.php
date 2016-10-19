<?php /* Smarty version Smarty-3.1.13, created on 2016-10-18 19:55:28
         compiled from "C:\xampp\htdocs\research\html\themes\default\templates\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:260057f4a67d10ea92-46985118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35825ef723a31f52c4cc132128b502cafcc3ebed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\research\\html\\themes\\default\\templates\\slider.tpl',
      1 => 1476813324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260057f4a67d10ea92-46985118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57f4a67d112910_21396606',
  'variables' => 
  array (
    'slider_banner' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4a67d112910_21396606')) {function content_57f4a67d112910_21396606($_smarty_tpl) {?><div class="slider">
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
  <button class="btn btn-link btn-slider-prev" disabled="" style="display:none">&lt-- Previos</button>
  <button class="btn btn-link btn-slider-next" style="display:none">Next --&gt</button>
</div>
<?php }} ?>