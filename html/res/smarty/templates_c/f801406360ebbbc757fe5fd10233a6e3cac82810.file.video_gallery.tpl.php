<?php /* Smarty version Smarty-3.1.13, created on 2015-01-18 01:29:26
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:778353a2e44772f095-21546945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f801406360ebbbc757fe5fd10233a6e3cac82810' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\video_gallery.tpl',
      1 => 1421420468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '778353a2e44772f095-21546945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53a2e447884c55_38804693',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'navigator' => 0,
    'group' => 0,
    'g' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2e447884c55_38804693')) {function content_53a2e447884c55_38804693($_smarty_tpl) {?><h1 class="headline upper"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['navigator']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> → <?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_title'];?>
</h1>

<div class="text_center single">	
    <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_description'];?>
</span>
	<script type="text/javascript" src="jwplayer/jwplayer.js" ></script>
    <script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";</script>
    
    <ul class="video gallery">
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
                width: 270,
				height: 200,
                'autostart': 'false'
                });
            </script>
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