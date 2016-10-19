<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['poll']; ?></h3>
	
	    <hr />

<?php
$section_type = extractGet('page');

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/poll/content.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/poll/content.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/poll/delete.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/poll/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/poll/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2015</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->