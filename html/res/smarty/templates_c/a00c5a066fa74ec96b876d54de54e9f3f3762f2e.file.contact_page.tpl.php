<?php /* Smarty version Smarty-3.1.13, created on 2013-10-30 15:52:03
         compiled from "C:\xampp\htdocs\lvstandard\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14743526f8930475958-22772500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00c5a066fa74ec96b876d54de54e9f3f3762f2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lvstandard\\smarty\\templates\\contact_page.tpl',
      1 => 1383133921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14743526f8930475958-22772500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526f89304ea195_40398664',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f89304ea195_40398664')) {function content_526f89304ea195_40398664($_smarty_tpl) {?><div class="center_container">
	<div class="center contact <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
">    
		
            <h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            
            <div class="map">
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=209218735107671405378.0004e9e3cc92aeb27e586&amp;ie=UTF8&amp;ll=41.709893,44.797246&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>იხილეთ <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=209218735107671405378.0004e9e3cc92aeb27e586&amp;ie=UTF8&amp;ll=41.709893,44.797246&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">LV Standard Group</a> უფრო მსხვილ რუკაზე</small>
            </div>      
              
            <div class="right_block">
            <span class="contact_text">
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </span>
            <form class="form-horizontal">
				<div class="control-group">
                	<div class="controls">
                    	<label for="name"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</label><br />
                        <input type="text" id="name" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" class="input-xlarge">
                        <p class="help-block"></p>
					</div>
				</div>    
                
				<div class="control-group">
                	<div class="controls">
                    	<label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
</label><br />
                        <input type="text" id="email" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
" class="input-xlarge">
                        <p class="help-block"></p>
					</div>
				</div>
                
				<div class="control-group">
                	<div class="controls">
                    	<div class="textarea">
                        	<label for="text"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</label><br />
                            <textarea name="text" id="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
"></textarea>
						</div>
					</div>
				</div>
                
                <br />
                <div class="control-group">
                	<div class="controls">
                    	<button class="btn btn-info <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli"><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
</button>
					</div>
				</div>
                
			</form>
		</div>        
    </div>             
</div><?php }} ?>