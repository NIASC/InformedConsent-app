<?php /* Smarty version Smarty-3.1.13, created on 2014-05-01 16:20:18
         compiled from "C:\xampp\htdocs\dccc\smarty\templates\video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:518453622fb4595116-79345181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8130009b6ba70f65bc330e5ba8f992967f47825' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dccc\\smarty\\templates\\video_gallery.tpl',
      1 => 1398946816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '518453622fb4595116-79345181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53622fb46d4935_90034566',
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'g' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53622fb46d4935_90034566')) {function content_53622fb46d4935_90034566($_smarty_tpl) {?><script type="text/javascript" src="jwplayer/jwplayer.js" ></script>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";</script>
<div id="container-left" class="single_pattenr">

	<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_title'];?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_description'];?>

    
    <ul class="video">
    <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
    <li>
		<div id="#video<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">Loading the player...</div>
		<script type="text/javascript">
			jwplayer("#video<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
").setup({
			file: "<?php echo $_smarty_tpl->tpl_vars['g']->value['embed'];?>
",		
			image: "<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['g']->value['image'];?>
",
			width: 384,
			'autostart': 'false'
			});
		</script>
	</li> 
	<?php } ?>  
    </ul>  
</div><?php }} ?>