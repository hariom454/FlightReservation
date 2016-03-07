<!doctype html>
<head>
<style>
body{
	background-color:#155;
}
div{
	margin-left:400px;
	margin-top:50px;
	background-color:#ffc;
	width:500px;
	height:500px;
	box-shadow:7px 8px gray;
	border-radius:80px 0px 80px 0px;
}
</style>
</head>
<body>
<script>
function check()
{
	var x=document.forms["reg"]["mname"].value;
	if(x==""||x==NULL)
	{
		alert("plz enter name");
		return false;
	}
	var y=document.forms["reg"]["pwd1"].value;
	if(y==""||y.length<3)
	{
		alert("plz enter valid password");
		return false;
	}
}
</script>
<div class = "form">
<h1 align="center">Sign Up</h1>
	<form name="reg" align="center" action="code_exec.php" method="post" enctype="multipart/form-data" onsubmit="return check()">
		<table width="500px" height="450px" border="0" align="center" cellpadding="10" cellspacing="5">

			<tr>
				<td>USER NAME</td>
				<td colspan="2"><input type="text" placeholder = "USER NAME" name="mname" /></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td colspan="2"><input type="password"  placeholder ="PASSWORD" name="pwd1" /></td>
			</tr>
			<tr>
				<td>CONFIRM PASSWORD</td>
				<td colspan="2"><input type="password"  placeholder ="PASSWORD" name="pwd2" /></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input name="submit" type="submit" id="btn" value="Submit" /></td>
			</tr>
		</table>
	</form>

</div>
</body>
</html>
