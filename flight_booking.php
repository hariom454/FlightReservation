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
<link rel="stylesheet" type="text/css" href="mysylr.css">
</head>
<body>
	<nav>
  <ul>
    <li>
        <a href="signup.php">Sign up</a>
    </li>
    <li>
        <a href="login_frm.php">Login</a>
    </li>
    <li>
        <a href="search_dest.php">Check Availbility</a>
    </li>
    <li>
        <a href="flight_booking.php">Reserve Ticket</a>
    </li>
    <li>
        <a href="#">Contact Us</a>
    </li>
  </ul>
</nav>

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
	echo $result;
if($count){
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