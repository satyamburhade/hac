<?php
session_start();
include("connect.php");
if(isset($_POST["btnlogin"]))
{
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];

	$query="SELECT * FROM donar_registration WHERE Email='$email' and Pass='$pass'";

	if($result=mysqli_query($con,$query))
	{
		if(mysqli_num_rows($result)>0)
		{
				$_SESSION["email"]=$email;
				header("location:D_home.php");
		}
		else
		{
			echo"Invalid username or password..";
		}

	}
	else
	{
		echo mysql_error();
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
		background: url(bg_1.jpg)no-repeat;
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
		color:white;

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
	<h2>Donar</h2>
	<form method="post">
	<div class="textbox">
		<input type="email" placeholder="Email" class="form-control" name="txtemail"><br>
		<input type="password" placeholder="Password" class="form-control" name="txtpass">	
		
	</div>
	<input class="btn" type="submit" name="btnlogin" value="sign in "/>
	</form>
</div>
</body>
</html>