<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['structure']; ?></h3>
	
	    <hr />

<?php

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/structure/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/structure/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/structure/delete.php');
	        break;
	    case 'sort':
	        require_once(DIR_PATH . 'includes/pages/structure/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/structure/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/structure/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->