<?php
$server=getenv("MYSQL_SERVICE_HOST");
$user="root";
$password=getenv("pass");
$database="helpinghand";
$con = new mysqli($server, $user, $password, $database);
if ($con->connect_errno){
	//echo"Connected with server successfully";
	printf("Connect failed: %s\n", $mysqli->connect_error);
	
}
else
{
	if(mysqli_select_db($con,$database))
	{
		//echo"Connection with database Successful";
	}
	else
	{
		//echo"Connection with database failed..";
		//die("Connection error");
	}
	//echo"Connection with server failed..";
	//die("Connection error");
}

?>
