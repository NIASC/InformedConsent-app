<?php

// Add Section
if (isset($_POST['doAdd'])) {

	// Grab Variables	
	$name = extractPost('name');
	$description = extractPost('description');
	$slug = extractPost('slug');
	$parent_id = (int) extractPost('parent_id');
	$type = (int) extractPost('type');
	$active = extractPost('active');
	$icon = extractPost('icon');
	$style = (int)extractPost('style');
	if (get_magic_quotes_gpc()) {
		$name = stripslashes($name);
		$description = stripslashes($description);
	}
	
	$menu_types = extractPost('menu_type');
	
	if (!is_array($menu_types)) {
		$menu_types = array($menu_types);
	}
	
	if (strlen($name) > 0) {
	
   		// Selecting Max Section ID
   		$max_id_query = "SELECT MAX(`id`) AS `max_id` FROM `bc_sections`";
   		
   		if ($max_id_result = DBM::queryData($max_id_query, $database_link)) {
   			
   			$max_id_data = DBM::fetchObject($max_id_result);
   			
   			$max_section_id = $max_id_data->max_id;
   			
   		} else {
   		
   			$max_section_id = 0;
   			
   		}
   		
   		// Get Next ID
   		$real_section_id = $max_section_id + 1;
   		
   		// Cycle of Languages
   		foreach ($config['languages'] as $key => $val) {
   		
   			// Selecting Max Sort
   			$max_sort_query = "SELECT MAX(`sort`) AS `max_sort` FROM `bc_sections` WHERE `parent_id` = '" . DBM::escape($parent_id) . "' AND `language` = '" . $val . "'";
   			
   			if ($max_sort_result = DBM::queryData($max_sort_query, $database_link)) {
   			
   				$max_sort_data = DBM::fetchObject($max_sort_result);
   				
   				$max_sort = $max_sort_data->max_sort;
   				
   			} else {
   			
   				$max_sort = 0;
   				
   			}
   			
   			$real_sort = $max_sort + 1;
   			
   			// Generating Name
   			if ($val != $content_language) {
   				$real_name = $name . ' (' . $val . ')';
   			} else {
	   			$real_name = $name;
   			}
   			
   			// Generate Slug
   			$generated_slug = generateSlug($database_link, $slug, $parent_id, $val);
   			
   			// Inserting
   				
   			$insert_query = "INSERT INTO
   								`bc_sections`
   									SET
   								`id` = " . $real_section_id . ",
   								`name` = '" . DBM::escape($real_name) . "',
   								`description` = '" . DBM::escape($description) . "',
   								`language` = '" . $val . "',
   								`parent_id` = '" . $parent_id . "',
   								`slug` = '" . $generated_slug . "',
   								`type` = " . $type . ",
   								`active` = '" . DBM::escape($active) . "',
								`style` = '".DBM::escape($style)."',
								`icon` = '".DBM::escape($icon)."',
   								`sort` = " . $real_sort . "";
   			
   			DBM::query($insert_query, $database_link);
   			
   			$insert_id = DBM::insertID($database_link);
   			
   			// Insert Menu Types
   			
   			if ($insert_id > 0) {
   			
	   			foreach ($menu_types as $mKey => $mVal) {
	   				
	   				$menuID = (int) trim($mVal);
	   				
	   				if ($menuID > 0) {
	   					
	   					$insert_menus_query = "INSERT INTO
	   										`bc_section_to_menu`
	   											SET
	   										`section_pk` = " . $insert_id . ",
	   										`menu_id` = " . $menuID;
	   					
	   					DBM::query($insert_menus_query, $database_link);
	   					
	   				}
	   				
	   			}
	   			
	   		}	
   			
   		}
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['add_page']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_add_form" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="name" class="input-xxlarge" />
				</td>
				
			</tr>
		
			<tr class="icons-combo">
				
				<th class="text-right"><?php echo $TRANSLATION['icon']; ?></th>
				<td><input type="hidden" name="icon"/>
                	<div class="well carousel-search hidden-sm">
                        <div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Default <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li data-value="" class="active">No Icon</li>
                                <li data-value="icon-about"><img src="bootstrap/img/1.png"/></li>
                                <li data-value="icon-how"><img src="bootstrap/img/2.png"/></li>
                                <li data-value="icon-running"><img src="bootstrap/img/3.png"/></li>
                                <li data-value="icon-who"><img src="bootstrap/img/4.png"/></li>
                                <li data-value="icon-enroll"><img src="bootstrap/img/5.png"/></li>
                                <li data-value="icon-task"><img src="bootstrap/img/6.png"/></li>
                                <li data-value="icon-health"><img src="bootstrap/img/7.png"/></li>
                                <li data-value="icon-science"><img src="bootstrap/img/8.png"/></li>
                            </ul>
                        </div>
                    </div>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<input type="text" name="description" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">URL</th>
				<td>
					<input type="text" name="slug" class="input-xxlarge" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['parent']; ?></th>
				<td>
					<select name="parent_id" class="input-xlarge">
					<option value="0">- - - - - - - </option>
					<?php
			
					echo structureInCombobox($database_link, 0, $content_language);
					
					?>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['type']; ?></th>
				<td>
					<select name="type" class="input-large" id="type">
					<?php
			
					echo typesInCombobox($database_link);
					
					?>
					</select>
				</td>
				
			</tr>
            
            <tr id="style_wrapper" class="hidden">
            	<th class="text-right"><?php echo $TRANSLATION['style']; ?></th>
                <td>
                	<ul id="style"></ul>
				</td>
            </tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['menu']; ?></th>
				<td>
					<div class="span4">
						<?php
			
						echo menusInCheckboxes($database_link);
						
						?>
					</div>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
				<td>
					<select name="active">
						<option value="Y"><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doAdd" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>