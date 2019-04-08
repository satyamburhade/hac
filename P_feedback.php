<?php
include("connect.php");
if(isset($_POST["btnsend"]))
{
	$email=$_POST["txtemail"];
	$contact=$_POST["txtcontact"];
	$descri=$_POST["txtdescri"];
	//check validation...
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) and empty($email)) 
	{

		echo'<script>alert("Please Enter valid Email..")</script>';
	}
	elseif (!preg_match("/^[0-9 ]*$/",$contact) and empty($contact)) 
	{
		echo'<script>alert("Please Enter valid Number")</script>';
	}
    elseif (trim($descri)=="")
	{
		echo'<script>alert("Please Fill the Address.....")</script>';
	}
	else
	{
			$query="insert into feedback(Email,Contact,Description) values('".$email."',".$contact.",'".$descri."')";
		if(mysqli_query($con,$query))
		{
		
			echo'<script>alert("Record inserted Successfully...!")</script>';
			$_POST=array();
		
		}
		else
		{
			echo'<script>alert("Failed....!")</script>';
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
		background-color:black;

	}
	#banner
	{
		width: 100%;
		height: 200px;
		background-position:60% 0%;
		background-image: linear-gradient(rgba(26,26,26,0.8),rgba(26,26,26,0.8)),url("44.jpg");
 	}
 	#banner h1{
					font-family: Comic Sans MS;
					padding-left: 70px;
					font-weight: bold;
					padding-top: 5%;
					color:white ;
					filter:brightness(100%);
					font-size: 60px;
 				}

	 #first{
					background-color:rgba(249,81,0);
					min-height: 50px;
			}
		 #email{
					padding-top: 17px;
					color: white;
					padding-left: 12%;
					font-size: 80%;
				}
				#logout{
		float: right;
		color: white;
		margin-top: 10px;
		background-color:black;
}
	a:link
	{
		margin-top: 40px;
		margin: 10px;

	}
		#content
		{
			
			
			min-height:400px; 
			
		}
		
		.rightmenu ul li{
					padding-left: 80px;
					padding-top: 11px;
				}
		.leftmenu{
					width: 30%;
					line-height: 80px;
					padding-top: 10px;
					float:left;
			    }
	.leftmenu h4{
					font-family: Comic Sans MS;
					padding-left: 70px;
					font-weight: bold;
					color:darkorange ;
					font-size: 30px;
			    }
			     #inpbor{
			    	border:20px;
			    	color: white;
			    	/*transform: translate(-50%);
			    	float: right 0px;*/
			    }
			    #dtextbox{


			    	background-color:#800000;
			    	padding-top: 20px;
			    	margin-top: 20px;
			    	border:solid black 1px ;

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
			
			<div id="first" class="col-md-12">
			<div id="email" class="col-md-9">Mail: contect@helpinghand.com</div>
			<div class="col-md-3">
				<a href="P_donarlogin.php"><input id="logout"  type="button" name="" value="Login" class="btn"></a>
	      </div>

			</div>	
			<div id="menu" class="col-md-12">
				<div class="leftmenu">
					<div class="col-md-10">
					<img class="logo1" src="logo1.png" height="70px" width="250px">
					</div>
				</div> 

				<?php include("P_menu.html"); ?>
			</div>
			
			<div id="banner" class="col-md-12">
				<h1>Feedback</h1>
			</div>

			
			<div id="content" class="col-md-12">
				<div class="col-md-4" id="dtextbox">
					
				
			<form method="post">
				<fieldset id="inpbor">

					<label>Email :</label><br>
					<input type="email" name="txtemail" class="form-control"><br>
					<label>Conatct :</label><br>
					<input type="text" name="txtcontact" class="form-control"><br>
					<label>Description :</label><br>
					<textarea name="txtdescri" class="form-control" rows="3" cols="10" value="">
					</textarea><br>
					
				<input type="submit" value="Send" name="btnsend" class="btn"/><br>
				</fieldset>
				


			</form>
			</div>
			
			<div class="col-md-8">
				
					<img src="D_photo.jpg" height="60%" width="60%" id="iii" style="float: right;margin-right: 10px;margin-top: 20px;border:solid black 1px;padding: 2px">
					<p style="font-size: 18px ;padding-top: 20px;">
				<b style="font-size: 20px">	Do you also accept old warm clothes and sweaters?</b>
				<i style="font-size: 20px">
We encourage our donors to donate warm clothes (new or old in good condition) of all age groups. We also urgently need sweaters, shawls, socks, woollen caps, scarves and innerwear in bulk.</i>
				</p>
				
			</div>
			</div>
			<div id="footer1" class="col-md-12">
			<div class="col-md-3">
				
				<h4 style=" padding-top:20px; color: white"> Useful Links :</h4>
				<ul>
						<li style="margin-left: 13%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 13%"><a href="P_registration.php">Registration</li>
						<li><a href="P_event.php">Event</li>
						<li><a href="P_aboutus.php">About us</li>
						<li><a href="A_login,php">Admin Login</a></li>
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
	</div>
</body>

</html>
