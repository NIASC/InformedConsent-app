<?php /* Smarty version Smarty-3.1.13, created on 2015-01-22 22:42:43
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\objects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23790538d832d1c4139-62828042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1758df0ba201c9bfffba5595cd749cf1695991f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\objects.tpl',
      1 => 1421399036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23790538d832d1c4139-62828042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_538d832d44ed51_98134885',
  'variables' => 
  array (
    'site_url' => 0,
    'points' => 0,
    'site_data' => 0,
    'language' => 0,
    'info_content' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538d832d44ed51_98134885')) {function content_538d832d44ed51_98134885($_smarty_tpl) {?><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/shape.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/map.js"></script>
<script type="text/javascript">
// This example creates a simple polygon representing the Bermuda Triangle.
var points = [
  <?php echo $_smarty_tpl->tpl_vars['points']->value;?>

];

</script>
        
<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
 upper"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

<div class="text_center single">
    <ul class="map_layers">
    	<li><i><img src="img/4.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['supreme'];?>
"/></i><?php echo $_smarty_tpl->tpl_vars['language']->value['supreme'];?>
</li>
        <li><i><img src="img/2.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['appeal'];?>
"/></i><?php echo $_smarty_tpl->tpl_vars['language']->value['appeal'];?>
</li>
        <li><i><img src="img/3.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['city'];?>
"/></i><?php echo $_smarty_tpl->tpl_vars['language']->value['city'];?>
</li>
        <li><i><img src="img/1.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['magistrates'];?>
"/></i><?php echo $_smarty_tpl->tpl_vars['language']->value['magistrates'];?>
</li>
    </ul>
    <div id="map-canvas" class="large_map"></div>
    <ul class="hidden">
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    	<li id="item_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
        	<div class="info_window">
        	<h2 class="point_title"><?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
</h2>
            <?php if ($_smarty_tpl->tpl_vars['item']->value->thumbnail){?>
            <img src="images/small_<?php echo $_smarty_tpl->tpl_vars['item']->value->thumbnail;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->title;?>
" class="point_thumb"/>
            <?php }?>
        	<?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

            </div>
        </li>
        <?php } ?>
    </ul>
    <hr class="bottom_rule" />
    <a class="back" onclick="window.history.back()"><?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
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