<section class="container-fluid section contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div id="map-canvas"></div>
		  	</div>
		</div>
	</div>
    <div class="row">
      <div class="col-xs-2 col-sm-1 section-icon">
        <span class="icon icon-news pull-right"></span>
      </div>
      <div class="col-xs-10 col-sm-11 section-header">
        <h2>{$site_data.section_name}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-2 col-xs-10 col-sm-offset-1 col-sm-10">
        <div class="section-content">
          <div class="section-content-news">
            <div class="container-fluid inner-page">
			 	<div class="row">
				
					{if $notification}
                    <p class="alert alert-success">{$notification}</p>
                    {/if}
                    {if $error}
                    <p class="alert alert-danger">{$error}</p>
                    {/if}
				<div class="col-md-3">
							<div class="contact-information">
								<h4>{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h4>
								<ul class="contact-information-list">
									<li><span><i class="fa fa-home"></i>{$address}</span></li>
									<li><span><i class="fa fa-phone"></i>{$phone}</span></li>
									<li><a href="#"><i class="fa fa-envelope"></i>{$email}</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="contact-information">
								<h3>&nbsp;</h3>
								{$info_content}
							</div>
						</div>

						<div class="col-md-6">
							<h4>{$language.send_us_message}</h4>
							<form id="contact-form" class="contact-work-form2" method="post">

								<div class="text-input">
									<div class="float-input">
										<input class="form-control" name="name" id="name2" type="text" placeholder="{$language.name}">
										<span><i class="fa fa-user"></i></span>
									</div>

									<div class="float-input">
										<input class="form-control" name="email" id="mail2" type="text" placeholder="{$language.email}">
										<span><i class="fa fa-envelope"></i></span>
									</div>
								</div>

								<div class="float-input">
									<textarea class="form-control" name="message" id="comment2" placeholder="{$language.message}"></textarea>
									<span><i class="fa fa-comment"></i></span>
								</div>

								<div class="msg2 message"></div>
								<input type="submit" name="action" accept="action" class="submit_contact main-form" value="{$language.send}">

							</form>
						</div>

					</div>
             	</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>			


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&key=AIzaSyA7Lq9owRxFAIfkoJhFuIgcU_-56uNhg1Y"></script>
<script type="text/javascript">
            
function initialize() {
	  var mapOptions = {
		zoom: 15,
		center: new google.maps.LatLng({$lat}, {$lng}),
		scrollwheel:false
	  }
	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	  setMarkers(map, beaches);
	}


	var beaches = [[{$lat},{$lng},'{$info_title}',1]];
	
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
		{literal}
		google.maps.event.addListener(map, 'click', function(event){
			  this.setOptions({scrollwheel:true});
			});
		{/literal}
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

