
		<div id='chart'></div>
		<script src='js/oocharts.js'></script>
		<script type="text/javascript">

			window.onload = function(){

				oo.setAPIKey("4c04fa77652356d7d5050d513e772d901942ad11");

				oo.load(function(){

					var timeline = new oo.Timeline("88751774", "30d");

					timeline.addMetric("ga:visits", "Visits");

					timeline.addMetric("ga:newVisits", "New Visits");

					timeline.draw('chart');

				});
			};

		</script>