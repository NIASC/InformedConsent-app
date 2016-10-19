<?php /* Smarty version Smarty-3.1.13, created on 2014-02-17 11:35:47
         compiled from "/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7151422295301bbd3cf8c90-90352618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55dbd22fd3d6bb3a3d50b9554b0bea143664f096' => 
    array (
      0 => '/home/mydocume/domains/mydocuments.ge/public_html/eeu/smarty/templates/contact_page.tpl',
      1 => 1392394054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7151422295301bbd3cf8c90-90352618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'error' => 0,
    'info_content' => 0,
    'language' => 0,
    'name' => 0,
    'email' => 0,
    'message' => 0,
    'map_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5301bbd3da24c9_03646390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5301bbd3da24c9_03646390')) {function content_5301bbd3da24c9_03646390($_smarty_tpl) {?>
		<div class="content_wrapper contact">
			<h1 class="headline <?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
_mtavruli contact"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
            <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
            <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
            <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <?php }?>
            
            <div class="contact_text"><?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>
</div>
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
                                	<?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>

                                </button>
                            </div>
                        </div>
                        
                    </form>
				</div>
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
				<script type="text/javascript">
            
            function initialize() {
              var myLatlng = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['map_info']->value['lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['map_info']->value['lng'];?>
);
              var mapOptions = {
                zoom: 13,
                center: myLatlng
              };
            
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            
              var contentString = $('.contact_text').html();
            
              var infowindow = new google.maps.InfoWindow({
                  content: contentString,
				  maxWidth: 300
              });
            
              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Uluru (Ayers Rock)'
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
            
                </script>
                <div id="map-canvas"></div>
		</div>     
        
        <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>