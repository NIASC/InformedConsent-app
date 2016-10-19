<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 13:49:25
         compiled from "C:\xampp\htdocs\hcoj\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2480537b69dfa11085-92712460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa0bd938d2a65b0bd9c853d9f52cbb549c08f4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hcoj\\smarty\\templates\\contact_page.tpl',
      1 => 1421315362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2480537b69dfa11085-92712460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_537b69dfbf8618_48634892',
  'variables' => 
  array (
    'site_data' => 0,
    'map_info' => 0,
    'info' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
    'name' => 0,
    'email' => 0,
    'message' => 0,
    'site_url' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b69dfbf8618_48634892')) {function content_537b69dfbf8618_48634892($_smarty_tpl) {?><h1 class="headline"><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>

<div class="text_center single">

    <div id="map-canvas"></div>
    
    <hr class="bottom_rule"/>
	
    <div class="contact_text">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
        <div id="item_<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
        <h2 class="upper"><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</h2><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

        </div><hr class="bottom_rule"/>
        <?php } ?>
    </div>
    <div class="contact_form_container">
    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>
    	<form class="form-horizontal" method="post">
        	<div class="control-group">
            	<div class="controls">
                	<label for="name"><?php echo $_smarty_tpl->tpl_vars['language']->value['name_lastname'];?>
<span>*</span></label><br />
                    <input type="text" id="name" name="name" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                    <p class="help-block"></p>
				</div>
                
            	<div class="controls">
                	<label for="email"><?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
<span>*</span></label><br />
                    <input type="text" id="email" name="email" class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                    <p class="help-block"></p>
				</div>
			</div>    
                        
            <div class="control-group message">                
                <div class="controls">
                	<div class="textarea">
                    	<label for="message"><?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
<span>*</span></label><br />
                        <textarea name="message" id="message"> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
					</div>
				</div>
			</div>
            
            <div class="control-group message">
            	<div class="controls">
                	<button class="btn btn-info upper" name="action"><?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
</button>
				</div>
			</div>
                        
		</form><br /><br />
        
        
	</div>
    <hr class="bottom_rule"/>
    <a onclick="window.history.back()" class="back">← <?php echo $_smarty_tpl->tpl_vars['language']->value['back'];?>
</a>
    
    <ul class="social_action">
    	<li class="fb"><div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['site_data']->value['language'];?>
/<?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_slug'];?>
" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></li>
	</ul>
    
    
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
            
function initialize() {
	  var mapOptions = {
		zoom: 12,
		center: new google.maps.LatLng(41.758, 44.771)
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	  setMarkers(map, beaches);
	}


	var beaches = [<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['important']=='Y'){?>
			[<?php echo $_smarty_tpl->tpl_vars['item']->value['lat'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['lng'];?>
,'<?php echo $_smarty_tpl->tpl_vars['item']->value['info_title'];?>
',<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
],
			<?php }?>
		<?php } ?>
	];
	
function setMarkers(map, locations) {
		
	  var image = {
		url: 'img/pin1.png'
	  };
	  //var infoWindow = new google.maps.InfoWindow();
  	var infowindow = new google.maps.InfoWindow({
            content: ""
        }); 
	  
	  for (var i = 0; i < locations.length; i++) {
		var beach = locations[i];
		var myLatLng = new google.maps.LatLng(beach[0], beach[1]);
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: image,
			title: beach[2],
			zIndex: 99
		});
		bindInfoWindow(marker, map, infowindow, document.getElementById('item_'+beach[3]).innerHTML);
	  }
	}
	

function bindInfoWindow(marker, map, infowindow, strDescription) {
	alert();
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
}
	google.maps.event.addDomListener(window, 'load', initialize);
	
</script>
</div> 
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>