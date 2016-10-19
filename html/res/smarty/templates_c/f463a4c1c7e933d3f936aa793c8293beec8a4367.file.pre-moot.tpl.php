<?php /* Smarty version Smarty-3.1.13, created on 2014-01-18 21:16:39
         compiled from "C:\xampp\htdocs\aig\smarty\templates\pre-moot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5930529f488c5a4315-38623824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f463a4c1c7e933d3f936aa793c8293beec8a4367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aig\\smarty\\templates\\pre-moot.tpl',
      1 => 1390006754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5930529f488c5a4315-38623824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529f488c64f9d4_52778289',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'language' => 0,
    'university' => 0,
    'error' => 0,
    'contact_person' => 0,
    'email' => 0,
    'pre_moot_app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529f488c64f9d4_52778289')) {function content_529f488c64f9d4_52778289($_smarty_tpl) {?>		<div class="content_wrapper contact">
			<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            	<?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                <?php }?>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                	<div class="form_container">
                    
                        <div class="control-group">
                            <div class="controls">
                                <label for="university"><?php echo $_smarty_tpl->tpl_vars['language']->value['university'];?>
<span>*</span></label><br />
                                <input type="text" id="university" name="university" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['university']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['university'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['language']->value['contact_person'];?>
<span>*</span></label><br />
                                <input type="text" id="contact_person" name="contact_person" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['contact_person']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['contact_person'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span>*</span></label><br />
                                <input type="text" id="email" name="email" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['error']->value['email'];?>
</p>
                            </div>
                        </div>    
                        
                        <div class="control-group">
                            <div class="controls">
                                <label for="application"><?php echo $_smarty_tpl->tpl_vars['language']->value['pre_moot_upload'];?>
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
                            	<?php echo $_smarty_tpl->tpl_vars['language']->value['attached_pre_moot_app'];?>
<br /><br />
                                <a href="<?php echo $_smarty_tpl->tpl_vars['pre_moot_app']->value;?>
" download="Pre-Moot_application.pdf" target="_blank"><img src="img/download.png"/></a>
                                <p class="help-block"></p>
                            </div>
                        </div>
                          
                    </div>
				</form>
		</div> 
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>