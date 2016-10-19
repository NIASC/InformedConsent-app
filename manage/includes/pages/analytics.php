<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');


$get_settings_query = "
	SELECT 
		`value` AS `user`
	FROM 
		`bc_settings` 
	WHERE 
		`slug` = 'analitycs_user'";

if ($get_settings_result = DBM::queryData($get_settings_query)) {
	
	$get_username = DBM::fetchObject($get_settings_result);
				
}

$get_settings_query = "
	SELECT 
		`value` AS `password`
	FROM 
		`bc_settings` 
	WHERE 
		`slug` = 'analitycs_password'";

if ($get_settings_result = DBM::queryData($get_settings_query)) {
	
	$get_password = DBM::fetchObject($get_settings_result);
				
}


$page = extractGet('page');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3>ანალიტიქსი</h3>
	
	    <hr />

    	
        <div class="accordion" id="leftMenu" style="float:left;width:20%;margin-right:3%;">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-parent="#leftMenu" href="<?php echo '?page='.$page.'&language='.$content_language.'&view=timeline'; ?>">
                                  Audience Overview
                            </a>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-parent="#leftMenu" href="<?php echo '?page='.$page.'&language='.$content_language.'&view=metric'; ?>">
                                  Metric
                            </a>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                            	Location
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li><a href="<?php echo '?page='.$page.'&language='.$content_language.'&view=table'; ?>">City</a></li>
                                    <li><a href="<?php echo '?page='.$page.'&language='.$content_language.'&view=table'; ?>">Country</a></li>
                                    <li><a href="<?php echo '?page='.$page.'&language='.$content_language.'&view=bar'; ?>">Continental</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-parent="#leftMenu" href="<?php echo '?page='.$page.'&language='.$content_language.'&view=pie'; ?>">
                                  Browser & OS
                            </a>
                        </div>
                    </div>
		</div>
        
        <div style="float:left;width:75%;">
        <?php
		
		$view = extractGet('view');
		
		if(file_exists('includes/pages/analytics/'.$view.'.php'))
		
		include('includes/pages/analytics/'.$view.'.php');
		
		?>
        </div>
        
	</div>
      
</div> <!-- /container -->