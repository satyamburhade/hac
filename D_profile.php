<?php
session_start();
?>
<?php
include("connect.php");
function setValue($fieldName)
{
	if(isset($_POST[$fieldName]))
	{
		echo $_POST[$fieldName];
	}
}
if(isset($_POST["btnupdate"]))
{
	$email=$_SESSION["email"];	
	$name=$_POST["txtdname"];
	$contact=$_POST["txtdcontact"];
	$address=$_POST["txtdaddress"];
	$pass=$_POST["txtdpassword"];
	$cpass=$_POST["txtdcpassword"];
	$date=$_POST["txtddate"];
	//check validation
	//echo "<h1>".$address."</h1>";

	if(!preg_match("/^[a-zA-Z ]*$/",$name) or empty($name))
	{
		echo'<script>alert("Please Enter valid Name")</script>';
	}
	elseif (!preg_match("/^[0-9 ]*$/",$contact) or empty($contact)) 
	{
		echo'<script>alert("Please Enter valid Number")</script>';
	}
	
	elseif (trim($address)=="")
	{
		echo'<script>alert("Please Fill the Address")</script>';
	}
	elseif(empty($pass) or empty($cpass))

	{
		echo'<script>alert("Please Fill the Password")</script>';
	}
	
	elseif ($pass!=$cpass)
	{
		echo'<script>alert("Password and Confirm-Password does not match..")</script>';
	}

	else
	{

		$query="update donar_registration set Name='".$name."',Address='".$address."',Contact=".$contact." ,Pass='".$pass."' where Email='".$email."'";

		if(mysqli_query($con,$query))
		{
			 echo'<script>alert("Record Updated Successfully...!")</script>';
		}
		else
		{
					echo'<script>alert("Not Updated.....")</script>';
					echo mysql_error();
		}




		
    }
}
	



	

?>
<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<style type="text/css">
	body
	{
		padding:20px;
		

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
 				



	
	
	a:link
	{
		margin-top: 40px;
		margin: 10px;

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
	
	
	#content
		{
		
			padding-top: 30px;
			min-height:100%; 
			
		}
		
	
			    #dtextbox{


			    	background-color:#311432;
			    padding-bottom: 0px;
			    	border:solid black 2px ;

			    }
			    #inpbor{
			    	border:20px;
			    	color: white;
			    	/*transform: translate(-50%);
			    	float: right 0px;*/
			    }
			   
			    .logo1{
			    	padding-bottom: 5px;
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
				
				<h2 >Profile</h2>
			</div>

			
			<div id="content" class="col-md-12">
				<div id="dtextbox1" class="col-md-8">
					<p style="font-size: 18px">

						Donate A Blanket. Save A Life.

For most of us, the idea of winter means cuddling under the blanket for warmth, lying in our comfort zone and sipping coffee sitting beside the fire. But for those on the streets, with every drop in the temperatures it’s a fight for survival.
</p>
<img src="blanket.jpg" height="40%" width="50%" id="iii" style="float: left;margin-right: 10px;margin-top: 20px;border:solid black 1px;padding: 2px">
<p style="font-size: 18px " >
Every winter, our organization, Helping Hand Foundation runs Blanket Donation Campaign, where we provide high quality warm blankets along with dry ration and dignity kits to the underprivileged living in the open on the streets. We try our best to reach out to people in India.
</p>


<p style="font-size: 18px">
Donate a blanket, save a life

Your donations can save a child’s life, can protect a woman’s dignity and make a huge difference in the lives of people. We at Helping Hand Foundation distribute blankets and provide food to the homeless. Become a part of our movement to help the homeless. With a small amount donated by you, we at Helping Hand Foundation can buy a blanket and provide warmth to those in need. Winter is already here. Your simple kind gesture can save a life. Donate NOW and spread WARMTH.
					</p>	
					
				</div>
				<div id="dtextbox" class="col-md-4">
				<form method="post">
					<fieldset id="inpbor">
		<?php	
		$email=$_SESSION["email"];			
		$query="SELECT * FROM donar_registration WHERE Email='$email' ";
		if($result=mysqli_query($con,$query))
		{
			$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($result))
						{ ?>
						<legend style="color:white">Donar Information</legend>
				<label>Date :</label>
				<input type="text" name="txtddate" class="form-control" value="<?php echo date("d/m/Y",time())?>" readonly/>	
				<label>Name :</label>
				<input type="text" name="txtdname" class="form-control" value="<?php echo $row["Name"]?>"/>
				<label>Contact :</label>
				<input type="text" name="txtdcontact" class="form-control" value="<?php echo $row["Contact"]?>"/>
				
				<label>Address :</label>
				<textarea class="form-control" name="txtdaddress" rows="3" cols="30">
					<?php  echo $row["Address"] ?>
				</textarea>
				<label>Password :</label>
				<input type="password" name="txtdpassword" class="form-control" value="<?php echo $row["Pass"]?>"/>
				<label>Confirm-Password</label>
				<input type="password" name="txtdcpassword" class="form-control" value="<?php echo $row["Pass"]?>"/><br>
				<input type="submit" value="Update" name="btnupdate" class="btn"/>
			
					<?php	}

					} ?>
						
				</fieldset>
			</form>
				</div>

			</div><br>

			<div id="footer1" class="col-md-12">
			<div class="col-md-3">
				
				<h4 style=" padding-top:20px; color: white"> Useful Links :</h4>
				<ul>
						<li style="margin-left: 9%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 9%"><a href="P_home.php">Profile</a></li>
						<li style="margin-left: 9%"><a href="P_registration.php">Donate Products</li>
						<li><a href="P_event.php">My Product Status</li>
						<li><a href="P_aboutus.php">Gallery</li>
						<li><a href="P_donarlogin.php">Logout</a></li>
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
								<li style=" padding-top:20px; color: white">Contact No : 8888888888</li>
								<li style=" padding-top:20px; color: white">E-mail : helpinghand@gmail.com</li>
								

							</ul><br>

					</div>
					
			</div>
			<div id="footer" class="col-md-12">
				
					<hr><b style="align-items: center; padding-left: 27%;color: white">Copyright2019.All Rights Reserved Powered By Helping Hand</b>
					
			</div>

		</div>
	</div>
</body>

</html>
