<?php /* Smarty version Smarty-3.1.13, created on 2015-12-23 04:33:53
         compiled from "C:\xampp\htdocs\event42\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2265566fcd7e541167-42211584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f84c763b4b2a4bac07dd23ab13ba3d021384418' => 
    array (
      0 => 'C:\\xampp\\htdocs\\event42\\smarty\\templates\\contact_page.tpl',
      1 => 1450830813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2265566fcd7e541167-42211584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_566fcd7e76f4a4_93688503',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fcd7e76f4a4_93688503')) {function content_566fcd7e76f4a4_93688503($_smarty_tpl) {?><div class="contact-wrapper">
    <main role="main">
        <div class="contact-image"><img src="img/contact-image-left.png"/></div>
        <div class="contact-container">
            <h1><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h1>
            <div class="contact-box">
                <div class="message-box">
                    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                    <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
                    <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    <?php }?>
                  <form class="message-form" method="post">          
                    <div class="input">
                      <label><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</label><input type="text" name="name" autofocus/>
                    </div>
                    <div class="input">
                      <label><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
</label><input type="text" name="email"/>
                    </div>
                    <div class="input">
                      <label><?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
</label><input type="text" name="phone"/>
                    </div>
                    <div class="input-textarea">
                      <label><?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
</label><br/>
                      <textarea></textarea>
                      <input type="submit" value="SEND" name="action"/>
                    </div>
                  </form>
                </div>
                <div class="contact-info">
                  <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                </div>
            </div>
        </div>
    </main>
</div>
<script type="text/javascript">
	$(document).ready(function(e) {
        
    });
</script><?php }} ?>