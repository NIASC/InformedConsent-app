<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>არსებული ვიდეო გალერიები</h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info">გალერიის დამატება</a>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th>გვერდი</th>
            <th>რაოდენობა</th>           
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT 
							`bc_sections`.`id`,
							`bc_sections`.`name`,
							COUNT(`bc_video_gal_group`.`id`) AS `count`
						FROM
							`bc_sections` 
						LEFT JOIN `bc_video_gal_group` ON 
								`bc_video_gal_group`.`language` = `bc_sections`.`language` AND 
								`bc_video_gal_group`.`section_id` = `bc_sections`.`id`
						WHERE
							`bc_sections`.`language` = '" . $content_language . "' AND 
							`bc_sections`.`type` = '".$page_type."' 
						GROUP BY `bc_sections`.`id`";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
						
			echo '<tr>';
			
			echo '<td><a href="?page='. $current_page_id .'&language='. $content_language .'&act=list&section_id='. $get_pages_data->id .'">' . $get_pages_data->name . '</a></td>';			
			echo '<td>' . $get_pages_data->count . '</td>';
			
			echo '</tr>';
			
		}
		
	}
							
	
	?>
	
	</tbody>
	
</table>

