<?php /* Smarty version Smarty-3.1.13, created on 2015-08-05 18:56:59
         compiled from "/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/contact_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:590811000558bed559128d5-14498614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '860d5c73b9b9fdbb036b5e237766e748d2b9c150' => 
    array (
      0 => '/home/tbilis10/domains/tbilisisilkroad.ge/public_html/smarty/templates/contact_page.tpl',
      1 => 1438786288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590811000558bed559128d5-14498614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_558bed55968914_31098051',
  'variables' => 
  array (
    'site_data' => 0,
    'info_content' => 0,
    'notification' => 0,
    'error' => 0,
    'lat' => 0,
    'lng' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558bed55968914_31098051')) {function content_558bed55968914_31098051($_smarty_tpl) {?><div class="content-long left">
        <h1><?php echo $_smarty_tpl->tpl_vars['site_data']->value['section_name'];?>
</h1>
        <div class="contact">
            <div class="left">
                <?php echo $_smarty_tpl->tpl_vars['info_content']->value;?>

            </div>
            <div class="right">
                <form class="contact-form second-font" method="post">
                <?php if ($_smarty_tpl->tpl_vars['notification']->value){?>
                <p class="notification"><?php echo $_smarty_tpl->tpl_vars['notification']->value;?>
</p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value){?>
                <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
                <?php }?>
                    <input type="text" placeholder="Name" name="name"/>
                    <input type="text" placeholder="Last Name" name="lastname"/>
                    <input type="text" placeholder="Email" name="email"/>

                    <textarea placeholder="Message" name="message"></textarea>

                    <input type="submit" value="SEND" name="action"/>
                    <div class="clear"></div>
                </form>
            </div>
            <div id="map-canvas" style="width:100%; height:350px; display:none;"></div>
            <div class="clear"></div>
        </div>
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['lat']->value&&$_smarty_tpl->tpl_vars['lng']->value){?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script type="text/javascript">
	// The following example creates a marker in Stockholm, Sweden
	// using a DROP animation. Clicking on the marker will toggle
	// the animation between a BOUNCE animation and no animation.
	
	var center = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
);
	var markerLocation = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
);
	var marker;
	var map;
	
	function initialize() {
	  var mapOptions = {
		zoom: 14,
		center: center
	  };
	
	  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
	
	  marker = new google.maps.Marker({
		map:map,
		draggable:true,
		animation: google.maps.Animation.DROP,
		position: markerLocation
	  });
	  google.maps.event.addListener(marker, 'click', toggleBounce);
	}
	
	function toggleBounce() {
	
	  if (marker.getAnimation() != null) {
		marker.setAnimation(null);
	  } else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	  }
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <?php }?>
    
<?php echo $_smarty_tpl->getSubTemplate ('right_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>