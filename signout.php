<?php
session_start();
$_SESSION = array();
unset($_SESSION);
session_destroy();
header("location:index.php");
exit;


/*
session_start();
session_destroy();
header('LOCATION: index.php');*/
?>