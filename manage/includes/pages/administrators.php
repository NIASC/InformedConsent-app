<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['users']; ?></h3>
	
	    <hr />

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/administrators/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/administrators/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/administrators/delete.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/administrators/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/administrators/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	
	    </div>
	    
	</div>
      
</div> <!-- /container -->