<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<style type="text/css">
	body
	{
		padding:20px;
	}	
	#banner
	{	background-size: cover;
		width: 100%;
		height: 400px;
		background-position:50% 50%;
		background-image: linear-gradient(rgba(26,26,26,0.6),rgba(26,26,26,0.3)),url("hero.jpg");
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
   	  #banner h2{
					font-family: Comic Sans MS;
					padding-left: 70px;
					font-weight: bold;
					color:white;
					font-size: 30px;
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
		#content{
					margin-top: 20px;
					margin-bottom: 20px;
					min-height:400px;					
					max-width: 100%;
					background-position:50% 55%;
					background-size: cover;
					background-repeat: no-repeat;
					background-image:linear-gradient(rgba(26,26,26,0.9),rgba(26,26,26,0.9)),url("555.jpg");		
				}
		   .hero{			
					
					margin-left: 40%;
					margin-top: 38px;
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
				<h1>Donate</h1>
				<h2>4 a Better World</h2>
			</div>
			<div id="blankspace" class="col-md-12">
			</div>
			<div id="content" class="col-md-12">
				<div class="col-md-5" >
					<h1 style=" padding-top:20px; color: white">Welcome To Helping Hand</h1>
					<p style="color: white" class="card-text">Helping hand foundation is the youth organization working for orphan child to give them cloths, and orphanage.</p>
<p style="color: white">The high standard of living has resulted in the wastage of clothes, etc. because of quick changes in habits and lifestyle. Instead of wasting these things we can put them in use by donating them to various organizations such as orphanages, old age homes, etc. The product is an internet-based that basically aims at charity through donations.</p><p style="color: white">
Thereby, surveys were conducting  in order to get knowledge about the organization’s daily requirements that are fulfilled and the ones that remain unfulfilled. Also, their feedback on the idea of creation of this product was taken.
</p>
					
				</div>
				<div class="hero">
						<img id="img" src="33.jpg"; height="60%"; width="90%" style="border:solid white 1px;margin-right: 10px;margin-top: 20px;padding: 2px" />
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
						<li><a href="P_donarlogin.php">Login</a></li>
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
				
					
					
			</div>
			
		</div>
	</div>
</body>

</html>
