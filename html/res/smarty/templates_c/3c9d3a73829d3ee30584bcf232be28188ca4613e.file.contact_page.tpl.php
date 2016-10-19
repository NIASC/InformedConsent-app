<?php /* Smarty version Smarty-3.1.13, created on 2013-12-05 18:34:45
         compiled from "C:\xampp\htdocs\aig\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200735295c3ab3a90b4-28151707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9d3a73829d3ee30584bcf232be28188ca4613e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\contact_page.tpl',
      1 => 1386254083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200735295c3ab3a90b4-28151707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5295c3ab4a64f9_52379453',
  'variables' => 
  array (
    'site_data' => 0,
    'language' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'subject' => 0,
    'message' => 0,
    'info_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295c3ab4a64f9_52379453')) {function content_5295c3ab4a64f9_52379453($_smarty_tpl) {?>
		<div class="content_wrapper contact">
			<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <div class="contact_form_container">
                <form class="form-horizontal" method="post">
                        <div class="control-group">
                            <div class="controls">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['language']->value['name_lastname'];?>
<span>*</span></label><br />
                                <input type="text" id="name" name="name" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                                <p class="help-block"></p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span>*</span></label><br />
                                <input type="text" id="email" name="email" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                                <p class="help-block"></p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="phone"><?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
</label><br />
                                <input type="text" id="phone" name="phone" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/>
                                <p class="help-block"></p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="subject"><?php echo $_smarty_tpl->tpl_vars['language']->value['subject'];?>
<span>*</span></label><br />
                                <input type="text" id="subject" name="subject" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
"/>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <div class="textarea">
                                    <label for="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
<span>*</span></label><br />
                                    <textarea name="message" id="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                                </div>
                            </div>
                        </div>
                        
                        <br />
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-info <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli" name="action">
                                	<span></span><span class="hover"></span><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>

                                </button>
                            </div>
                        </div>
                        
                    </form>
				</div>
                <div class="contact_text"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</div>
		</div>     
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>