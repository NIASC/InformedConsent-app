<?php
if(INSYS != 'pc777') die('404');

// Require Menu Template
require_once('includes/pages/tpl_menu.php');

?>

<div class="row-fluid panel-container">

	<div class="span12">
				
		<h3><?php echo $TRANSLATION['file_manager']; ?></h3>
	
	    <hr />

	    <h4><?php echo $TRANSLATION['current_folder']; ?>: <?php echo $current_folder_name; ?></h4>
    
	    <ul class="breadcrumb">
        	<li><a href="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>"><?php echo str_replace('/', '', $config['file_folder_name']); ?></a> <span class="divider">/</span></li>
<?php

foreach ($pathItems as $key => $item) {
	echo '<li><a href="?page=' . $current_page_id . '&amp;language=' . $content_language . '&amp;folder=' . $item['url'] . '">' . $item['name'] . '</a>  <span class="divider">/</span></li>';
}		
		
?>
    	</ul>
        
        <div class="row-fluid">
        
        	<div class="span9">
        
				<table class="table table-bordered file-list-table">
	            
	            	<thead>
	                <tr>
	                	<th>&nbsp;</th>
	                    <?php echo printHeaders('name', $sort_with, $sort_direction, '?page=' . $current_page_id . '&amp;language=' . $content_language)?>
	                    <?php echo printHeaders('size', $sort_with, $sort_direction, '?page=' . $current_page_id . '&amp;language=' . $content_language)?>
	                    <?php echo printHeaders('date', $sort_with, $sort_direction, '?page=' . $current_page_id . '&amp;language=' . $content_language)?>
	                </tr>
	                </thead>
	                
	                <tbody>
	                
	                <tr>
	                    <td><input type="radio" name="listitems" disabled="disabled" /></td>
	                    <td><a href="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $upLevel; ?>">..</a></td>
	                    <td>&nbsp;</td>
	                    <td>&nbsp;</td>
	                </tr>
	                
	<?php
					$c = 0;
					// first - folders
					foreach ($folderList as $key => $item) {
					
						echo '
	                <tr>
	                    <td><input type="radio" name="listitems" disabled="disabled" /></td>
	                    <td><a href="?page=' . $current_page_id . '&amp;language=' . $content_language . '&amp;folder=' . $current_folder . $item['fname'] . '/">' . $item['fname'] . '/</a></td>
	                    <td>&nbsp;</td>
	                    <td>&nbsp;</td>
	                </tr>
							';
						
						$c++;
					
					}
						
					
					// next - files
					$c = 0;
					foreach ($newList as $key => $item) {
							
						echo '
							<tr>
								<td><input type="radio" name="listitems" fileext="' . $item['ext'] . '" filename="' . $item['name'] . '" /></td>
								<td><a href="' . $item['url'] . '" target="_blank">' . $item['name'] . '</a></td>
								<td>' . $item['hsize'] . '</td>
								<td>' . date('d.m.Y', $item['date']) . '</td>
							</tr>
							';
						
						//
						
						$c++;
					
					}
					
					
					
	?>
	                
	                </tbody>
	            
	            </table>
            
        	</div>
            
            <div class="span3 well">
            
	            <form id="newfileform" enctype="multipart/form-data" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
	            	
	            	<h5><?php echo $TRANSLATION['upload_folder']; ?> "<?php echo $current_folder_name; ?>"</h5>
		                
		            <?php echo $errors['newfile']; ?>
		                
		            <fieldset>
		            
		                <label></label>
		                <input type="file" name="newfile" title="Chose File" />
		                
		                <?php
						if ($current_folder_writable) {
						?>
							<label></label>
		                    <input type="submit" name="doAdd" value="Upload" class="btn btn-info" />
		                <?php
						}
						?>
					
	            	</fieldset>
					
	            </form>
	            
	            <hr />
	            
	            <form id="newfolderform" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
	            	
	            	<h5><?php echo $TRANSLATION['create_folder']; ?> "<?php echo $current_folder_name; ?>"</h5>
		                
		            <?php echo $errors['newfolder']; ?>
	            	
	            	<fieldset>
                		
                		<label></label>
                        <input type="text" name="foldername"/>
                        <?php
						if ($current_folder_writable) {
						?>
                    	<input type="submit" name="doCreate" value="Create" class="btn btn-success" />
                    	<?php
						}
						?>
						
	            	</fieldset>
                    
                </form>
                
                <hr />
                
                <form id="renameform" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
                	
                	<h5><?php echo $TRANSLATION['create_folder']; ?> "<?php echo $current_folder_name; ?>"</h5>
		                
		            <?php echo $errors['filerename']; ?>
                	
		            <fieldset>
                    
	                    <label><?php echo $TRANSLATION['file_name']; ?></label>
	                    <input type="text" name="filename" />
	                    
			            <label><?php echo $TRANSLATION['file_extension']; ?></label>
	                    <input type="text" name="fileext" class="srcExt" />
	                    <input type="hidden" class="srcFile" name="srcFile" value="" />
	                    <input type="submit" class="btn btn-info" name="doRename" value="Rename" />
                    
		            </fieldset>
                
                </form>
                
                <hr />
                
                <form id="copyform" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
                	
                	<h5><?php echo $TRANSLATION['copy_file']; ?></h5>
		                
		            <?php echo $errors['filecopy']; ?>
                	
		            <fieldset>
                    	
                    	<label><?php echo $TRANSLATION['copy_to_directory']; ?></label>
	                    <select name="destDir">
                    	<option value="<?php echo $root_folder; ?>"><?php echo $root_folder_name; ?></option>
                    	<?php echo printTree()?>
	                    </select>
	                    <input type="submit" name="doCopy" class="btn btn-info" value="Copy" />
	                    <input type="hidden" class="srcFile" name="srcFile" value="" />
                    
		            </fieldset>
                
                </form>
                
                <hr />
                
                <form id="moveform" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
                	
                	<h5><?php echo $TRANSLATION['move_file']; ?></h5>
		                
		            <?php echo $errors['filemove']; ?>
                	
		            <fieldset>
                    	
                    	<label><?php echo $TRANSLATION['move_to_directory']; ?></label>
	                    <select name="destDir">
                    	<option value="<?php echo $root_folder; ?>"><?php echo $root_folder_name; ?></option>
                    	<?php echo printTree()?>
	                    </select>
	                    <input type="submit" name="doMove" class="btn btn-warning" value="Move" />
	                    <input type="hidden" class="srcFile" name="srcFile" value="" />
                    
		            </fieldset>
                
                </form>
                
                <hr />
                
                <form id="deleteform" method="post" action="?page=<?php echo $current_page_id; ?>&amp;language=<?php echo $content_language; ?>&amp;folder=<?php echo $current_folder; ?>">
                	
                	<h5><?php echo $TRANSLATION['delete_file']; ?></h5>
		                
		            <?php echo $errors['filedelete']; ?>
                	
		            <fieldset>
                    	
                    	<label></label>
                    	<input type="submit" class="btn btn-error" name="doDelete" value="Delete" />
                        <input type="hidden" class="srcFile" name="srcFile" value="" />
                    
		            </fieldset>
                
                </form>
                
            </div>
            
        </div>
            
        
        </div>
        
        
        <div class="clearer"></div>
        
        
        
        		<hr />
	    
<?php

// Require Menu Template
//require_once('includes/pages/tpl_footer.php');

?>
	    
	</div>
      
</div> <!-- /container -->