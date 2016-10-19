<?php /* Smarty version Smarty-3.1.13, created on 2015-05-15 14:02:46
         compiled from "C:\xampp\htdocs\ibm\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265255551f6c7db8153-62763623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fd3e1894f9956fddd0ff9ac4ce3250a38e5e65b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibm\\smarty\\templates\\contact_page.tpl',
      1 => 1431684165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265255551f6c7db8153-62763623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5551f6c7f25345_16296597',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551f6c7f25345_16296597')) {function content_5551f6c7f25345_16296597($_smarty_tpl) {?><div class="center-wrap main second-font">
    <div class="clear"></div>
</div>
<div class="center-wrap main-wrap contact second-font">
    <h1 class="upper left"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <div class="left-right-wrap">
    <div class="left">
        <form class="contact-form">
        <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
        <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
        <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        <?php }?>
            <input type="text" class="upper" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
*"/>
            <input type="text" class="upper" name="lastname" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['lastname'];?>
"/>
            <input type="text" class="upper" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
*"/>

            <textarea name="message" class="upper" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
*"></textarea>
            <input type="submit" name="action" class="upper btn" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
"/>
        </form>
    </div>
    
    <!-- RIGHT-->
	<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
    <!-- END RIGHT -->
    </div>
    <div class="clear"></div>
</div>
  <?php }} ?>