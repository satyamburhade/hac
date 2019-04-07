<?php
$server=172.17.0.3;
$user="root";
$password="";
$database="helpinghand";
#$con = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
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
