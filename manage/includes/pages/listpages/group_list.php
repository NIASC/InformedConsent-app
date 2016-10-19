<?php
if(INSYS != 'pc777') die('404');

$page = extractGet('page');
$section_id = extractGet('section_id');

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4>არსებული ჩანაწერები</h4>
	</div>
	
	<div class="span6 text-right">
		<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
			გვერდის დასახელება - 
            <select name="section_id" onchange="location.href='<?php echo '?page='.$page.'&language='.$content_language.'&act=list&section_id='; ?>'+this.value">
				<?php
				
				echo getSectionsByType($page_type, $content_language, $database_link);
				
				?>
			</select>
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="doAddInfo" value="პოსტის დამატება" class="btn btn-info" />
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
							`bc_sections`.`type` = ".$page_type." AND
							`bc_sections`.`language` = '" . $content_language . "'
						GROUP BY `bc_sections`.`slug`";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
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

