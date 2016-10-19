<?php

	$section_id = (int)extractGet('section_id');

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>არსებული ვიდეო გალერიები</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&section_id=<?php echo $section_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info">გალერიის დამატება</a>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th>მთავარი ფოტო</th>
            <th>სათაური</th>
			<th>აღწერა</th>
			<th>კონტენტი</th>
            <th>ცვლილება</th>
			<th>წაშლა</th>
           <!-- <th>სორტირება</th>-->
           
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT * FROM
							`bc_video_gal_group`
						WHERE
							`language` = '" . $content_language . "' AND 
							`section_id` = '".$section_id."'
						ORDER BY
							`date` DESC, `sort` DESC";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
						
			echo '<tr>';
			
			if(file_exists($config['fpath'].$config['thumb_folder_name'].'small_'.$get_pages_data->thumbnail)&&$get_pages_data->thumbnail!='')
			echo '<td><img src="'. $config['fpath'].$config['thumb_folder_name'].'small_'.$get_pages_data->thumbnail .'" width="200"/></td>';
			else 
			echo '<td></td>';
			
			echo '<td>' . $get_pages_data->title . '</td>';			
			echo '<td>' . $get_pages_data->description . '</td>';
			echo '<td><a href="?page='. $current_page_id .'&section_id='. $section_id .'&language='. $content_language .'&act=content&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-th-list"></i></a></td>';
			
			echo '<td><a href="?page='. $current_page_id .'&section_id='. $section_id .'&language='. $content_language .'&act=edit&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			
			echo '<td><a href="?page='. $current_page_id .'&section_id='. $section_id .'&language='. $content_language .'&act=delete&pk='. $get_pages_data->pk .'" class="btn btn-mini btn-danger" onclick="return confirm(\'დარწმუნებული ხართ, რომ გინდათ გვერდის წაშლა?\');"><i class="icon-remove"></i></a></td>';
			/*
			echo '<td><a href="?page='. $current_page_id .'&section_id='. $section_id .'&language='. $content_language .'&act=sort&pk='. $get_pages_data->pk .'&dir=up" class="btn btn-mini btn-info"><i class="icon-arrow-up"></i></a> 
					<a href="?page='. $current_page_id .'&section_id='. $section_id .'&language='. $content_language .'&act=sort&pk='. $get_pages_data->pk .'&dir=down" class="btn btn-mini btn-info"><i class="icon-arrow-down"></i></a></td>';*/
			
			echo '</tr>';
			
		}
		
	}
							
	
	?>
	
	</tbody>
	
</table>

