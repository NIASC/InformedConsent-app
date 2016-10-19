<?php /* Smarty version Smarty-3.1.13, created on 2016-03-22 16:56:33
         compiled from "C:\xampp\htdocs\bridge.org.ge\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2701956ec171fe4a1a9-95824520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04a05ddd0451b2ac46382f8a2d56bf76bda72ce5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bridge.org.ge\\smarty\\templates\\contact_page.tpl',
      1 => 1458651391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2701956ec171fe4a1a9-95824520',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_56ec17201e52c4_49504624',
  'variables' => 
  array (
    'info_title' => 0,
    'site_data' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
    'info_content' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ec17201e52c4_49504624')) {function content_56ec17201e52c4_49504624($_smarty_tpl) {?><div id="line_green">
	<div class="green"></div>
    <div class="orange"></div>
</div>
<div id="line_grey"></div>


<div id="content">
    <div class="center">
        <div class="content_left">
        	<h1><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h1>
            
            <div class="content_top">
            
                <div class="google-map">
                  <div id="map-canvas"></div>
                </div>
            
                    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
                    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    <?php }?>
                <div class="message-box">
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
                      <textarea name="message"></textarea>
                    </div>                    
                    <div class="input">
                      <input type="submit" value="SEND" name="action"/>
                    </div>      
                  </form>
                </div>
            
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

                      
            </div>
            
            <?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
        </div>
        
    </div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
            
function initialize() {
	  var mapOptions = {
		zoom: 12,
		center: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
)
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	  setMarkers(map, beaches);
	}


	var beaches = [[<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
,'<?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
',1]];
	
function setMarkers(map, locations) {
		
	  var image = {
		url: 'img/pin.png'
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
		//bindInfoWindow(marker, map, infowindow, document.getElementById('item_'+beach[3]).innerHTML);
	  }
	}
	

function bindInfoWindow(marker, map, infowindow, strDescription) {
	
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
}
	google.maps.event.addDomListener(window, 'load', initialize);
	
</script>
</div>

<?php }} ?>