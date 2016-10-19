<?php /* Smarty version Smarty-3.1.13, created on 2013-12-18 12:36:41
         compiled from "C:\xampp\htdocs\aig\smarty\templates\membership.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688452a079a3334ec2-81011649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9c05d5e194b17b775cfe411b6dba0a227613086' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\membership.tpl',
      1 => 1387355798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688452a079a3334ec2-81011649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52a079a34d9622_01278075',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'warning' => 0,
    'language' => 0,
    'name' => 0,
    'error' => 0,
    'lastname' => 0,
    'address' => 0,
    'membership_app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a079a34d9622_01278075')) {function content_52a079a34d9622_01278075($_smarty_tpl) {?>		
        <div class="content_wrapper contact">
			<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
            <p class="warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</p>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                	<div class="form_container">
                    
                        <div class="control-group">
                            <div class="controls">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
<span>*</span></label><br />
                                <input type="text" id="name" name="name" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['name'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="lastname"><?php echo $_smarty_tpl->tpl_vars['language']->value['surname'];?>
<span>*</span></label><br />
                                <input type="text" id="lastname" name="lastname" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['lastname'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="address"><?php echo $_smarty_tpl->tpl_vars['language']->value['address'];?>
<span>*</span></label><br />
                                <input type="text" id="address" name="address" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['address'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="application"><?php echo $_smarty_tpl->tpl_vars['language']->value['membership_app_upload'];?>
</label><br />
                                <label for="application" id="label_application" class="upload_button <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                                	<?php echo $_smarty_tpl->tpl_vars['language']->value['upload'];?>

                                </label>
                                <input type="file" id="application" name="application" class="input-xlarge"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['application'];?>
</p>
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
                        
					</div>
                    
                    <div class="form_container">
                    
                    	<div class="download_form">
                            <div class="controls">
                            	<?php echo $_smarty_tpl->tpl_vars['language']->value['attached_file'];?>
<br /><br />
                                <a href="<?php echo $_smarty_tpl->tpl_vars['membership_app']->value;?>
" target="_blank"><img src="img/download.png"/></a>
                                <p class="help-block"></p>
                            </div>
                        </div>      
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="cv"><?php echo $_smarty_tpl->tpl_vars['language']->value['cv_upload'];?>
</label><br />
                                <label for="cv" id="label_cv" class="upload_button <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli">
                                	<?php echo $_smarty_tpl->tpl_vars['language']->value['upload'];?>

                                </label>
                                <input type="file" id="cv" name="cv" class="input-xlarge"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['cv'];?>
</p>
                            </div>
                        </div>
                          
                    </div>
                    </form>
		</div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>