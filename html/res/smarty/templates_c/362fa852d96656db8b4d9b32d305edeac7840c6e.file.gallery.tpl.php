<?php /* Smarty version Smarty-3.1.13, created on 2015-05-13 14:33:35
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1777255532607939b42-54271131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '362fa852d96656db8b4d9b32d305edeac7840c6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\gallery.tpl',
      1 => 1431513210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777255532607939b42-54271131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55532607a55901_29226121',
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
<?php if ($_valid && !is_callable('content_55532607a55901_29226121')) {function content_55532607a55901_29226121($_smarty_tpl) {?><div class="center-wrap main second-font">
    <div class="clear"></div>
</div>
<div class="center-wrap main-wrap gallery second-font">
    <h1 class="upper">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>

	</h1>
    <ul class="gallery-list">
    	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['g']->index%4==3){?>class="four"<?php }?>>
            <div class="image">
            	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
                <img width="256" height="170" class="rsTmb" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
"/>
                </a>
            </div>
        </li>
		<?php } ?>
    </ul>
    <div class="clear"></div>
</div><?php }} ?>