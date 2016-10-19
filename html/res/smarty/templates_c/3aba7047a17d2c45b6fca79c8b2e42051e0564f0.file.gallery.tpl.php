<?php /* Smarty version Smarty-3.1.13, created on 2016-01-11 15:39:04
         compiled from "C:\xampp\htdocs\event42\smarty\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29159566983b5d70af1-72849770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aba7047a17d2c45b6fca79c8b2e42051e0564f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\gallery.tpl',
      1 => 1452260225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29159566983b5d70af1-72849770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_566983b66c5247_62593106',
  'variables' => 
  array (
    'gall_title' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'site_data' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566983b66c5247_62593106')) {function content_566983b66c5247_62593106($_smarty_tpl) {?><main role="main">
	<h1><?php echo $_smarty_tpl->tpl_vars['gall_title']->value;?>
</h1>
    <div class="ceremony-images-container">
    	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
		<div class="ceremony-image">
            <div class="ceremony-image-wrapper">
              <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
">
              	<img src="images/small_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
"/>
              </a>
            </div>
		</div>
      	<?php } ?>
      <div class="cl-b"></div>
		<?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
            <ul class="pagination">
                <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['site_data']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>
                <li><a class="shadow active" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <?php }else{ ?>
                <li><a class="shadow" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                <?php }?>
                <?php } ?>
            </ul>
		<?php }?>
    </div>
</main>

<script type="text/javascript">
	$(document).ready(function(e) {
		var Width = $('.ceremony-image').width();
		$(".ceremony-image").each(function( index ) {
			$(this).height(Width*7/11);
		});
    });
	
	$( window ).resize(function() {
		var Width = $('.ceremony-image').width();
		$(".ceremony-image").each(function( index ) {
			$(this).height(Width*7/11);
		});
	});
</script>
<?php }} ?>