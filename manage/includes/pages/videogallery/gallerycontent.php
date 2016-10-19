<?php
	// Grab ID
$pk = (int) extractGet('pk');
$section_id = (int) extractGet('section_id');

// Save 	
if (extractPost('doSAVE') == $TRANSLATION['save']) {
	// Set thumbnail
	$main = extractPost('main');

	$update_query = "UPDATE
					`bc_video_gal_group`
						SET
						`thumbnail` = '". DBM::escape($main) ."'
							WHERE
   						`pk` = " . $pk;

   		
	DBM::query($update_query, $database_link);


}

$get_pages_query = "SELECT * FROM
							`bc_video_gal_group`
						WHERE
							`language` = '" . $content_language . "' AND
							`pk` = ". $pk ."";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		$get_pages_data = DBM::fetchObject($get_pages_result); 	
		
		$main = $get_pages_data->thumbnail;
		
		$group_id = $get_pages_data->id;
	}
	

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $get_pages_data->title; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=list&section_id=<?php echo $section_id; ?>" class="btn btn-warning"><?php echo $TRANSLATION['back']; ?></a>
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=addphoto&pk=<?php echo $pk; ?>" class="btn btn-info"><?php echo $TRANSLATION['new_video']; ?></a>
	</div>
	
</div>
<form method="post" name="321" id="321">
<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th>ფაილი</th>
            <th>სათაური</th>
			<th>კომენტარი</th>
			<th>მთავარი ფოტო</th>
            <th>ცვლილება</th>
			<th>წაშლა</th>
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	

	
	$get_pages_query = "SELECT * FROM
							`bc_video_gal`
						WHERE
							`language` = '" . $content_language . "' AND
							`group_id` = ". $group_id ."
						ORDER BY
							`sort` DESC";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {	
			
			echo '<tr>';
			
			if($get_pages_data->image != ''){
			echo '<td><img src="'. $config['fpath'] .$config['thumb_folder_name'].'small_'. $get_pages_data->image . '" width="150"/></td>';
			}
			elseif($get_pages_data->embed != '')
			echo '<td><img src="http://img.youtube.com/vi/'. youtube_id($get_pages_data->embed) . '/1.jpg"/></td>';
			
			echo '<td>' . $get_pages_data->title . '</td>';			
			echo '<td>' . $get_pages_data->description . '</td>';
			echo '<td>
					<input type="radio" name="main" value="' . $get_pages_data->image . '" '.is_checked($get_pages_data->image, $main).'/>
				</td>';
			
			echo '<td><a href="?page='. $current_page_id .'&language='. $content_language .'&act=editimage&gall_id='.$pk.'&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			
			echo '<td><a href="?page='. $current_page_id .'&language='. $content_language .'&act=deleteimage&gall_id='.$pk.'&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="return confirm(\'დარწმუნებული ხართ, რომ გინდათ გვერდის წაშლა?\');"><i class="icon-remove"></i></a></td>';
			
			echo '</tr>';
			
		}
		
	}
							
	
	?>
	
	</tbody>
	
</table>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4></h4>
	</div>
	
	<div class="span6 text-right">
	<input type="submit" name="doSAVE" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success">
</div>
	
</div>
</form>
