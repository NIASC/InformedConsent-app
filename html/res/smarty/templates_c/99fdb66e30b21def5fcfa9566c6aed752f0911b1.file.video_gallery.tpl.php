<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 20:20:58
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\video_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152156559661a6e428-91729039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99fdb66e30b21def5fcfa9566c6aed752f0911b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\video_gallery.tpl',
      1 => 1448468456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152156559661a6e428-91729039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56559661d89c89_17229173',
  'variables' => 
  array (
    'site_url' => 0,
    'site_data' => 0,
    'group' => 0,
    'g' => 0,
    'language' => 0,
    'banner9' => 0,
    'banner' => 0,
    'banner10' => 0,
    'banner11' => 0,
    'banner6' => 0,
    'banner5' => 0,
    'banner7' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56559661d89c89_17229173')) {function content_56559661d89c89_17229173($_smarty_tpl) {?><div class="content right">
	<div class="gallery-full">
    	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</a> / <?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_title'];?>
</h1>
        
        <span class="gall_desc"><?php echo $_smarty_tpl->tpl_vars['group']->value[0]['album_description'];?>
</span>
        <script type="text/javascript" src="jwplayer/jwplayer.js" ></script>
        <script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";</script>
        
        <ul class="video gallery">
            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?>   
            <?php if (($_smarty_tpl->tpl_vars['g']->index+1)%2==0){?>
            <li class="right">
            <?php }else{ ?>
            <li>
            <?php }?>
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
                <p><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</p>
            </li> 
            <?php } ?>  
        </ul> 
        
        <hr class="bottom_rule" />
        
        <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
        
        <div class="left central-banner">
        	<ul class="wrap group-wrap">
            <?php if ($_smarty_tpl->tpl_vars['banner9']->value){?>
            <li>
                <h1>Organizer</h1>
                <ul class="wrap">
                    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner9']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                    </a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['banner10']->value){?>
        	<li>
                <h1>Co Organizer</h1>
                <ul class="wrap">
                    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner10']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                    </a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['banner11']->value){?>
            <li>
                <h1>Supporters</h1>
                <ul class="wrap">
                    <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner11']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                    </a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php }?>
        	</ul>
    	<h1>Sponsors</h1>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner6']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a></li>
			<?php } ?>
		</ul>
        <br />
        <div class="clear"></div>
                
		<h1>Partners</h1>
        <ul>
        	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" height="50" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a></li>
			<?php } ?>
		</ul>
        <br />
        <div class="clear"></div>
                
		<h1>Media Partners</h1>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner7']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
"><img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/></a></li>
		<?php } ?>
		</ul>
        <br />
        <div class="clear"></div>
	</div>
         
    </div>
</div><?php }} ?>