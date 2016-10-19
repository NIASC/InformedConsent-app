<?php /* Smarty version Smarty-3.1.13, created on 2015-11-25 20:09:57
         compiled from "C:\xampp\htdocs\tbilisisilkroad.ge\smarty\templates\left_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26756558a741062e9c3-56286126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93012e1ebe7ff473455951e26f9e6822c7c36c3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tbilisisilkroad.ge\\smarty\\templates\\left_sidebar.tpl',
      1 => 1448467794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26756558a741062e9c3-56286126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558a74106be4f1_54264918',
  'variables' => 
  array (
    'welcomers' => 0,
    'post' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'banner2' => 0,
    'banner' => 0,
    'banner8' => 0,
    'banner3' => 0,
    'banner5' => 0,
    'banner6' => 0,
    'banner7' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558a74106be4f1_54264918')) {function content_558a74106be4f1_54264918($_smarty_tpl) {?><div class="sidebar left">
        <div class="member-wrap">
            <div class="slider">
                <h1>Welcome</h1>

                <ul>
                	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['welcomers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <li>
                        <div class="image relative">
                            <img src="images/thumb/<?php echo $_smarty_tpl->tpl_vars['post']->value->thumbnail;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
"/>

                            <div class="name absolute">
                                <?php echo $_smarty_tpl->tpl_vars['post']->value->job;?>

                            </div>
                        </div>
                        <div class="text">
                            <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>

                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->slug;?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->info_slug;?>
" class="more right">More...</a>

                        <div class="clear"></div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <br/><br/>
        <a href="http://tbilisisilkroad.ge/uploads/Tbilisi-JointDeclaration.pdf" target="_blank">
        	<img src="img/declaration.jpg" alt="JOINT DECLARATION OF THE TBILISI SILK ROAD FORUM"/>
        </a><br /><br />
        <a href="http://tbilisisilkroad.ge/uploads/FORUM-2015-last.pdf" target="_blank">
        	<img src="images/investment-catalogue.jpg" alt="investment catalogue"/>
		</a><br /><br />
        <a href="http://tbilisisilkroad.ge/uploads/Georgia-Business-Perspectives.pdf" target="_blank">
        	<img src="img/Investment-Climate-Georgia.jpg" alt="Investment Climate Georgia"/>
		</a>

            <?php if (!in_array($_smarty_tpl->tpl_vars['site_data']->value['section_type'],array(1,7,10,22))){?>
        <div class="organizer-supporter-wrap">
        
            <h1>Organizer</h1>
            <div class="wrap">
            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
        
            <h1>Co Organizer</h1>
            <div class="wrap">
            	<?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner8']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            
            <h1>Supporters</h1>
            <div class="wrap">
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            
            <h1>Partners</h1>
            <div class="wrap">
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            
            
            <h1>Sponsors</h1>
            <div class="wrap">
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner6']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            
            
            <h1>Media Partners</h1>
            <div class="wrap">
                <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner7']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value){
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['banner']->value['target'];?>
">
                	<img src="images/<?php echo $_smarty_tpl->tpl_vars['banner']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>
"/>
                </a>
                <?php } ?>
            </div>
            
            
        </div>
            <?php }?>
    </div><?php }} ?>