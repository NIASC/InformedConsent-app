<div id='pie'></div>
<script src='js/oocharts.js'></script>
<script type="text/javascript">

			window.onload = function() {

				oo.setAPIKey("30818a58431ecf9a43d042d42b30f4aac07a1cea");

				oo.load(function(){

					var pie = new oo.Pie("75033752", "30d");

					pie.setMetric("ga:visits", "Visits");
					pie.setDimension("ga:browser");

					pie.draw('pie');

				});
			};

</script>
<?php
?>