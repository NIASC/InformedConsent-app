<?php
$page = extractGet('page');
$section_id = extractGet('section_id');
?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['banners']; ?></h4>
	</div>
    
    <div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>&act=add" class="btn btn-info"><?php echo $TRANSLATION['new_banner']; ?></a>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th><?php echo $TRANSLATION['category']; ?></th>
			<th><?php echo $TRANSLATION['count']; ?></th>
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT
							COUNT(`bc_banner`.`id`) as count,
							`bc_settings`.`description`,
							`bc_settings`.`value`
						FROM
							`bc_banner`
						LEFT JOIN
							`bc_settings`
						ON
							`bc_settings`.`value` = `bc_banner`.`type` AND 
							`bc_settings`.`slug` = 'banner_type' AND
							`bc_banner`.`language` = '" . $content_language . "'
						WHERE
							`bc_banner`.`language` = '" . $content_language . "' 
						GROUP BY `bc_banner`.`type`";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		if(DBM::numRows($get_pages_result) == 1){
			
			$get_pages_data = DBM::fetchObject($get_pages_result);
			
			header('Location: ?page=' . $current_page_id . '&act=list&language=' . $content_language . '&section_id=' . $get_pages_data->value . '');
			
			}
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
			
			
			
			echo '<tr>';
			
			echo '<td><a href="?page=' . $current_page_id . '&act=list&language=' . $content_language . '&section_id=' . $get_pages_data->value . '">
						' . $get_pages_data->name . ' (' . $get_pages_data->description . ')
						</a>
				</td>';
			echo '<td>' . $get_pages_data->count . '</td>';
			
			echo '</tr>';
			
		}
		
	}
							
	
	?>
	
	</tbody>
	
</table>

