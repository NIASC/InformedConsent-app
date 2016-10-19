<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 20:11:24
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2222355896fd9556a06-00302974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7966da79b697a43698950ea5c3630401eb941785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\main_page.tpl',
      1 => 1448467854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2222355896fd9556a06-00302974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55896fd977dc73_39125627',
  'variables' => 
  array (
    'about' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'agenda' => 0,
    'news_block' => 0,
    'index' => 0,
    'info' => 0,
    'banner1' => 0,
    'item' => 0,
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
<?php if ($_valid && !is_callable('content_55896fd977dc73_39125627')) {function content_55896fd977dc73_39125627($_smarty_tpl) {?>	<div class="content right">
        <div class="about-main">
            <h1><?php echo $_smarty_tpl->tpl_vars['about']->value->name;?>
</h1>
            <div class="desc">
                <?php echo $_smarty_tpl->tpl_vars['about']->value->description;?>

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['agenda']->value->slug;?>
">
                <div class="agenda second-font right">
                    <i class="icons agenda-icon"></i>
                    <span><span><?php echo $_smarty_tpl->tpl_vars['agenda']->value->name;?>
</span></span>
                </div>
            </a>
            <div class="clear"></div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['news_block']->value){?>
        <div class="speakers-main-list">
            <h1><?php echo $_smarty_tpl->tpl_vars['news_block']->value[0]['section_name'];?>
</h1>
            <ul class="left">
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                <li <?php if ($_smarty_tpl->tpl_vars['index']->value%4==3){?> class="forth"<?php }?>>
                    <div class="image">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
">
                        <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['info']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
"/></a>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['section_slug'];?>
/<?php echo $_smarty_tpl->tpl_vars['info']->value['info_slug'];?>
">
                        <div class="name upper"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 -</div>
                        <div class="position"><?php echo $_smarty_tpl->tpl_vars['info']->value['position'];?>
</div>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <a class="right all-speakers-main" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['news_block']->value[0]['section_slug'];?>
">See all Speakers</a>
            <div class="clear"></div>
        </div>
        <?php }?>

        <ul class="banners left">
        	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banner1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li <?php if (count($_smarty_tpl->tpl_vars['banner1']->value)==$_smarty_tpl->tpl_vars['index']->value+1){?> class="last" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
">
                <span><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['description']);?>
</span>
                <span class="middle"></span>
                <i class="icons corner-icon"></i>
            </a>
            </li>
			<?php } ?>
        </ul>
        
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
	</div><?php }} ?>