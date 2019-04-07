<?php
session_start();

//database query

$p="1234";

if(isset($_POST["btnsignin"]))
{

$password=$_POST["txtpass"];

if($p==$password)
{
	$_SESSION["pass"]=$password;
	header("location:A_home.php");
}
else
{
	echo"Invalid password..";
}

}
