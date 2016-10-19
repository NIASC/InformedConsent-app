<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 20:13:13
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\gallery_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2288558a999da9e339-46210823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '711985d3d589cb9a41e8eb2b3a579667d6e8fbee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\gallery_list.tpl',
      1 => 1448467955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2288558a999da9e339-46210823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558a999dc52cd2_92627549',
  'variables' => 
  array (
    'site_data' => 0,
    'group' => 0,
    'site_url' => 0,
    'g' => 0,
    'pages' => 0,
    'page' => 0,
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
<?php if ($_valid && !is_callable('content_558a999dc52cd2_92627549')) {function content_558a999dc52cd2_92627549($_smarty_tpl) {?><div class="content right">
        <div class="speakers-main-list gallery">
            <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            
            <ul class="left">
            	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['g']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['g']->index++;
?> 
                <li <?php if ($_smarty_tpl->tpl_vars['g']->index%4==3){?>class="forth"<?php }?>>                    
                    <div class="image"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
"><img src="images/thumbnail_<?php echo $_smarty_tpl->tpl_vars['g']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
"/></a></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
?gallery_id=<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
">
                        <div class="name upper"><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</div>
                    </a>
                </li>        
                <?php } ?>
            </ul>
            
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
            
            <div class="clear"></div>
            
            
        
        </div>
        
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