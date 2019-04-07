<?php
include("connect.php");  
session_start();

?>
<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<style type="text/css">
	body
	{
		padding:20px;
		background-color:black;

	}
	
	#first{
					background-color:black;
					min-height: 50px;
		    	}
		  #email{
					padding-top: 17px;
					color: white;
					font-family:Times New Roman;
					padding-left: 12%;
					font-size: 100%;
				}
		#logout{
					float: right;
					color: white;
					margin-top: 10px;
					background-color:red;
				}    	  

	#banner
	{
		width: 100%;
		height: 200px;
		background-position:50% 50%;
		background-size: cover;
		background-image:linear-gradient(rgba(26,26,26,0.2),rgba(26,26,26,0.4)),url("Dbanner.jpg");
 	}
 	#banner h1{
					font-family: Times New Roman;
					padding-left: 57%;
					font-weight: bold;
					padding-top: 5%;
					line-height: 50%;
					color:white ;
					filter:brightness(100%);
					font-size: 55px;
 				}
 				#banner h2{
 					line-height: 65%;

					font-family: Times New Roman;
					padding-left: 57%;
					font-weight: bold;
					padding-top: 5%;
					color:white ;
					filter:brightness(100%);
					font-size: 40px;
 				}
 				#banner h3{
 					line-height: 65%;

					font-family: Times New Roman;
					padding-left: 57%;
					font-weight: bold;
					padding-top: 5%;
					color:white ;
					filter:brightness(100%);
					font-size: 30px;
 				}



	
		 
	a:link
	{
		margin-top: 40px;
		margin: 10px;

	}
		#content
		{
			
			
			min-height:70%; 
			
		}
		
		

		.rightmenu ul li{
					padding-left: 80px;
					padding-top: 11px;
				}
		#leftmenu{
					width: 30%;
					line-height: 80px;
					padding-top: 10px;
					float:left;
			    }
	
			#menu{
				background-color:black;
			}
			.logo2{
				padding-bottom: 5px;
			}
			#info{
				font-family: 
			}
			 #footer1{
					bottom: 0;
				    background-image:linear-gradient(rgba(26,26,26,0.8),rgba(26,26,26,0.8)),url("foot-bg.jpg");
			        background-size: cover;
				    color: #f1f1f1;
			   	    width: 100%;
				    padding-top: 0%;
				    height: 40%;
				    position:50% 90%;  
				}
	  #footer1 ul{
					
				}
   #footer1 ul li{

					list-style: none;
					align-items: center;
					text-align:left;
					text-decoration-color: white;
				}
 #footer1 ul li a{
					color: white;
				}
				#footer
		{
						
 			 
 			 bottom: 0;
			 background-image:linear-gradient(rgba(26,26,26,0.9),rgba(26,26,26,0.9)),url("foot-bg.jpg");
			 background-size: cover;
			  color: #f1f1f1;
			  width: 100%;
			  padding-top: 0%;
			  height: 15%;
			  position:50% 90%;  

		}
			
			    
	</style>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
				<div class="row">
					<div id="first" class="col-md-12">
				<div id="email" class="col-md-9">
					<?php	echo $_SESSION["email"];  ?>
				</div>
				<div class="col-md-3">
				<a href="D_logout.php"><input id="logout"  type="button" name="" value="Logout" class="btn"></a>
	      </div>
			</div>
			<div id="menu" class="col-md-12">
				<div id="leftmenu" >
					<img class="logo2" src="logo22.png" height="60px" width="270px">
				</div> 

				<?php include("donar_menu.php"); ?>
			</div>
						
			<div id="banner" class="col-md-12">
				
				<h2 >Status</h2>
			</div>

			
			<div id="content" class="col-md-12">
			<table  class="table">
				<?php

					$em=$_SESSION["email"];

   					$query="select * from products where Email='$em' order by Id desc";
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
   									<td align="center"  style="padding-bottom: 20px" >
   									<div class="card-deck ">
   										<div class="card bg-success">
   									<div class="card-body text-primary">ID :<?php echo $r["Id"] ?></small>  /
   									<small><b><?php echo $r["Date"]?></b></small><br>
   									<img  class="img-circle" src="<?php echo $r["Pimgpath"]?>" height="150px" width="200px">					
				        		 	<?php
				        		 		//Check Products Status
				        		 		if(is_null($r["Pickupstatus"]))
				        		 		{
				        		 			$ps="Pending...";


				        		 		} 
				        		 		else
				        		 		{
				        		 			$ps=$r["Pickupstatus"];
				        		 		}
				        		 		if(is_null($r["Dstatus"]))
				        		 		{
				        		 			$ds="Pending...";
				        		 		} 
				        		 		else
				        		 		{
				        		 			$ds=$r["Dstatus"];
				        		 		}
				        		 		if(is_null($r["Ddate"]))
				        		 		{
				        		 			$dd="Pending...";

				        		 		} 
				        		 		else
				        		 		{
				        		 			$dd=$r["Ddate"];
				        		 		}
				        		 		if(is_null($r["Pickupdate"]))
				        		 		{
				        		 			$pd="Pending...";

				        		 		} 
				        		 		else
				        		 		{
				        		 			$pd=$r["Pickupdate"];

				        		 		}
				        		 		if(is_null($r["Pickuptime"]))
				        		 		{
				        		 			$pss="Pending...";

				        		 		} 
				        		 		else
				        		 		{
				        		 			$pss=$r["Pickuptime"];
				        		 		}
				        		 		if(!empty($r["Dstatus"]))
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
									
									<h4 >Product Type : <?php echo $r["Type"]?></h4>
									<div class="card-body text-primary"  id="info">Deleivery Status :<br> Date : <?php echo $pd ?><br>Time : <?php echo $pss ?></div>
									<div class="card-body text-primary" id="info">Pickup Status : <?php echo $ps; ?></div>
									<div class="card-body text-primary" id="info">Donation Status : <?php echo $ds ?></div>
									<div class="card-body text-primary" id="info">Donation Date : <?php echo $dd ?></div>
									<br>
									<form method="post">
									<input type="submit" name="btnimg" class="btn" value="View Donated Image" <?php echo $d2;?>/>
								</form>
									<?php 

									if(isset($_POST["btnimg"]))
									{ 
										$enabled="enabled"
										
										?>

									<img  class="img-rounded" src="<?php echo $r["Dimgpath"]?>" height="150px" width="200px" >
								<?php
								}	

									?>
								</div>
									</div>
								</td>
								<?php } ?>
						</tr>
						<?php } ?>	

			</table>
				
			</div>
						<div id="footer1" class="col-md-12">
			<div class="col-md-3">
				
				<h4 style=" padding-top:20px; color: white"> Useful Links :</h4>
				<ul>
						<li style="margin-left: 9%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 9%"><a href="P_registration.php">Registration</li>
						<li><a href="P_event.php">Event</li>
						<li><a href="P_about_us.php">About us</li>
						<li><a href="P_donarlogin">Login</a></li>
					</ul>
				
			</div>
					<div class="col-md-3">
					<h4 style=" padding-top:20px; color: white"> Helping Hand :</h4>
					<p style=" padding-top:20px; color: white">
						Urgent In-Kind Help Needed
						Clothes for Children, Women and Men.
						(New or old in good condition, All age groups)
					</p>	

					</div>
					<div class="col-md-6">
						<h4 style=" padding-top:20px; color: white;padding-left: 40px">  Reach Us :</h4>
							<ul>
								<li style=" padding-top:20px; color: white">Contact No : 8208823664</li>
								<li style=" padding-top:20px; color: white">E-mail : helpinghand@gmail.com</li>
								

							</ul><br>

					</div>
					
			</div>
			<div id="footer" class="col-md-12">
				
					<hr><b style="align-items: center; padding-left: 27%;color: white">Copyright2019.All Rights Reserved Powered By (DAP)Production</b>
					
			</div>
			</div>

		</div>
	</div>
</body>

</html>