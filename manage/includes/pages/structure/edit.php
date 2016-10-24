<?php

// Grab ID
$pk = (int) extractGet('pk');

if (!($pk > 0)) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

// Edit Section
if (isset($_POST['doEdit'])) {

	// Grab Variables

	$name = extractPost('name');
	$description = extractPost('description');
	$slug = extractPost('slug');
	$parent_id = (int) extractPost('parent_id');
	$type = (int) extractPost('type');
	$active = extractPost('active');
	$style = (int)extractPost('style');
	$icon = extractPost('icon');
	if (get_magic_quotes_gpc()) {
		$name = stripslashes($name);
		$description = stripslashes($description);
	}
	
	$menu_types = extractPost('menu_type');
	
	if (!is_array($menu_types)) {
		$menu_types = array($menu_types);
	}
	
	if (strlen($name) > 0) {
   		
   		// Generate Slug
   		$generated_slug = generateSlug($database_link, $slug, $parent_id, $content_language);
   		
   		// Updating
   		
   		$update_query = "UPDATE
   							`bc_sections`
   								SET
   							`name` = '" . DBM::escape($name) . "',
   							`description` = '" . DBM::escape($description) . "',
   							`parent_id` = '" . $parent_id . "',
   							`slug` = '" . $generated_slug . "',
   							`active` = '" . DBM::escape($active) . "',
							`style` = '".DBM::escape($style)."',
							`icon` = '".DBM::escape($icon)."'
   								WHERE
   							`pk` = " . $pk;
   		
   		DBM::query($update_query, $database_link);
		
		
		$get_id = "SELECT `id` FROM `bc_sections` WHERE `pk` = " . $pk;
		
		if($result = DBM::query($get_id, $database_link)){
			
			$item = DBM::fetchObject($result);
		
			$update_query = "UPDATE
   							`bc_sections`
   								SET
   							`type` = '" . $type . "'
   								WHERE
   							`id` = " . $item->id;
   		
   			DBM::query($update_query, $database_link);
		}
		
   		// Insert Menu Types
   		
   		$delete_menus_query = "DELETE FROM
   								`bc_section_to_menu`
   									WHERE
   								`section_pk` = " . $pk;
   		
   		$delete_menus_result = DBM::query($delete_menus_query);
   	
   		foreach ($menu_types as $mKey => $mVal) {
	   		
	   		$menuID = (int) trim($mVal);
	   		
	   		if ($menuID > 0) {
	   			
	   			$insert_menus_query = "INSERT INTO
	   								`bc_section_to_menu`
	   									SET
	   								`section_pk` = " . $pk . ",
	   								`menu_id` = " . $menuID;
	   			
	   			DBM::query($insert_menus_query, $database_link);
	   				
	   		}
	   			
	   	}	
   		
   		header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   		
   		die();
   		
   	}
   	
}
//

// Get Data for Current Section
$get_section_query = "SELECT
					`bc_sections`.`pk`,
					`bc_sections`.`id`,
					`bc_sections`.`name`,
					`bc_sections`.`description`,
					`bc_sections`.`language`,
					`bc_sections`.`parent_id`,
					`bc_sections`.`slug`,
					`bc_sections`.`type`,
					`bc_sections`.`active`,
					`bc_sections`.`style`,
					`bc_sections`.`icon`,
					`bc_sections`.`sort`
						FROM
					`bc_sections`
						WHERE
					`bc_sections`.`pk` = " . $pk;

if (!($get_section_result = DBM::queryData($get_section_query, $database_link))) {
	
	header('location: ?page=' . $current_page_id . '&language=' . $content_language);
   	
   	die();
	
}

$get_section_data = DBM::fetchObject($get_section_result);

$slug_array = explode('/', $get_section_data->slug);

$real_slug = end($slug_array);

?>
<div class="row-fluid panel-title">
	
	<div class="span6">
		<h4><?php echo $TRANSLATION['edit_page']; ?></h4>
	</div>
	
	<div class="span6 text-right">
		<a href="?page=<?php echo $current_page_id; ?>&language=<?php echo $content_language; ?>" class="btn btn-info"><?php echo $TRANSLATION['back']; ?></a>
	</div>
	
</div>

<form name="section_edit_form" method="post" action="">
	
	<table class="table">
		
		<tbody>
		
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['name']; ?></th>
				<td>
					<input type="text" name="name" class="input-xxlarge" value="<?php echo $get_section_data->name; ?>" />
				</td>
				
			</tr>
		
			<tr class="icons-combo">
				
				<th class="text-right"><?php echo $TRANSLATION['icon']; ?></th>
				<td><input type="hidden" name="icon" value="<?php echo $get_section_data->icon; ?>"/>
                	<div class="well carousel-search hidden-sm">
                        <div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select" data-toggle="dropdown" href="#">Default <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li data-value="">No Icon</li>
                                <li data-value="icon-about" class="<?php echo bootstrap_dd('icon-about', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/1.png"/>
                                </li>
                                <li data-value="icon-how" class="<?php echo bootstrap_dd('icon-how', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/2.png"/>
                                </li>
                                <li data-value="icon-running" class="<?php echo bootstrap_dd('icon-running', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/3.png"/>
                                </li>
                                <li data-value="icon-who" class="<?php echo bootstrap_dd('icon-who', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/4.png"/>
                                </li>
                                <li data-value="icon-enroll" class="<?php echo bootstrap_dd('icon-enroll', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/5.png"/>
                                </li>
                                <li data-value="icon-task" class="<?php echo bootstrap_dd('icon-task', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/6.png"/>
                                </li>
                                <li data-value="icon-health" class="<?php echo bootstrap_dd('icon-health', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/7.png"/>
                                </li>
                                <li data-value="icon-science" class="<?php echo bootstrap_dd('icon-science', $get_section_data->icon); ?>">
                                	<img src="bootstrap/img/8.png"/>
                                </li>
                            </ul>
                        </div>
                    </div>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['description']; ?></th>
				<td>
					<input type="text" name="description" class="input-xxlarge" value="<?php echo $get_section_data->description; ?>" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right">URL</th>
				<td>
					<input type="text" name="slug" class="input-xxlarge" value="<?php echo ($get_section_data->type == 94)?$get_section_data->slug:$real_slug; ?>" />
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['parent']; ?></th>
				<td>
					<select name="parent_id" class="input-xlarge">
					<option value="0">- - - - - - - </option>
					<?php
			
					echo structureInCombobox($database_link, 0, $content_language, 0, $get_section_data->parent_id, array($get_section_data->id));
					
					?>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['type']; ?></th>
				<td>
					<select name="type" class="input-large" id="type">
					<?php
			
					echo typesInCombobox($database_link, $get_section_data->type);
					
					?>
					</select>
				</td>
				
			</tr>
            
            <?php
			
			$string = file_get_contents("js/templates.json");
			$json_a = json_decode($string, true);
			$templates = $json_a['widget'][$get_section_data->type]['templates'];
			
			?>
            
            <tr id="style_wrapper" <?php if(is_array($templates)) {} else echo 'class="hidden"'; ?>>
            	<th class="text-right"><?php echo $TRANSLATION['style']; ?></th>
                <td>
                	<ul id="style">
						<?php 
						if(is_array($templates)) {
							foreach($templates as $key => $value){
							echo '
							<li>
								<input type="radio" name="style" id="style-'.$key.'" value="'.$key.'" '.is_checked($key, $get_section_data->style).'/>
								<i class="'.$value['className'].'"></i>
								<label for="style-'.$key.'">'.$value['description'].'</label>
							</li>';
							}
						} 
						?>
                    </ul>
				</td>
            </tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['menu']; ?></th>
				<td>
					<div class="span4">
						<?php
			
						echo menusInCheckboxes($database_link, $pk);
						
						?>
					</div>
				</td>
				
			</tr>
			
			<tr>
				
				<th class="text-right"><?php echo $TRANSLATION['active']; ?></th>
				<td>
					<select name="active">
						<option value="Y"<?php echo dropDown('Y', $get_section_data->active); ?>><?php echo $TRANSLATION['yes']; ?></option>
						<option value="N"<?php echo dropDown('N', $get_section_data->active); ?>><?php echo $TRANSLATION['no']; ?></option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				
				<th></th>
				<td>
					<input type="submit" name="doEdit" value="<?php echo $TRANSLATION['save']; ?>" class="btn btn-success" />
					<input type="reset" name="doReset" value="<?php echo $TRANSLATION['cancel']; ?>" class="btn btn-warning" />
				</td>
				
			</tr>
		
		</tbody>
		
	</table>
	
</form>