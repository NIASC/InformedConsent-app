<?php
error_reporting(0);

header('Content-type: text/html; charset=utf-8');

$current_date = date('Y-m-d');

function dropDown($first, $second) {
	
	if ($first == $second) {
		
		return ' selected="selected"';
		
	}
	
}

$allowed_langs = array('en', 'ka');
if(in_array($_GET['lang'], $allowed_langs)) $ena = $_GET['lang'];
else $ena = $allowed_langs[0];

define('DIR_PATH', '');

// Include Constants
require_once(DIR_PATH . 'includes/constants.php');

// Include Config
require_once(DIR_PATH . 'includes/database/mysql/config.php');

// Include General Functions
require_once(DIR_PATH . 'includes/general_functions.php');

// Include Database Functions
require_once(DIR_PATH . 'includes/database.class.php');

// Open Connection to DB
$database_link = DBM::open($config['database']);

require_once(DIR_PATH . 'includes/language/'.$ena.'.php');




//
if(!isset($_GET['dif']))
(int)$_GET['dif'] = '0';


$test = getdate();	
$today = getdate(mktime(0, 0, 0, $test['mon'] + $_GET['dif'], 1, $test['year']));
$firstDay = getdate(mktime(0, 0, 0, $today['mon'], 1, $today['year']));
$lastDay = getdate(mktime(0, 0, 0, $today['mon'] + 1, 0, $today['year']));


if($today['mon'] < 10)
	$cur_month = '0'.$today['mon'];
else $cur_month = $today['mon'];
?>

<ul class="calendar-head">
	<li><a onclick="cal(-1,'<?php echo $ena; ?>')" class="left-arrow arrow" data-id="left"><</a></li>
    <li class="month"><h3><?php echo $month_array[$cur_month]; ?></h3></li>
    <li><a onclick="cal(1, '<?php echo $ena; ?>')" class="right-arrow arrow" data-id="right">></a></li>
</ul>

<?php
/*
echo '<tr class="font2">
		<th class="first">'.$language['su'].'</th>
		<th>'.$language['mo'].'</th>
		<th>'.$language['tu'].'</th>
		<th>'.$language['we'].'</th>
		<th>'.$language['th'].'</th>
		<th>'.$language['fr'].'</th>
		<th class="last">'.$language['sa'].'</th>
	</tr>';
	*/
	
                        
for($i = 1; $i <= $firstDay['wday']; $i++) {
	
	$days_array[] = array (
						'value' => '',
						'date_format' => ''
					);
	
}

$actday = 0;

for ($i = $firstDay['wday']; $i <= 7; $i++) {
	
    if ( $actday == 7 && $i == 7 ){}
	
	else { 
	
		$actday++;
	
		if($actday < 10) 		$temoday = '0'.$actday;		
		else 					$temoday = $actday;		
			
		if($today['mon'] < 10) 	$temodate = $today['year'].'-0'.$today['mon'].'-'.$temoday;		
		else 					$temodate = $today['year'].'-'.$today['mon'].'-'.$temoday;
		
		$days_array[] = array(
							'value' => $actday, 
							'date_format' => $temodate
						);						
		}
	}


$fullWeeks = floor(($lastDay['mday'] - $actday) / 7);




for ($i = 0; $i < $fullWeeks; $i++) {
	
    for ($j = 0; $j < 7; $j++) {
		
		$actday++;
	
		if($actday < 10)
		
			$temoday = '0'.$actday;
		else
			$temoday = $actday;
			
		if($today['mon'] < 10)
		
			$temodate = $today['year'].'-0'.$today['mon'].'-'.$temoday;
			
		else
		
			$temodate = $today['year'].'-'.$today['mon'].'-'.$temoday;
			
		$days_array[] = array('value' => $actday, 
							'date_format' => $temodate);							
    	}	
    }
	
	
	
	
	
    if ($actday < $lastDay['mday']){
		
    for ($i = 0; $i < 7; $i++) {
		
        $actday++;
		
		if($actday < 10)
		
			$temoday = '0'.$actday;
			
		else
			$temoday = $actday;
			
		if($today['mon'] < 10)
		
			$temodate = $today['year'].'-0'.$today['mon'].'-'.$temoday;
		else
			$temodate = $today['year'].'-'.$today['mon'].'-'.$temoday;
		
			
        if ($actday <= $lastDay['mday']){
			
			$days_array[] = array('value' => $actday, 
							'date_format' => $temodate
							);
        }
        else {
			//clear item
						
			$days_array[] = array('value' => '', 
							'date_format' => ''
							);
		
        }
    }
}




function getEvent ($day) {
	
	global $ena, $language, $database_link;
	$country_id = (int)extractGet('country_id');	
	$event = '';		
	
	$get_query = "SELECT 
				`bc_info`.`id`, 
				`bc_info`.`title`, 
				`bc_info`.`description`, 
				`bc_info`.`slug` AS `info_slug`, 
				`bc_info`.`start_date`, 
				`bc_sections`.`slug`
			FROM 
				`bc_info`, `bc_sections`
			WHERE 
				`bc_info`.`section_id` = `bc_sections`.`id` AND
				`bc_info`.`language` = '" . $ena . "' AND
				`bc_info`.`language` = `bc_sections`.`language` AND
				`bc_info`.`published` = 'Y' AND
				`bc_info`.`start_date` >= '" . $day . " 00:00:00' AND 
				`bc_info`.`start_date` <= '" . $day . " 23:59:59' AND 
				`bc_sections`.`type` = 3 AND 
				`bc_info`.`important` = 'Y'
			LIMIT 4";
				
	if ($get_result = DBM::queryData($get_query, $database_link)) {
		
		$index = 1;
		
		while ($get_data = DBM::fetchObject($get_result)) {
			
			
			if($index == 1)
			$event .= '<li>
						<h3>'.datemutation($get_data->start_date, $language).'</h3>
                        <div><a href="'.SITE_URL.$ena.'/'.$get_data->slug.'/'.$get_data->info_slug.'">'.$get_data->title.'</a></div>
					</li>';
			else 
			$event .= '<li>
						<div><a href="'.SITE_URL.$ena.'/'.$get_data->slug.'/'.$get_data->info_slug.'">'.$get_data->title.'</a></div>
					</li>';
					
					
			$index++;
			//$events_array[] = $get_data;
			}			
	return $event;
	//return $events_array;	
	} 	
	else return;
}

?>
<ul class="dayes">                
<?php

$current_day_events = '';

foreach($days_array as $key => $day) {	
	
	$events = getEvent ($day['date_format']);
	
	if($current_date == $day['date_format']) $current_day_events = $events;
	
	if($events != '') $day_class = 'active'; else $day_class = ''; 
	
	if($day['value'] == '') $day_class .= ' empty';
	
	if($day_class == 'active')
	echo '<li class="'.$day_class.'"><a>'.$day['value'].'</a><ul>'.$events.'</ul></li>';
	
	else
	
	echo '<li class="'.$day_class.'"><a>'.$day['value'].'</a></li>';
	
	
}
?>
</ul>
<ul class="day-content"><?php echo $current_day_events; ?></ul>
