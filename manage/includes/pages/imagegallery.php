<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');


?>
<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['photo_gallery']; ?></h3>
	
	    <hr />

<?php

$page_type = 7;

if(isset($_GET['gall_id']) || (extractGet('act')=='addphoto' && isset($_GET['info_pk']) )){
	
	if(isset($_GET['gall_id']))
	
	$get_section_query = "SELECT * FROM
						`bc_gallery_group`
							WHERE
						`bc_gallery_group`.`pk` = " . extractGet('gall_id');
	else
	
	$get_section_query = "SELECT * FROM
						`bc_gallery_group`
							WHERE
						`bc_gallery_group`.`pk` = " . extractGet('info_pk');

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$gallery_info = DBM::fetchObject($get_section_result);	
}


if ($current_act = extractGet('act')) {
	
	switch ($current_act) {
	    case 'add':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/add.php');
	        break;
	    case 'edit':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/edit.php');
	        break;
	    case 'delete':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/delete.php');
	        break;
		case 'content':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/gallerycontent.php');
	        break;
		case 'editimage':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/editimage.php');
	        break;
		case 'deleteimage':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/deleteimage.php');
	        break;
		case 'addphoto':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/addphoto.php');
	        break;
		case 'sort':
	        require_once(DIR_PATH . 'includes/pages/imagegallery/sort.php');
	        break;
	    default:
	        require_once(DIR_PATH . 'includes/pages/imagegallery/list.php');
	}
	
} else {
	
	require_once(DIR_PATH . 'includes/pages/imagegallery/list.php');
	
}

?>
		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->