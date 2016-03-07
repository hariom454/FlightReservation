<?php
	session_start();
//	if(isset($_SESSION['login']) && $_SESSION['login'] == 1) 	header("Location: index.html");
	
?>
<html>
	<head>
	<title>ADMIN</title>
	<style>
	body{
	background-color:#cc88ff;
}
div{
	margin-left:400px;
	margin-top:50px;
	background-color:#abcdef;
	width:500px;
	height:500px;
	box-shadow:9px 9px blue;
	border-radius:80px 80px 80px 80px;
}
#botton{
	
	border-radius:10px;
	width:100px;
	height:40px;
	font-size:20px;
	background-color:grey;
}
	</style>
	</head>

	<body>
	<div class="form" id = "login">
	<form name="reg" action="login.php" method="post">
	<table height="200px" border="0" cellpadding="10" cellspacing="5" align="center">
	<tr>
	<td colspan = "2" ><?php if(isset($_SESSION['error_login'])) echo $_SESSION['error_login']; session_destroy();?></td>
	</tr>
	<tr>
	<td><input type="text" placeholder="USER NAME" id = "input"  name="username"/></td>
	</tr>
	<tr>
	<td><input type="password" id = "input" name="password" placeholder = "PASSWORD"/></td>
	</tr>
    <td><input name="submit" id="botton" type="submit" value="LOGIN" /></td>
	</tr>
	</table>
	</form>
	</div>		
	</body>
</html>