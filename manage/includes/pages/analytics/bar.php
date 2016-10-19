
		<div id='chart'></div>
		
		<script src='js/oocharts.js'></script>
		<script type="text/javascript">

			window.onload = function(){

				oo.setAPIKey("30818a58431ecf9a43d042d42b30f4aac07a1cea");

				oo.load(function(){
					
					var bar = new oo.Bar("75033752", "30d");

					bar.addMetric("ga:visits", "Visits");

					bar.addMetric("ga:newVisits", "New Visits");

					bar.setDimension("ga:continent");

					bar.draw('chart');

				});
			};

		</script>