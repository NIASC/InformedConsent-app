<?php
if(INSYS != 'pc777') die('404');

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['disease']; ?></h3>
	
	    <hr />

<?php

$page_type = extractGet('page');

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/disease/content.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/disease/content.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/disease/delete.php');
	        break;
		case 'list':
	        require_once(DIR_PATH . 'includes/pages/disease/list.php');
	        break;
		case 'sort':
	        require_once(DIR_PATH . 'includes/pages/disease/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/disease/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/disease/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->