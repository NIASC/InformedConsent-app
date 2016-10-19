<?php

if($_GET['securekey']!='asdsa')die('<option>access denied!</option>');
require_once('../../config.php');
require_once('../../functions.php');
require_once('../../database.class.php');

$database_link = DBM::open($config['database']);

$key = mysql_real_escape_string($_GET['keyword']);
$lang = mysql_real_escape_string($_GET['lang']);


if(isset($_GET['albums']))
{
$query = "SELECT * FROM `bc_gallery_group` WHERE language = '".$lang."' and `title` LIKE '$key%' limit 0,10";

$result = DBM::queryData($query);

while($row = DBM::fetchObject($result))

echo '<option value="'.$row->id.'">'.$row->title.'</option>';
	
}


if(isset($_GET['news'])){
	
	$query = "SELECT * FROM `bc_info` WHERE language = '".$lang."' and `title` LIKE '$key%' limit 0,10";

	if($result = DBM::queryData($query)){
	
	while($row = DBM::fetchObject($result))
	
	echo '
	<tr id="html'.$row->id.'_news">
	
		<td><span class="row_plus" onclick="add_option(\'news\','.$row->id.')"></span></td>
		
		<td id="title'.$row->id.'_news">'.$row->title.'</td>
		
	</tr>';
	
	//echo '<option value="'.$row->id.'">'.$row->title.'</option>';
}
}

	DBM::close($database_link);
?>