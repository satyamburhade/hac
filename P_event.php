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
		background-position:60% 100%;
		background-image: linear-gradient(rgba(26,26,26,0.6),rgba(26,26,26,0.3)),url("66.jpg");
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
		#footer
		{
						
 			 
 			 bottom: 0;
			 background-image:linear-gradient(rgba(26,26,26,0.8),rgba(26,26,26,0.8)),url("foot-bg.jpg");
			 background-size: cover;
			  color: #f1f1f1;
			  width: 100%;
			  padding-top: 0%;
			  height: 40%;
			  position:50% 90%;  

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
				<h1>Events</h1>
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
						<li style="margin-left: 13%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 13%"><a href="P_registration.php">Registration</li>
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