		Visits : <span id='metric'></span>
		
		<script src='js/oocharts.js'></script>
		<script type="text/javascript">

			window.onload = function(){

				oo.setAPIKey("30818a58431ecf9a43d042d42b30f4aac07a1cea");

				oo.load(function(){

					var metric = new oo.Metric("75033752", "30d");

					metric.setMetric("ga:visits");

					metric.draw('metric');

				});
			};

		</script>