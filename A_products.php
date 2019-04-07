<?php 
include("connect.php");
session_start();

if(!isset($_SESSION["admin"]))
{
	header("location:A_login.php");
}
if(isset($_POST["btnupdateD"]))
{
	$id=$_POST["hid"];
	header("location:A_udd.php?hid=$id");
}
if(isset($_POST["btnpickup"]))
{
	$id=$_POST["hid"];
	header("location:A_ups.php?hid=$id");
}
if(isset($_POST["btndonation"]))
{
			$id=$_POST["hid"];
			$_SESSION["id1"]=$id;
			
			


		header("location:A_dd.php");
}
  ?>

<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<style type="text/css">
	.ok
	{
		background-color: red;
		}
	.notok
	{
		background-color: green;

	}
	body
	{
		padding:20px;
	}
	a:link
	{
		margin-top: 40px;
		margin: 10px;

	}
				#content
		{
			 
			min-height:200px; 
			
		}
		#footer
		{
			 
			min-height:50px; 
			
		}
		.leftmenu h4{
					font-family: Comic Sans MS;
					padding-left: 70px;

					padding-top: 30px;
					font-weight: bold;
					color:white ;
					font-size: 60px;
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
			<div id="content" class="col-md-12" align="center"><br>

				<table  class="table">
				<?php

					
   					$query="select * from products order by Id desc";
   					$result=mysqli_query($con,$query);
   					
   						$records=mysqli_num_rows($result);
   					
   					
   					$row=ceil($records/3);

   					for ($i=1;$i<=$row;$i++)
   					{
   						?>
   							<tr>
   								<?php for($j=1;$j<=3;$j++)
   								{
   									$r=mysqli_fetch_assoc($result);
   									
   								?>
   								<form method="post" >
   								<td >
   									<img src="<?php echo $r["Pimgpath"]?>" height="150px" width="200px">					
				        			 <h4>Product ID :<?php echo $r["Id"] ?></h4>
				        			 <input type="hidden" name="hid" value="<?php echo $r["Id"] ?>"/>
									<h4>Date : <?php echo $r["Date"]?></h4>
									<h4>Product Type : <?php echo $r["Type"]?></h4>
									<h4>Description :<?php echo $r["Descri"]?></h4>
									<h4>Product Condition :<?php echo $r["Pcondition"]?></h4>
									<h4>Email :<?php echo $r["Email"]?></h4>
									<?php 
										//fetch user information
										$email=$r["Email"];
										$query1="select * from donar_registration where Email='$email'";
										$result1=mysqli_query($con,$query1);
										$row1=mysqli_fetch_assoc($result1);
									?>
									<h4>Contact No :<?php echo $row1["Contact"]?> </h4>
									<?php
										if(empty($r["Pickupdate"]))
										{
											$e="notok";
											$d="enabled";

										}
										else
										{
											$e="ok";
											$d="disabled";
										}

										if(empty($r["Pickupstatus"]))
										{
											$e1="notok";
											$d1="enabled";

										}
										else
										{
											$e1="ok";
											$d1="disabled";
										}

										if(empty($r["Dstatus"]))
										{
											$e2="notok";
											$d2="enabled";

										}
										else
										{
											$e2="ok";
											$d2="disabled";
										}
									?>
									<input class="btn <?php echo $e;?>" type="submit" name="btnupdateD" value="Update Delivery Details" style="margin: 7px" <?php echo $d;?>><br>
									<input class="btn <?php echo $e1;?>" type="submit" name="btnpickup" value="Update Pickup Status" style="margin: 7px" <?php echo $d1;?>>
									 	<br>
									<input class="btn <?php echo $e2;?>" type="submit" name="btndonation" value="Donation Details " style="margin: 7px " align="center" <?php echo $d2;?>><br>
								</td>
							</form>
								<?php } ?>
						</tr>
						<?php } ?>
					</table>

						
				
							
					
			</div>
			<div id="footer" class="col-md-12">
				<hr><b style="align-items: center; padding-left: 27%;color: black">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
			</div>

		</div>
	</div>
</body>

</html>
				