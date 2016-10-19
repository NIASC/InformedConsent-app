<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

$section_type = 14;

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['publications']; ?></h3>
	
	    <hr />

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/publications/content.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/publications/content.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/publications/delete.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/publications/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/publications/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2015</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->