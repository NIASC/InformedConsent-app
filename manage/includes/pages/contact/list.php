<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['contact_pages']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<form name="add_new" method="get" action="">
			<input type="hidden" name="page" value="<?php echo $current_page_id; ?>" />
			<input type="hidden" name="language" value="<?php echo $content_language; ?>" />
			<input type="hidden" name="act" value="add" />
            <?php echo $TRANSLATION['page']; ?> - 
			<select name="section_id">
				<?php
				
				echo getSectionsByType(5, $content_language, $database_link);
				
				?>
			</select>
			&nbsp; &nbsp; &nbsp;
			<input type="submit" name="doAddInfo" value="<?php echo $TRANSLATION['new_page']; ?>" class="btn btn-info" />
		</form>
	</div>
	
</div>

<table class="table table-striped table-bordered">
	
	<thead>
		
		<tr>
			
			<th><?php echo $TRANSLATION['title']; ?></th>
			<th><?php echo $TRANSLATION['page']; ?></th>
			<th><?php echo $TRANSLATION['edit']; ?></th>
			<th><?php echo $TRANSLATION['delete']; ?></th>
	
		</tr>
	
	</thead>
	
	<tbody>
	
	<?php
	
	$get_pages_query = "SELECT
							`bc_info`.`pk`,
							`bc_info`.`id`,
							`bc_info`.`section_id`,
							`bc_info`.`language`,
							`bc_info`.`title`,
							`bc_info`.`description`,
							`bc_info`.`content`,
							`bc_info`.`start_date`,
							`bc_info`.`end_date`,
							`bc_info`.`thumbnail`,
							`bc_info`.`published`,
							`bc_sections`.`name`
						FROM
							`bc_info`
						LEFT JOIN
							`bc_sections`
						ON
							`bc_sections`.`id` = `bc_info`.`section_id` AND
							`bc_sections`.`language` = `bc_info`.`language`
						WHERE
							`bc_sections`.`type` = 5 AND
							`bc_sections`.`language` = '" . $content_language . "'
						ORDER BY
							`bc_info`.`start_date` DESC";
	
	if ($get_pages_result = DBM::queryData($get_pages_query)) {
		
		while ($get_pages_data = DBM::fetchObject($get_pages_result)) {
			
			echo '<tr>';
			
			echo '<td>' . $get_pages_data->title . '</td>';
			echo '<td>' . $get_pages_data->name . '</td>';
			echo '<td><a href="?page=' . $current_page_id . '&act=edit&language=' . $get_pages_data->language . '&section_id=' . $get_pages_data->section_id . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-warning"><i class="icon-edit"></i></a></td>';
			echo '<td><a href="?page=' . $current_page_id . '&act=delete&language=' . $get_pages_data->language . '&section_id=' . $get_pages_data->section_id . '&info_pk=' . $get_pages_data->pk . '" class="btn btn-mini btn-danger" onclick="return confirm(\''.$TRANSLATION['deletion_confirm'].'\');"><i class="icon-remove"></i></a></td>';
			
			echo '</tr>';
			
		}
		
	}
							
	
	?>
	
	</tbody>
	
</table>

