<?php /* Smarty version Smarty-3.1.13, created on 2013-05-22 13:51:25
         compiled from "C:\xampp\htdocs\judo\smarty\templates\main_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871651554fc30d1615-29488379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae9aa6b8951d3edf490f5545de0239be16a3294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\judo\\smarty\\templates\\main_page.tpl',
      1 => 1369216265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871651554fc30d1615-29488379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51554fc3145992_22605542',
  'variables' => 
  array (
    'info_slider' => 0,
    'site_url' => 0,
    'info_item' => 0,
    'site_data' => 0,
    'info_important' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51554fc3145992_22605542')) {function content_51554fc3145992_22605542($_smarty_tpl) {?><div id="middle">
    	<div id="sliderContainer">
            <div id="mySlides">
            	<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']++;
?>
                
                <div id="slide<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['info']['index'];?>
" class="slide">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
" />
                    <div class="slideContent">
                      <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</a></h3>
                      <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                    </div>
                </div>
                <?php } ?>
              
            </div>
            <div id="myController">
                <?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']++;
?>  
                          
                <span class="jFlowControl"></span>
                
            	<?php } ?>
            </div>
            <div class="jFlowPrev"></div>
            <div class="jFlowNext"></div>
		</div>
        <div class="content">
        	<?php  $_smarty_tpl->tpl_vars['info_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_important']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['info_item']->key => $_smarty_tpl->tpl_vars['info_item']->value){
$_smarty_tpl->tpl_vars['info_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['info']['index']++;
?>
           		<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['foreach']['info']['index'] / 1)){?>
            <div class="item even">
            	<?php }else{ ?>
            <div class="item">
            	<?php }?>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['section_slug'];?>
?info_id=<?php echo $_smarty_tpl->tpl_vars['info_item']->value['id'];?>
">
            	<div class="thumb"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['info_item']->value['thumbnail'];?>
"/></div>
                <h3><?php echo $_smarty_tpl->tpl_vars['info_item']->value['title'];?>
</h3>
                <?php echo $_smarty_tpl->tpl_vars['info_item']->value['description'];?>

                </a>        
            </div>
            
            <?php } ?>            
        </div>
    </div><?php }} ?>