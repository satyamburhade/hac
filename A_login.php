<?php
session_start();
$p="dap2019";

if(isset($_POST["btnsign"]))
{

$password=$_POST["txtpass"];

if($p==$password)
{
	
	$_SESSION["admin"]="admin";
	header("location:A_home.php");
}
else
{
	echo"Invalid password..";
}

}


?>
<html>
<head>
	<title>Login Form</title>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<style type="text/css">
	body
	{	

		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(3.jpg)no-repeat;
		background-size: cover;
	}
	.main{
		background-color:#34495E;

	}
	.login-box
	{
	
		width: 280px;
		position: absolute;
		top: 50%;
		left: 80%;
		transform: translate(-50%,-50%);
		color: white;
	}
	.login-box h1{
		color:rgba(255,255,145);

		float: left;
		font-size: 40px;
		border-bottom:6px solid #4caf50;
		margin-bottom: 50px;
		padding: 13px 0
	}
	.textbox{
		width: 100%;
		overflow: hidden;
		font-size: 20px;
		padding: 8px 0;
		margin: 8px 0;
		border-bottom: 1px solid #4caf50;

	}


    </style>
</head>
<body>
	<div class="main">
	<div class="login-box">
	<h1><b>Helping hands</b></h1>
	<h2>Admin</h2>
	<form method="post">
	<div class="textbox">
		<input type="password" placeholder="Password" class="form-control" name="txtpass"/>	

	</div>
	<input class="btn" type="submit" name="btnsign" value="sign in "/>
	</form>
</div>

</body>
</html>