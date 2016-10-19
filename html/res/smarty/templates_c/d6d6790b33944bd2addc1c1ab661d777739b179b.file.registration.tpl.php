<?php /* Smarty version Smarty-3.1.13, created on 2016-05-19 16:28:57
         compiled from "C:\xampp\htdocs\moe\smarty\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163815728e99fef1220-27997051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d6790b33944bd2addc1c1ab661d777739b179b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe\\smarty\\templates\\registration.tpl',
      1 => 1463660932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163815728e99fef1220-27997051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5728e9a0052168_89729143',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'error' => 0,
    'info' => 0,
    'notification' => 0,
    'post' => 0,
    'language' => 0,
    'regions' => 0,
    'index' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5728e9a0052168_89729143')) {function content_5728e9a0052168_89729143($_smarty_tpl) {?><div id="content" class="post-list">
	<div class="container"> 
		<h3 class="page-title"><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
		<div class="row page-content">
			<div class="col-md-9">
            <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
            	<ul class="error">
            	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
                <?php } ?>
                </ul>
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
            <ul class="notification">
            <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notification']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
            <?php } ?>
            </ul>
            <?php }else{ ?>
				<form id="contact-form" method="post">
                	<div class="text-input">
                    	<div class="float-input">
							<input name="name" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['fullname'];?>
">
							<span><i class="fa fa-user"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="email" id="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
">
							<span><i class="fa fa-envelope"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="age" id="age" type="text" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['age'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['age'];?>
">
							<span><i class="fa fa-calendar" aria-hidden="true"></i></span>
						</div>
                        
                        <div class="float-input">
							<input name="tel" id="tel" type="text" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['phone'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
">
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
						</div>
					</div>
                    
                    <select class="form-control" id="sel1" name="region">
                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['language']->value['region'];?>
</option>
                    	<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value){
$_smarty_tpl->tpl_vars['region']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['region']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['index']->value==$_smarty_tpl->tpl_vars['post']->value['region']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['region']->value;?>
</option>
                        <?php } ?>
					</select>	
                    <div class="msg2 message"></div>
                    <input type="submit" name="submit" class="submit_contact main-form" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['registration'];?>
">

				</form>
			<?php }?>   
			
			<?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
         
			</div>	
            
			<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
</div>





<?php }} ?>