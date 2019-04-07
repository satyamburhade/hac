<?php
include("connect.php");
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:A_login.php");
}
?>
<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="font-awesome.min.css">
	<style type="text/css">
	body
	{
		padding:20px;		
	}
	a:link
	{
		margin-top: 40px;
		margin: 10px;
	}
	.leftmenu h4{
					font-family: Comic Sans MS;
					padding-left: 70px;
					padding-top: 30px;
					font-weight: bold;
					color:white ;
					font-size: 60px;
			    }
		#content
				{
						min-height:100px; 
				}
		#footer
				{
 					min-height:50px; 
				}
	</style>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
			<div id="banner" class="col-md-12">
				<div class="leftmenu">
			<h4>Helping Hand</h4>
		</div> 
				<?php include("banner.html"); ?>
			</div>
			<div id="menu" class="col-md-12">
				<?php include("A_menu.html"); ?>
			</div>
			<div id="content" class="col-md-12">
				<h1>Donar List</h1><br><br>
				<table class="table">
					<?php
   					$query="select * from donar_registration order by Id desc";
					if(mysqli_query($con,$query))
					{	?>
					<tr>
						<th class="Danger">Id</th>
						<th>Date</th>
						<th class="Success">Name</th>
						<th class="Warning">Email</th>
						<th class="info">Address</th>
						<th  class="Warning">Contact</th>
						<th class="Danger">Password</th>
					</tr>					
					<?php
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($result))
						{ ?>
							<tr>
							<td class="Danger" > <?php echo $row["Id"] ?></td>
							<td> <?php echo $row["Date"]?></td>
							<td class="Success"><?php echo $row["Name"]?></td>
							<td  class="Warning"><?php echo $row["Email"]?></td>
							<td class="info"><?php echo $row["Address"]?></td>
							<td  class="Warning"><?php echo $row["Contact"]?></td>
							<td class="Danger"><?php echo $row["Pass"]?></td>							
					<?php	}
					} ?>				
			</table>
			</div>
			<div id="footer" class="col-md-12">
				<hr><b style="align-items: center; padding-left: 27%;color: black">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
			</div>
			</div>
	</div>
</body>
</html>