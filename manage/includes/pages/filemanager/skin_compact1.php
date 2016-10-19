<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $lang['fb_title']?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo $conf['admin_url']?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $conf['admin_url']?>css/style_<?php echo $adminLang?>.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo $conf['admin_url']?>css/filemanager.css" />
    
	<script type="text/javascript" src="<?php echo $conf['site_url']?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $conf['site_url']?>js/jquery.ui-all.js"></script>
	<script type="text/javascript" src="<?php echo $conf['site_url']?>js/jquery.metadata.js"></script>
	<script type="text/javascript" src="<?php echo $conf['site_url']?>js/jquery.validate.js"></script> 

</head>
<body>



<div id="cropper-header">
	<img src="<?php echo $conf['admin_url']?>images/filemanager-header-<?php echo $adminLang?>.jpg" alt="<?php echo $lang['cropper_title']?>" />    
</div>


<div id="cropper-content">









    <h1><strong><span><?php echo $lang['imbrowser_current_folder']?> <?php echo $current_folder_name?></span></strong></h1>
    
    <div class="pathmenu submenu">
        <a href="?act=files&amp;function=<?php echo $_GET['function']?>"><img src="<?php echo $conf['admin_url']?>images/icon_home_small.png" alt="*" /><?php echo str_replace( "/", "", $conf['file_folder_name'] )?></a>
        /
<?

foreach($pathItems as $key=>$item) {
	echo '<a href="?act=files&amp;function='.$_GET['function'].'&amp;folder='.$item['url'].'"><img src="'.$conf['admin_url'].'images/icon_folder_small.png" alt="*" />'.$item['name'].'</a>
					/ ';
}		
		
?>
        <div class="clearer"></div>
    </div>
    
    
    <div class="content">
    
        
        <div class="fm_taskpane">
        
        	<h2><img src="<?php echo $conf['admin_url']?>images/task_new.png" alt="" /><?php echo $lang['fm_task_new']?></h2>
            
            <div id="newtabs">
            	
                <ul>
                	<li><a href="#newfile"><?php echo $lang['fm_task_new_file']?></a></li>
                    <li><a href="#newfolder"><?php echo $lang['fm_task_new_folder']?></a></li>
                </ul>
                
                <div id="newfile">
                	<?php echo $errors['newfile']?>
                	<?php echo $lang['fm_upload_desc']?> <?php echo $current_folder_name?>:
                	<form id="newfileform" enctype="multipart/form-data" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#newfile">
                        <input id="image" type="file" name="newfile" class="required" title="<?php echo $lang['error_selectfile']?>" />
                	<?php
						if($current_folder_writable) {
					?>
                    	<input type="submit" name="doAdd" value="<?php echo $lang['fm_button_upload']?>" class="button grey small" />
                	<?php
						} else {
					?>
                		<div class="errorM"><?php echo $lang['error_folder_protected']?></div>
                	<?php
						}
					?>
                    </form>
                </div>
                
                
                <div id="newfolder">
                	<?php echo $errors['newfolder']?>
                	<?php echo $lang['fm_create_desc']?> <?php echo $current_folder_name?>:
                	<form id="newfolderform" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#newfolder">
                        <input type="text" name="foldername" class="text small wide required" title="<?php echo $lang['error_inputname']?>" />
                	<?php
						if($current_folder_writable) {
					?>
                    	<input type="submit" name="doCreate" value="<?php echo $lang['fm_button_create']?>" class="button grey small" />
                	<?php
						} else {
					?>
                		<div class="errorM"><?php echo $lang['error_folder_protected']?></div>
                	<?php
						}
					?>
                    </form>
                </div>
            
            </div>
            

            <h2 style="margin-top: 15px;"><img src="<?php echo $conf['admin_url']?>images/task_checked.png" alt="" /><?php echo $lang['fm_task_selected']?></h2>
            
            
            <div id="selectedtabs">
            	<ul>
                	<li><a href="#renameSelected"><?php echo $lang['fm_task_selected_rename']?></a></li>
                    <li><a href="#copySelected"><?php echo $lang['fm_task_selected_copy']?></a></li>
                    <li><a href="#moveSelected"><?php echo $lang['fm_task_selected_move']?></a></li>
                    <li><a href="#deleteSelected"><?php echo $lang['fm_task_selected_delete']?></a></li>
                </ul>
                
                <div id="renameSelected">
                	<?php echo $errors['filerename']?>
                	<?php echo $lang['fm_rename_desc']?><br />
                    <?php echo $lang['fm_selected_file']?> <span class="file">--</span>
                    <form id="renameform" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#renameSelected">
                    <?php echo $lang['fm_rename_newname']?>
                    <input type="text" class="text small wide required eng" name="filename" title="<?php echo $lang['fm_rename_error_newname']?>" />
                    <?php echo $lang['fm_rename_newext']?>
                    <input type="text" id="extension" class="text small required eng" name="fileext" title="<?php echo $lang['fm_rename_error_newext']?>" />
                    <input type="hidden" class="srcFile" name="srcFile" value="" />
                    <input type="submit" class="button small grey" name="doRename" value="<?php echo $lang['fm_rename_submit']?>" />
                    </form>
                </div>
                
                <div id="copySelected">
                	<?php echo $errors['filecopy']?>
                	<?php echo $lang['fm_copy_desc']?><br />
                    <?php echo $lang['fm_selected_file']?> <span class="file">--</span>
                    <form id="copyform" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#copySelected">
                    <?php echo $lang['fm_copy_to']?>
                    <select name="destDir" class="list small eng" style="width:240px">
                    	<option class="eng" value="<?php echo $root_folder?>"><?php echo $root_folder_name?></option>
                    	<?php echo printTree()?>
                    </select>
                    <input type="submit" name="doCopy" class="button small grey" value="<?php echo $lang['fm_copy_submit']?>" />
                    <span class="subtext"><?php echo $lang['fm_onlyunlocked_list']?></span>
                    <input type="hidden" class="srcFile" name="srcFile" value="" />
                    </form>
                </div>
                                
                <div id="moveSelected">
                	<?php echo $errors['filemove']?>
                	<?php echo $lang['fm_move_desc']?><br />
                    <?php echo $lang['fm_selected_file']?> <span class="file">--</span>
                    <form id="moveform" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#moveSelected">
                    <?php echo $lang['fm_move_to']?>
                    <select name="destDir" class="list small eng" style="width:240px">
                    	<option class="eng" value="<?php echo $root_folder?>"><?php echo $root_folder_name?></option>
                    	<?php echo printTree()?>
                    </select>
                    <input type="submit" name="doMove" class="button small grey" value="<?php echo $lang['fm_move_submit']?>" />
                    <span class="subtext"><?php echo $lang['fm_onlyunlocked_list']?></span>
                    <input type="hidden" class="srcFile" name="srcFile" value="" />
                    </form>
                </div>
                
                <div id="deleteSelected">
                	<?php echo $errors['filedelete']?>
                	<?php echo $lang['fm_delete_desc']?>
                    <br /><br />
                    <?php echo $lang['fm_selected_file']?> <span class="file">--</span><br />
                    <?php echo $lang['fm_delete_sure']?>
                    <form id="deleteform" method="post" action="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $current_folder?>#deleteSelected">
                    	<p style="text-align:center;"><input type="submit" style="display:inline;" class="button red small" name="doDelete" value="<?php echo $lang['fm_delete_submit']?>" /></p>
                        <input type="hidden" class="srcFile" name="srcFile" value="" />
                    </form>
                    <span class="subtext"><?php echo $lang['fm_delete_last']?></span>
                </div>
            
            </div>
            

            
        
        </div>
        
        
    
        <div class="fm_dirlist">
        
			<table id="dirlisttable" class="dirlist" width="100%" cellpadding="0" cellspacing="0">
            
            	<thead>
                <tr>
                	<th class="fm_radio">&nbsp;</th>
                    <th class="fm_icon">&nbsp;</th>
                    <?php echo printHeaders("name", $sort_with, $sort_direction, "?act=files")?>
                    <?php echo printHeaders("size", $sort_with, $sort_direction, "?act=files")?>
                    <?php echo printHeaders("date", $sort_with, $sort_direction, "?act=files")?>
                </tr>
                </thead>
                
                <tbody>
                
                <tr>
                    <td class="fm_radio">
                    	<input type="radio" name="listitems" disabled="disabled" />
                    </td>
                    <td class="fm_icon">
                    	<a href="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $upLevel?>" title="<?php echo $lang['fm_folder_goup']?>"><img src="<?php echo $conf['admin_url']?>images/file_folder_up.png" alt=".." title="<?php echo $lang['fm_folder_goup']?>" /></a>
                    </td>
                    <td class="fm_name">
                        <a href="?act=files&amp;function=<?php echo $_GET['function']?>&amp;folder=<?php echo $upLevel?>" title="<?php echo $lang['fm_folder_goup']?>">..</a>
                    </td>
                    <td class="fm_size">&nbsp;
                    	
                    </td>
                    <td class="fm_date">&nbsp;
                    	
                    </td>
                </tr>
                
<?php
				$c = 0;
				// first - folders
				foreach( $folderList as $key=>$item ) {
				
					echo '
                <tr>
                    <td class="fm_radio">
                    	<input type="radio" name="listitems" disabled="disabled" />
                    </td>
                    <td class="fm_icon">
                    	<a href="?act=files&amp;function='.$_GET['function'].'&amp;folder='.$current_folder.$item['fname'].'/" title="'.$lang['imbrowser_openfolder'].'"><img src="'.$conf['admin_url'].'images/file_folder'.$item['locked'].'.png" alt="/" title="'.$lang['fm_folder'.$item['locked']].'" /></a>
                    </td>
                    <td class="fm_name">
                        <a href="?act=files&amp;function='.$_GET['function'].'&amp;folder='.$current_folder.$item['fname'].'/" title="'.$lang['imbrowser_openfolder'].'">'.$item['fname'].'</a>
                    </td>
                    <td class="fm_size">
                    	&nbsp;
                    </td>
                    <td class="fm_date">
                    	&nbsp;
                    </td>
                </tr>
						';
					
					$c++;
				
				}
				
				
								
								
				
				// next - files!
				$c = 0;
				foreach( $newList as $key=>$item ) {
						
					echo '
						<tr>
							<td class="fm_radio">
								<input type="radio" name="listitems" />
							</td>
							<td class="fm_icon">
								<img src="'.$conf['admin_url'].'images/file_'.getIconByExt($item['ext']).'.png" alt="'.$item['ext'].'" title="'.$item['ext'].' '.$lang['fm_file'].'" />
							</td>
							<td class="fm_name">
								<a href="'.$current_folder.$item['name'].'" class="insertlink" title="'.$lang['fm_insert'].'">'.$item['name'].'</a>
							</td>
							<td class="fm_size">
								'.$item['hsize'].'
							</td>
							<td class="fm_date">
								<span title="'.$lang['fm_last_modified'].'">'.date("d.m.Y", $item['date']).'</span>
							</td>
						</tr>
						';
					
					//
					$c++;
				
				}
				
				
				
?>
                
                </tbody>
            
            </table>

<div id="alert" title="<?php echo $lang['fm_alert_title']?>"><?php echo $lang['fm_alert_desc']?></div>
            
            
<script type="text/javascript" language="javascript">


$(document).ready(function(){

// tab creating

	// tabs for new
	$("#newtabs > ul").tabs();
	// tabs for selected
	$("#selectedtabs > ul").tabs();
	
// validate upload form
	$("#newfileform").validate();
	
// validate new folder form
	$("#newfolderform").validate();
	
// validate rename form
	$("#renameform").validate();
	
	
// alert dialog
	$('#alert').dialog({
	
		buttons: {
				'<?php echo $lang['ok']?>': function() {
					$(this).dialog('close');
				}
		},
		modal: 'true',
		width: 300,
		height: 140
	
	});
	
	$('.ui-dialog-buttonpane button').addClass("button grey small");
	$('#alert').dialog('close');
			
	
	
});


// line hovering

$("#dirlisttable tr").hover(
		function() {
			$(this).addClass("fm_hover");
		},
		function() {
			if( !$("input", this).is(":checked") ) {
				// remove hover only if this is not selected one
				$(this).removeClass("fm_hover");
			}
		}
);


// line selecting
var isSelected = false;

$("#dirlisttable tr").click(
		function() {
			if( !$("input", this).is(":disabled") ) {
				// select only when this is not disabled line (e.g. this is not a folder)
				
				// remove from all
				$("#dirlisttable tr").removeClass("fm_hover");
				$("#dirlisttable input").removeAttr("selected");
				// toggle current
				$(this).addClass("fm_hover");
				$("input", this).attr("checked", "checked");
				
				// put extension and filename into rename form
				$("#extension").attr("value", $(".fm_icon img", this).attr("alt"));
				$(".file").html($(".fm_name a", this).html());
				$(".srcFile").attr("value", $(".fm_name a", this).html());
				
				// set global var
				isSelected = true;
			}
		}
);


// force to select file before submitting
$("#selectedtabs :submit").click(
		function() {
			if(isSelected) {
				return true;
			} else {
				$("#alert").dialog('open');
				return false;
			}
		}
);


// send file to remote function


$(".insertlink").click(function(){
	
	window.opener.<?php echo $_GET['function']?>( $(this).attr("href") );
	
	//alert( $(this).attr("href") + " == <?php echo $_GET['function']?>" );
	
	window.close();
	
	return false;
	
});

</script>
            
        
        </div>
        
        
        <div class="clearer"></div>









</div>

</div>




</body>
</html>
