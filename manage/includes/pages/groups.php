<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">

		<h3><?php echo $TRANSLATION['groups']; ?></h3>

	    <hr />

<?php

if ($current_act = extractGet('act')) {

	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/groups/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/groups/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/groups/delete.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/groups/list.php');
	}

} else {

	require_once(DIR_PATH . 'includes/pages/groups/list.php');

}

?>

		<hr />

	    <div class="footer">

	    </div>

	</div>

</div> <!-- /container -->
