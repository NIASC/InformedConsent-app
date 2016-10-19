<?php /* Smarty version Smarty-3.1.13, created on 2015-04-20 15:49:48
         compiled from "C:\xampp\htdocs\genolaw\smarty\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119025534be18ae9382-94168326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ff9339c0f550ec31e878c584a2a772f2d8db638' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genolaw\\smarty\\templates\\contact_page.tpl',
      1 => 1429530584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119025534be18ae9382-94168326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5534be18c9f3a0_22810546',
  'variables' => 
  array (
    'site_data' => 0,
    'notification' => 0,
    'error' => 0,
    'language' => 0,
    'map_info' => 0,
    'info' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534be18c9f3a0_22810546')) {function content_5534be18c9f3a0_22810546($_smarty_tpl) {?><div class="container contact-page">
	<div class="left">
    <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
    <form>
    <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
    <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
    <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }?>
    
        <input type="text" name="name" class="upper" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 *"/>
        <input type="text" name="email" class="upper" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
 *"/>
        <input type="text" name="phone" class="upper" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['phone'];?>
"/>
        <textarea placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
" class="upper" name="message"></textarea>
        <div class="submit-wrap">
            <input type="submit" name="action" class="upper" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
"/>
        </div>
    </form>
    <div class="clear"></div>
    </div>
    
     
</div>


<div class="text_center single">

    <div id="map-canvas"></div>
	
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
<script type="text/javascript">
$(document).ready(function(e) {
    $('body,html').animate({
				scrollTop: $('.container.contact-page').offset().top-100
			}, 800);
			
});
</script> 
    
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
	
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
    });
}
	google.maps.event.addDomListener(window, 'load', initialize);
	
</script>
</div>    <?php }} ?>