<input type="hidden" id="ajaxKey" value="asdsa"/>
<input type="hidden" id="language" value="<?php echo $content_language; ?>"/>
  <?php

if (INSYS != 'pc777') {
	die();
}

$page = (int) extractGet('page');

?><div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="?page=0"><?php echo $TRANSLATION['dashboard']; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php
			  
			  $disease_status = disease_status('N');
			  
                foreach($config['page_groups'] as $group_name => $group) {
                  if($isGroup = ($group_name != '0')) {
                    echo '<li class="dropdown '.(isset($group[$page]) ? 'active' : '').'">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$TRANSLATION[$group_name].'<b class="caret"></b></a>
                            <ul class="dropdown-menu">';
                  }
                  foreach($group as $group_page) {
					  
					  $notification = ($group_page->id == 93 && $disease_status > 0) ? ' <span class="badge label-warning">'.$disease_status.'</span>':'';
					  
					  if($group_page->id != 0)
                    echo '<li class="'.($group_page->id == $page ? 'active' : '').'">
                            <a href="?page='.$group_page->id.'&language='.$content_language.'">
                              '.$TRANSLATION[$group_page->name].$notification.'
                            </a>
                          </li>';
                  }
                  if($isGroup) {
                    echo '</ul></li>';
                  }
                }
              ?>
              
            </ul>
            <ul class="nav nav-pills pull-right">
            	<li class="logged_in"><?php echo $TRANSLATION['hello']; ?> <?php echo $_SESSION['admin_name']; ?>. <a href="?page=-1&act=logout"><?php echo $TRANSLATION['logout']; ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
		</div>
	</div>
</div>
