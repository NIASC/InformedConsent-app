<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');



?>



<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['objects']; ?></h3>
	
	    <hr />

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/content/content.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/content/content.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/content/delete.php');
			break;
	    case 'list':
	        require_once(DIR_PATH . 'includes/pages/objects/list.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/objects/group_list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/objects/group_list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy;  2013.</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
  
  document.getElementById('lng').value = latLng.lng();
  document.getElementById('lat').value = latLng.lat();
}

function updateMarkerAddress(str) {
  document.getElementById('address').value = str;
}

function initialize() {
	var lng = document.getElementById('lng').value;
  	var lat = document.getElementById('lat').value;
	if(lng > 0 || lat > 0){
  var latLng = new google.maps.LatLng(lat, lng);}
  else
  var latLng = new google.maps.LatLng(41.730, 44.784);
  
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  
  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>