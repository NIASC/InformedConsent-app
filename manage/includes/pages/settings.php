<?php

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

// Require Language Changer
require_once('includes/pages/tpl_language_changer.php');

// save datas
if (extractPost('doEdit') == $TRANSLATION['save'])
{$query = "SELECT * FROM `bc_settings` WHERE editable = 'Y'";
		
		if ($result = DBM::queryData($query)) {
		
		while ($row = DBM::fetchObject($result)) {
			
			$query = "UPDATE `bc_settings` SET `value` = '".extractPost($row->slug)."' WHERE slug = '".$row->slug."'";
			
			DBM::query($query, $database_link);
			
			}
		}
}
?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['settings']; ?></h3>
	
	    <hr />
        <form name="section_edit_form" enctype="multipart/form-data" method="post" action="">
        <table class="table">
        <tbody>
        
        <?php
		
        $query = "SELECT * FROM `bc_settings` WHERE editable = 'Y'";
		
		if ($result = DBM::queryData($query)) {
		
		while ($row = DBM::fetchObject($result)) {
			
			echo '<tr>
					<th class="text-right">'.$row->description.'</th>
					<td>';
			
			if ($row->html == 'Y')	echo getEditor($row->slug, $row->value, 'basic', 200);
			
			else echo '<input type="text" name="'.$row->slug.'" value="'.$row->value.'" class="input-xx" />';
			
			echo	'</td>				
				</tr>';
			
			}
		}
        ?>
        <tr>
        	<th></th>
			<td>
				<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
				<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
			</td>				
		</tr>
        </tbody>
        </table>
        </form>		
		<hr />
	    
	    <div class="footer">
	    	<p>&copy; 2014</p>
	    </div>
	    
	</div>
      
</div> <!-- /container -->