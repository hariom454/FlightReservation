<?php
session_start();
if(!isset($_POST['submit'])){
	echo "NOT DONE";
	header('LOCATION : signup.php');
	die();
}
include('config.php');
$user=$_POST['mname'];
$p1 = $_POST['pwd1'];
$p2 = $_POST['pwd2'];
if($p1 != $p2){
die("PASSWORD IS NOT MATCH");
}
else $password = $p1;
$password = md5($password);
$pr_id = mysql_query("SELECT MAX(mem_id) FROM member") or die(mysql_error());
$ar = mysql_fetch_row($pr_id);
$id = $ar[0];
if($id == "") $id = "blg".date('y')."001";
else
$id++;

$result1 = mysql_query("INSERT INTO member(`mem_id`,`user_name`,`password`) VALUES('$id', '$user', '$password')") or die(mysql_error());
if(!$result1) die("NOT REGISTERING YOU");
mysql_close($con);
header("location: index.php");
exit;
?>