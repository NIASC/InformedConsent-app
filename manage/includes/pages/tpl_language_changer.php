<div class="language_changer <?php if (extractGet('page') == 13) echo 'hidden'; ?>">
	<form name="admin_language_change" method="get" action="">
		<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>" />
        <?php
		
		if(isset($_GET['section_id']))
		
		echo '<input type="hidden" name="section_id" value="'.$_GET['section_id'].'" />';
		
		if(isset($_GET['pk'])) {
		
			$query = "SELECT `pk`,`id` FROM `bc_sections` WHERE pk = ".extractGet('pk')." ";
			if ($get_pages_result = DBM::queryData($query)){
			$get_pages_data = DBM::fetchObject($get_pages_result);
				$query2 = "SELECT `pk`,`id` FROM `bc_sections` WHERE id = ".$get_pages_data->id." AND `language` != '".$content_language."'";
				if ($get_pages_result2 = DBM::queryData($query2)){
				$get_pages_data2 = DBM::fetchObject($get_pages_result2);
				echo '<input type="hidden" name="pk" value="'.$get_pages_data2->pk.'" />';
				}
			}
		
		}
		
		if(isset($_GET['gall_id'])){
			$query = "SELECT `pk`,`id` FROM `bc_gallery_group` WHERE pk = ".extractGet('gall_id')." ";
			if ($get_pages_result = DBM::queryData($query)){
			$get_pages_data = DBM::fetchObject($get_pages_result);
			echo '<input type="hidden" name="gall_id" value="'.$get_pages_data->pk.'" />';
			}
			
			if(isset($_GET['info_pk'])){
				$query = "SELECT `pk`,`id` FROM `bc_gallery` WHERE pk = ".extractGet('info_pk')." ";
				if ($get_pages_result = DBM::queryData($query)){
				$get_pages_data = DBM::fetchObject($get_pages_result);
				echo '<input type="hidden" name="info_pk" value="'.$get_pages_data->pk.'" />';
				}
			}
			
		}
		elseif(isset($_GET['info_pk'])){
		
			if($_GET['page'] == 5)
			$query = "SELECT `pk`,`id` FROM `bc_gallery_group` WHERE pk = ".extractGet('info_pk')." ";
			elseif($_GET['page'] == 7)
			$query = "SELECT `pk`,`id` FROM `bc_video_gal_group` WHERE pk = ".extractGet('info_pk')." ";
			else
			$query = "SELECT `pk`,`id` FROM `bc_info` WHERE pk = ".extractGet('info_pk')." ";
		
		if ($get_pages_result = DBM::queryData($query)){
			$get_pages_data = DBM::fetchObject($get_pages_result);
			
			if($_GET['page'] == 5)
			$query_id = "SELECT `pk` FROM `bc_gallery_group` WHERE id = ".$get_pages_data->id." AND language != '". $content_language ."'";
			elseif($_GET['page'] == 7)
			$query_id = "SELECT `pk` FROM `bc_video_gal_group` WHERE id = ".$get_pages_data->id." AND language != '". $content_language ."'";
			else
			$query_id = "SELECT `pk` FROM `bc_info` WHERE id = ".$get_pages_data->id." AND language != '". $content_language ."'";
			
			if ($result = DBM::queryData($query_id)){
				$data = DBM::fetchObject($result);
				echo '<input type="hidden" name="info_pk" value="'.$data->pk.'" />';
				}
			}
		
		
		}
		
		if(isset($_GET['act']))
		echo '<input type="hidden" name="act" value="'.$_GET['act'].'" />';
		?>
		
		<?php echo $TRANSLATION['language_changer']; ?> - <select name="language" onchange="this.form.submit();">
			<?php
				foreach ($config['languages'] as $key => $val) {
					echo '<option value="' . $val . '"' . is_selected($val, $content_language).'>' . $val . '</option>' . "\n";
				}
			?>
		</select>
	</form>
</div>