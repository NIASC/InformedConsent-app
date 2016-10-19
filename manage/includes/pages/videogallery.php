<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');


?>
<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['video_gallery']; ?></h3>
	
	    <hr />

<?php

$page_type = 12;
$section_id = (int)extractGet('section_id');

if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/videogallery/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/videogallery/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/videogallery/delete.php');
	        break;
		case 'content':
	        require_once(DIR_PATH . 'includes/pages/videogallery/gallerycontent.php');
	        break;
		case 'editimage':
	        require_once(DIR_PATH . 'includes/pages/videogallery/editimage.php');
	        break;
		case 'deleteimage':
	        require_once(DIR_PATH . 'includes/pages/videogallery/deleteimage.php');
	        break;
		case 'addphoto':
	        require_once(DIR_PATH . 'includes/pages/videogallery/addphoto.php');
	        break;
		case 'sort':
	        require_once(DIR_PATH . 'includes/pages/videogallery/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/videogallery/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/videogallery/group_list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->