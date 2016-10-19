<?php /* Smarty version Smarty-3.1.13, created on 2013-07-30 07:35:02
         compiled from "C:\xampp\htdocs\idea\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2478351a32fc318de72-26538386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '242e37bf138731863684320da1dc04bb0bebb9c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\idea\\smarty\\templates\\contact_page.tpl',
      1 => 1372238367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2478351a32fc318de72-26538386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a32fc323e032_30258080',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a32fc323e032_30258080')) {function content_51a32fc323e032_30258080($_smarty_tpl) {?><div class="full" align="center">
	<div class="demarker"></div>	
</div>
    
<div class="center">
	<div class="container">        
		<div class="headline"><h1 class="text_shadow <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1></div>
        
        <iframe width="100%" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=218431284593492508955.0004dfe307fe197edabef&amp;ie=UTF8&amp;ll=41.710765,44.797592&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=218431284593492508955.0004dfe307fe197edabef&amp;ie=UTF8&amp;ll=41.710765,44.797592&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Ideadesigngroup Office</a> in a larger map</small>
					
                    <span class="contact_text">
                    <hr  />
                    <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                    <hr  />
                    </span>
                    
                    <form class="form-horizontal">
                        <div class="control-group">
                          <!-- Text input-->
                          <div class="controls">
                            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" class="input-xlarge">
                            <p class="help-block"></p>
                          </div>
                        </div>    
                
                        <div class="control-group">
                          <!-- Text input-->
                          <div class="controls">
                            <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
" class="input-xlarge">
                            <p class="help-block"></p>
                          </div>
                        </div>
                
                        <div class="control-group">
                          <!-- Textarea -->
                          <div class="controls">
                            <div class="textarea">
                                  <textarea type="" class="" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
" style="margin: 0px; height: 69px; width: 271px;"> </textarea>
                            </div>
                          </div>
                        </div>
                        
                        <br />
						<div class="control-group">                
                          <!-- Button -->
                          <div class="controls">
                            <button class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
</button>
                          </div>
                        </div>
                
                    </form>
                    
        
	</div>
</div><?php }} ?>