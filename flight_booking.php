<!doctype html>
<html>
<head>
<style>
table tr th{
	width:200px;
	border:1px solid orange;
	border-collapse:collapse;
}
</style>
</head>
<body>
<table>
<tr>
<th>flight_id</th>
<th>START</th>
<th>END</th>
<th>DATE</th>
</tr>

<?php
	include "config.php";
	$result = mysql_query("SELECT * FROM `flight` WHERE fl_start = '".$_POST['city_origin']."' AND fl_end = '".$_POST['city_dest']."' AND fl_sate = '".$_POST['date']."'") or die(mysql_error());
	$count= mysql_num_rows($result);
if($count == 1){
	while($result1 = mysql_fetch_row($result))
{
	echo "<tr>";
	foreach($result1 as $ex){
	echo "<td style = 'padding:5px;'>".$ex."</td>";
	}
	echo "</tr>";
}
}
?>


</body>
</html>