<?php
session_start();
if(!isset($_SESSION["email"]))
{
	
	header("location:P_donarlogin.php");
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
	 #banner{
				width: 100%;
				height: 400px;
				background-position:50% 50%;
				background-size: cover;
				background-image: url("bg_7.jpg");
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
	
	  a:link{
				margin-top: 40px;
				margin: 10px;
			}
	#content{
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
		#video
		{
			padding-top: 20px;
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
				<div id="leftmenu" class="col-md-2" >
					<img class="logo2" src="logo22.png" height="60px" width="270px">
				</div>
				<?php include("donar_menu.php"); ?>
			</div>						
			<div id="banner" class="col-md-12">
				<h1>Doing Nothing is</h1><h2> Not An Option of </h2><h2>Our Life</h3>				
			</div>			
			<div id="content" class="col-md-12">
				<div class="col-md-5">
				<h1>Welcome To Helping Hand</h1>
				<p >Helping hand foundation is the youth organization working for orphan child to give them cloths, and orphanage.</p>
<p >The high standard of living has resulted in the wastage of clothes, etc. because of quick changes in habits and lifestyle. Instead of wasting these things we can put them in use by donating them to various organizations such as orphanages, old age homes, etc. The product is an internet-based that basically aims at charity through donations.</p><p>
Thereby, surveys were conducting  in order to get knowledge about the organization’s daily requirements that are fulfilled and the ones that remain unfulfilled. Also, their feedback on the idea of creation of this product was taken.
</p>
				</div>
				<div class="col-md-7">
					<video id="video" width="100%" height="60%" controls muted>
						<source src="homevideo.mp4" type="video/mp4">
						hello
					</video>

				</div>

			</div>
					<div id="footer1" class="col-md-12">
			<div class="col-md-3">
				
				<h4 style=" padding-top:20px; color: white"> Useful Links :</h4>
				<ul>
						<li style="margin-left: 9%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 9%"><a href="P_registration.php">Registration</li>
						<li><a href="P_event.php">Event</li>
						<li><a href="P_aboutus.php">About us</li>
						<li><a href="A_login.php">Admin Login</a></li>
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
