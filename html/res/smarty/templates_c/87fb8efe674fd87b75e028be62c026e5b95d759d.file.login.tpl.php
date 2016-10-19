<?php /* Smarty version Smarty-3.1.13, created on 2015-08-06 13:12:11
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173764376455c324eb04a939-77935366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87fb8efe674fd87b75e028be62c026e5b95d759d' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/login.tpl',
      1 => 1438775807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173764376455c324eb04a939-77935366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notification' => 0,
    'item' => 0,
    'error' => 0,
    'warning' => 0,
    'recovery' => 0,
    'post' => 0,
    'site_url' => 0,
    'site_data' => 0,
    'reg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55c324eb0ba5e6_68323314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c324eb0ba5e6_68323314')) {function content_55c324eb0ba5e6_68323314($_smarty_tpl) {?><div class="main-wrap speakers">
	<div class="register">
    
    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notification']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <p class="notification success"><i></i><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</p>
    <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <ul class="notification danger">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
    <?php } ?>
    </ul>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['notification']->value||$_smarty_tpl->tpl_vars['error']->value||$_smarty_tpl->tpl_vars['warning']->value){?>
    <script type="text/javascript">
	$(document).ready(function(e) {
		$('body,html').animate({
					scrollTop: $('.register').offset().top-100
				}, 800);
				
	});
	</script> 			 
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['recovery']->value){?>
    <form class="register-form" method="post">
    	<ul class="sections">
        	<li class="general">
              <div class="input-wrap">
                  <div class="left">
                      <label>Enter email*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="email" class="email" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
"/>
                  </div>
                  <div class="right button-wrap"><br /><br />
            			<input type="submit" name="action" value="Send"/>
                  </div>
              </div>
          </li>
      </ul>
    </form>
    <?php }else{ ?>
	<form class="register-form" method="post">
    	<ul class="sections">
        	<li class="general">
          		<div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value['please_activate'];?>
</div>
              <div class="input-wrap small">
                  <div class="left">
                      <label>Email*</label>
                  </div>
                  <div class="right">
                      <input type="text" name="email" class="email" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap small">
                  <div class="left">
                      <label>Password*</label>
                  </div>
                  <div class="right">
                      <input type="password" name="password"  class="password required" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['password'];?>
"/>
                  </div>
              </div>
              <div class="input-wrap small">
                  <div class="left">
                      <span style="margin-right:-5px"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['reg']->value->slug;?>
" class="registration-btn">Register</a> |</span>
                  </div>
                  <div class="right">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/sign-in?recovery">Forgot your password?</a>
                  </div>
              </div>              
              <div class="input-wrap small">
                  <div class="left"></div>
                  <div class="right button-wrap">
                      <input type="submit" name="action" value="Sign in"/>
                  </div>
              </div>              
              
          </li>
      </ul>
    </form>
    <?php }?>
  </div>
<div class="clear"></div>
</div><?php }} ?>