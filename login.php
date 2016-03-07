<?php
include("config.php");
session_start();
if(isset($_POST['submit']))
{
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$mypassword = md5($mypassword);
$sql="SELECT mem_id FROM member WHERE user_name='$myusername' and password='$mypassword'";

$result=mysql_query($sql) or die("NOT REGISTERED");

$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);


if($count==1)
{
echo $_SESSION['user']=$myusername;
$_SESSION['login'] = 1;
$_SESSION['id'] = $row['mem_id'];
if($myusername == "admin") header("location: admin.php");
else header("location: search_dest.php");
}
else 
{
$_SESSION['error_login'] = "Your Login Name or Password is invalid";
header('LOCATION: login_frm.php');
}
}
?>