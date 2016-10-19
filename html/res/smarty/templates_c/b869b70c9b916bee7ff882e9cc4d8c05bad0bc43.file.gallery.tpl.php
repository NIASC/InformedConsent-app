<?php /* Smarty version Smarty-3.1.13, created on 2015-02-04 14:31:41
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29484537f48b84198e4-68895221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b869b70c9b916bee7ff882e9cc4d8c05bad0bc43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\gallery.tpl',
      1 => 1422452253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29484537f48b84198e4-68895221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537f48b86004e2_36989309',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'gall_title' => 0,
    'gall_desc' => 0,
    'group' => 0,
    'g' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537f48b86004e2_36989309')) {function content_537f48b86004e2_36989309($_smarty_tpl) {?><h1 class="headline upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> → <?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h1>

<div class="text_center single non_transparent">	
    <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['gall_desc']->value;?>
</span>
    
    <ul class="gallery">
    
		<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?>
			<?php if (($_smarty_tpl->tpl_vars['g']->index+1)%3==0){?>
		<li class="trim">
            <?php }else{ ?>
		<li>
            <?php }?>
			<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
" />
            </a>
		</li>      
		<?php } ?>
            
	</ul>
    
    <hr class="bottom_rule" />
    <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>    
    <ul class="social_action">
        <li class="fb"><div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
	</ul>
    
</div>   
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>