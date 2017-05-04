<!doctype>
<?php
session_start();
?>
<html>
<head>
<style>
body{
	background-color:#330066;
}
input{
	padding:7px;
}
div{
	background-color: #66FF00;
	margin-top:5%;
	margin-left:30%;
	padding:5%;
	width:25%;
	border-radius:25px;
	box-shadow:0px 0px 20px 0px #fff;
}
#passenger{
	width:175px;
}
#botton{
	
	border-radius:10px;
	width:100px;
	height:40px;
	font-size:20px;
	background-color:grey;
}
</style>
<link rel="stylesheet" type="text/css" href="mysylr.css">
<script>
function validflight(){
var x=document.forms["flight"]["city_origin"].value;
var y=document.forms["flight"]["city_dest"].value;
if(x=="" || y==""){
	alert("plz select cities!");
	return false;
}
	
if(x==y)
{
	alert("select different cities!");
	return false;
}

}
</script>
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

<h1> WELCOME IN OFFICIAL SITE OF AIRINDIA</h1>
<div class="main">
<form method="post" name="flight" action="flight_booking.php" target="_self" onsubmit="return validflight()">
select Origin:<br><input list="origin" name="city_origin" value="">
<datalist id="origin" >
<option value="Agra">
<option value="Delhi">
<option value="Mumbai"> 
<option value="Kolkata" >
<option value="Ahemdabad">
</datalist>
<br>
<br>
<br>

select Destination:<br><input list="destination" name="city_dest" value="">
<datalist id="destination" >
<option value="Agra">
<option value="Delhi">
<option value="Mumbai"> 
<option value="Kolkata" >
<option value="Ahemdabad">
</datalist>
<br><br><br>

depart date:<br><input type="date" name="date" value="">
  <br><br><br>
passenger(s):<br><input id="passenger" value="traveller(s)" type="number" min="1" step="1" max="5"  name="passenger">
<br><br><br>

<input type="submit" id="botton" value="SUBMIT" />
<a href = "signout.php"><div style="padding = :10px;background-color:#fcf; text-align:center;">LOG OUT </div></a>
</div>
</body>
</html>


