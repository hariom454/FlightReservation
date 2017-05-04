<!doctype html>
<html>
<head>
<style>

body{
	background-color:#abc;
	
}
</style>
</head>
<body>
<?php
include "config.php";
//include "login.php";

	//header "admin.php"
$result = mysql_query("SELECT * FROM flight") or die("error");
$count= mysql_num_rows($result);

echo "<table border = '1'>";
while($result1 = mysql_fetch_row($result))
{
	echo "<tr>";
	foreach($result1 as $ex){
	echo "<td style = 'padding:5px;'>".$ex."</td>";
	}
	echo "</tr>";
}
echo "</table>";
//print_r($_POST);
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$date = $_POST['date'];
	$passenger=$_POST['passengers'];
	$result2 = mysql_query("INSERT INTO flight VALUES('$id', '$start', '$end' , '$passenger','$date')") or die(mysql_error());
}

?>

<form name="admin" action="admin.php" method = "post">
ADD INFO<br>
<table>
<tr><td>ID</td><td><input type = "text" name= "id"></td></tr>
<tr><td>START</td><td><input type = "text" name ="start"></td></tr>
<tr><td>END</td><td><input type = "text" name="end"></td></tr>
<tr><td>PASSENGERS</td><td><input type = "text" name ="passengers"></td></tr>
<tr><td>DATE</td><td><input type = "date" name ="date"></td></tr>
<tr><td><input type = "submit" name="submit" value="submit"></td></tr>
</table>
</form>
<a href = "signout.php"><div style="padding = :10px;background-color:#fcf; text-align:center;">LOG OUT </div></a>
</body>
</html>