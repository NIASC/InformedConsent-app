<?php /* Smarty version Smarty-3.1.13, created on 2016-07-06 18:47:35
         compiled from "C:\xampp\htdocs\moe.gov.ge\html\themes\default\templates\contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196895773e2ffafaab5-72776990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fca62c2dcb8b293960dc3cb4407f403fa2148ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\moe.gov.ge\\html\\themes\\default\\templates\\contact_page.tpl',
      1 => 1467816453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196895773e2ffafaab5-72776990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5773e2fff058e0_76660994',
  'variables' => 
  array (
    'notification' => 0,
    'error' => 0,
    'info_title' => 0,
    'site_data' => 0,
    'address' => 0,
    'phone' => 0,
    'email' => 0,
    'info_content' => 0,
    'language' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5773e2fff058e0_76660994')) {function content_5773e2fff058e0_76660994($_smarty_tpl) {?><div id="map-canvas"></div>

			<!-- contact box -->
			<div class="contact-box">
				<div class="container">
					<div class="row">
					<?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
                    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                    <?php }?>

						<div class="col-md-3">
							<div class="contact-information">
								<h3><?php if ($_smarty_tpl->tpl_vars['info_title']->value){?><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
<?php }?></h3>
								<ul class="contact-information-list">
									<li><span><i class="fa fa-home"></i><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</span></li>
									<li><span><i class="fa fa-phone"></i><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span></li>
									<li><a href="#"><i class="fa fa-envelope"></i><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="contact-information">
								<h3>&nbsp;</h3>
								<?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

							</div>
						</div>

						<div class="col-md-6">
							<h3><?php echo $_smarty_tpl->tpl_vars['language']->value['send_us_message'];?>
</h3>
							<form id="contact-form" class="contact-work-form2" method="post">

								<div class="text-input">
									<div class="float-input">
										<input name="name" id="name2" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
										<span><i class="fa fa-user"></i></span>
									</div>

									<div class="float-input2">
										<input name="email" id="mail2" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['email'];?>
">
										<span><i class="fa fa-envelope"></i></span>
									</div>
								</div>

								<div class="textarea-input">
									<textarea name="message" id="comment2" placeholder="<?php echo $_smarty_tpl->tpl_vars['language']->value['message'];?>
"></textarea>
									<span><i class="fa fa-comment"></i></span>
								</div>

								<div class="msg2 message"></div>
								<input type="submit" name="action" accept="action" class="submit_contact main-form" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['send'];?>
">

							</form>
						</div>

					</div>
					<?php echo $_smarty_tpl->getSubTemplate ('widgets/social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
			
			
			


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
            
function initialize() {
	  var mapOptions = {
		zoom: 15,
		center: new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
),
		scrollwheel:false
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
			//icon: image,
			title: beach[2],
			zIndex: 99
		});
		//bindInfoWindow(marker, map, infowindow, document.getElementById('item_'+beach[3]).innerHTML);
		
		google.maps.event.addListener(map, 'click', function(event){
			  this.setOptions({scrollwheel:true});
			});
		
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

<?php }} ?>