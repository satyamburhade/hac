<?php
$server="localhost";
$user="root";
$password="";
$database="helpinghand";

if($con=mysqli_connect($server,$user,$password))
{
	//echo"Connected with server successfully";
	if(mysqli_select_db($con,$database))
	{
		//echo"Connection with database Successful";
	}
	else
	{
		//echo"Connection with database failed..";
		//die("Connection error");
	}
	
}
else
{
	//echo"Connection with server failed..";
	//die("Connection error");
}

?>