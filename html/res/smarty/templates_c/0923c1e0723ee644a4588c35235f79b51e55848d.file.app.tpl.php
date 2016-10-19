<?php /* Smarty version Smarty-3.1.13, created on 2014-08-08 13:32:27
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2727853d902324ad456-19610320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0923c1e0723ee644a4588c35235f79b51e55848d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\app.tpl',
      1 => 1407490345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2727853d902324ad456-19610320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53d902327619d5_61661132',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'thumbnail' => 0,
    'site_url' => 0,
    'info_title' => 0,
    'info_content' => 0,
    'error' => 0,
    'language' => 0,
    'name' => 0,
    'email' => 0,
    'contact_phone' => 0,
    'address' => 0,
    'recive_type' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d902327619d5_61661132')) {function content_53d902327619d5_61661132($_smarty_tpl) {?><h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
 contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        

<div class="text_center single app">
	<?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
        <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
    <?php }else{ ?>
    
    <?php if ($_smarty_tpl->tpl_vars['thumbnail']->value){?>
    <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/small_<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
" class="standard_image" alt="<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
"/>
	</a>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

    
    <hr class="bottom_rule" />
    
		<script language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/ajax_captcha.js"></script>	
        <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
        <p class="warning"><?php echo $_smarty_tpl->tpl_vars['language']->value['required_notify'];?>
</p>
        <?php }?>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                	<div class="form_container">
                    
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_name'];?>
">
                            <div class="controls">
                                <label for="name" class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['name_surname'];?>
<span>*</span></label><br />
                                <input type="text" id="name" name="name" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                            </div>
                        </div>      
                        
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['email'];?>
">
                            <div class="controls">
                                <label for="email" class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span>*</span></label><br />
                                <input type="text" id="email" name="email" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                            </div>
                        </div> 
                    
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_phone'];?>
">
                            <div class="controls">
                                <label for="contact_phone" class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['contact_phone'];?>
<span>*</span></label><br />
                                <input type="text" id="contact_phone" name="contact_phone" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['contact_phone']->value;?>
"/>
                            </div>
                        </div>  
                    
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_address'];?>
">
                            <div class="controls">
                                <label for="address" class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['address'];?>
<span>*</span></label><br />
                                <input type="text" id="address" name="address" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"/>
                            </div>
                        </div>
                    
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_type'];?>
">
                            <div class="controls">
                            <label class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['recive_type'];?>
<span>*</span></label><br />
                                <label>
                                    <input type="radio" name="recive_type" <?php if ($_smarty_tpl->tpl_vars['recive_type']->value==$_smarty_tpl->tpl_vars['language']->value['recive_electronic']){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['language']->value['recive_electronic'];?>
"/><?php echo $_smarty_tpl->tpl_vars['language']->value['recive_electronic'];?>

                                </label><br />
                                
                                <label>
                                    <input type="radio" name="recive_type" <?php if ($_smarty_tpl->tpl_vars['recive_type']->value==$_smarty_tpl->tpl_vars['language']->value['recive_material']){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['language']->value['recive_material'];?>
"/><?php echo $_smarty_tpl->tpl_vars['language']->value['recive_material'];?>

                                </label><br />
                                
                                <label>
                                    <input type="radio" name="recive_type" <?php if ($_smarty_tpl->tpl_vars['recive_type']->value==$_smarty_tpl->tpl_vars['language']->value['recive_original']){?>checked="checked"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['language']->value['recive_original'];?>
"/><?php echo $_smarty_tpl->tpl_vars['language']->value['recive_original'];?>

                                </label><br />
                            </div>
                        </div>  
                    
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_message'];?>
">
                            <div class="controls">
                                <label for="message" class="description"><?php echo $_smarty_tpl->tpl_vars['language']->value['stat_text'];?>
<span>*</span></label><br />
                                <textarea id="message" name="message" class="input-xxlarge"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                            </div>
                        </div>      
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="file"><?php echo $_smarty_tpl->tpl_vars['language']->value['cv_upload'];?>
</label><br />
                                <input type="file" id="file" name="file[]" multiple="multiple" class="input-xlarge"/>
                                <p><?php echo $_smarty_tpl->tpl_vars['language']->value['file_types'];?>
</p>
                            </div>
                        </div>
                        
                        <div class="control-group <?php echo $_smarty_tpl->tpl_vars['error']->value['required_captcha'];?>
">
                          <div class="controls">
                          	<label class="control-label description"><?php echo $_smarty_tpl->tpl_vars['language']->value['capcha'];?>
<span>*</span></label><br />
                            <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" />
                            <img id="imgCaptcha" src="ajax/create_image.php" height="25" alt="captcha"/>
                          </div>
                        </div>
                        
                        <br />
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-info" name="action">
                                	<span></span><span class="hover"></span><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>

                                </button>
                            </div>
                        </div>
                        
					</div>
                    
                    <p class="full message"><?php echo $_smarty_tpl->tpl_vars['language']->value['required_desc'];?>
</p>
                    </form>
	<?php }?>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>