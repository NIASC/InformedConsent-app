<?php
$page = extractGet('page');
$section_id = extractGet('section_id');
$section_type = 11;
?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>არსებული სიახლეები</h4>
	</div>
	
	<div class="span6 text-right">
		<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
			<select name="section_id" onchange="location.href='<?php echo '?page='.$page.'&language='.$content_language.'&act=list&section_id='; ?>'+this.value">
				<?php
				
				echo getSectionsByType($section_type, $content_language, $database_link);
				
				?>
			</select>
			- გვერდის დასახელება
			<input type="submit" name="doAddInfo" value="ობიექტის დამატება" class="btn btn-info" />
		</form>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th>კატეგორია</th>
			<th>პოსტების რაოდენობა</th>
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT
							COUNT(`bc_info`.`id`) as count,
							`bc_sections`.`id` as section_id,
							`bc_sections`.`name`,
							`bc_sections`.`description`,
							`bc_info`.`language`
						FROM
							`bc_info`
						LEFT JOIN
							`bc_sections`
						ON
							`bc_sections`.`id` = `bc_info`.`section_id` AND
							`bc_sections`.`language` = `bc_info`.`language`
						WHERE
							`bc_sections`.`type` = ".$section_type." AND
							`bc_sections`.`language` = '" . $content_language . "'
						GROUP BY `bc_sections`.`slug`";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		if(DBM::numRows($get_pages_result) == 1){
		
		$get_pages_data = DBM::fetchObject($get_pages_result);
		
		header('location: ?page='.$current_page_id . '&language=' . $content_language.'&act=list&section_id=' . $get_pages_data->section_id );
		
		die(asdasd.$get_pages_data->section_id);
		}
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
		
		
			
			echo '<tr>';
			
			echo '<td><a href="?page=' . $current_page_id . '&act=list&language=' . $get_pages_data->language . '&section_id=' . $get_pages_data->section_id . '">
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

