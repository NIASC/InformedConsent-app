<?php

header("Location: ?page=1");

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">

		<h3><?php echo $TRANSLATION['main_page']; ?></h3>

	    <hr />

	    <p><?php echo $TRANSLATION['please_select_category']; ?></p>

	    <br /><br /><br />

	    <hr />

			<?php if(!$hasPermission) echo "<h4>You have not permission to view this page!</h4>"; ?>

	    <div class="footer">

	    </div>

	</div>

</div> <!-- /container -->
