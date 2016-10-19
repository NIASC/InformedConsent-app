<?php
if(INSYS != 'pc777') die('404');

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['users']; ?></h3>
	
	    <hr />

<?php

$page_type = extractGet('page');

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/users/content.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/users/content.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/users/delete.php');
	        break;
		case 'list':
	        require_once(DIR_PATH . 'includes/pages/users/list.php');
	        break;
		case 'sort':
	        require_once(DIR_PATH . 'includes/pages/users/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/users/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/users/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->