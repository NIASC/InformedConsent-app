
		<div id='table'></div>

		<script src='js/oocharts.js'></script>
		<script type="text/javascript">

			window.onload = function(){

				oo.setAPIKey("30818a58431ecf9a43d042d42b30f4aac07a1cea");

				oo.load(function(){

					var table = new oo.Table("75033752", "30d");

					table.addMetric("ga:visits", "Visits");

					table.addDimension("ga:city", "City");

					table.draw('table');

				});
			};

		</script>