<?php
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
		#content
		{
			
			padding-bottom: 20px;
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
		#section1{
				
				padding-left: 40px;
				padding-right: 10px;
			
			    
	
		}
		#section2{
				padding-top: 30px;
				padding-left: 20px;
				padding-right: 30px;
			
			    
	
		}
		#section3{
				padding-top: 30px;
				padding-left: 70px;
				padding-right: 30px;
			
			    
	
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
				
				<h2 >Gallery</h2>
			</div>

			
			<div id="content" class="col-md-12">
				 <div class="row portfolio-container" style="padding-top: 30px">
				 	<div class="col-md-4" id="section1" style="padding-top: 30px">
				 		<img src="photos/a.jpg" height="400px" width="300px">
				 		 <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
                        <h4>2018 Causes</h4>
				 	</div>
				 	<div class="col-md-3" id="section2">
				 		<img src="photos/b.jpg" height="300px" width="300px">
				  <h4 class="entry-title"><a href="#">Water for Children AID</a></h4>
                        <h5>2018 Causes</h5>
				 	</div>
				 	<div class="col-md-5" id="section3">
				 		<img src="photos/c.jpg" height="450px" width="400px">
				 		<h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
                        <h4>2018 Causes</h4>
				 	</div>
                 </div>
                 <div class="row portfolio-container" style="padding-top: 10px">
				 	<div class="col-md-4" id="section1" >
				 		<img src="photos/d.jpg" height="500px" width="450px">
				 		 <h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
                        <h4>2018 Causes</h4>
				 	</div>
				 	<div class="col-md-3" id="section2" style="padding-left: 150px">
				 		<img src="photos/e.jpg" height="300px" width="250px">
				  <h4 class="entry-title"><a href="#">Water for Children AID</a></h4>
                        <h5>2018 Causes</h5>
				 	</div>
				 	<div class="col-md-5" id="section3" style="padding-left: 130px">
				 		<img src="photos/f.jpg" height="500px" width="350px">
				 		<h3 class="entry-title"><a href="#">Toys for Children Campaign</a></h3>
                        <h4>2018 Causes</h4>
				 	</div>
                 </div>

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