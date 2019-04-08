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
			#logout{
		float: right;
		color: white;
		margin-top: 10px;
		background-color:black;
}
		 #email{
					padding-top: 17px;
					color: white;
					padding-left: 12%;
					font-size: 80%;
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
			    .card{
			    	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			    	transition: 0.3s;
			    }
			    .card :hover{
			    	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
			 			    }
			 	.contaianer1{
			 		padding: 2px 16px;
			 	}
			 	#card1{
			 		width: 650px;
			 		height: 289px;

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
				<h1>About us</h1>
			</div>
			<div id="content" class="col-md-12" style="margin-bottom: 110px">
				<div class="col-md-12">
					<h3>THE SIMPLEST WAY OF HELPING US</h3>
					<p style="font-size: 18px ">
You may organise a collection drive in your office / school / society wherein people may donate their old clothes (untorned and in wearable condition)
You may visit Helping Hand  Foundation and donate cloths for needy children's
You may visit hospitals with us as a part of our distribution drive and feel the Joy of giving and a sense of satisfaction within yourself.
</p><p style="font-size: 18px "><i>
Visit our Centre and spend some quality time with the children we support.
Come and interact with the children we are supporting. You can either play some games with them or read out their favorite story from our huge collection of storybooks or help them to just spend some peaceful time talking to them.</i> 
Small Gifts You Can Donate :-
</p><p style="font-size: 18px ">
Small sweet box
Crayons, Colour Books, Pencils, Sketch Books
Water Bottles, Small Plates, Mugs.Kids Clothes, Storybooks (new or old but in good condition)</p>
</p>
				</div>
				<div  class="col-md-12">
				<h2>OUR TEAM</h2>
				<div class="col-md-4" style=" height: 300px;margin-top: 20px" >
					<div class="card">
						<img  src="photos/coder.png"   class="img-circle"  alt="Avatar" style="width: 80%;margin-left: 45px;margin-top: 10px ">
						<div class="container1">
							<h4 align="center"><b>Naina Pardeshi</b></h4>

							<p align="center">Software Designer And Coder<br>E-mail : nainapardeshi@gmail.com</p>
							<pre align="center"><h5><b>Contact : 8888888888</b></h5></pre>
						</div>
					</div>

				</div>
				<div class="col-md-4" style=" height: 300px;margin-top: 20px" >
					<div class="card">
						<img src="photos/abut.jpg" class="img-circle"  alt="Avatar" style="width: 80%;margin-left: 45px;margin-top: 10px ">
						<div class="container1">
							<h4 align="center"><b>Akash S. Solanke</b></h4>

							<p align="center">Database Designer<br>E-mail : akashsolanke22@gmail.com</p>
							<pre align="center"><h5><b>Contact : 8888888888</b></h5></pre>
						</div>
					</div>

				</div>				
				<div class="col-md-4" style=" height: 300px;margin-top: 20px" >
					<div class="card">
						<img src="1111.jpg" height="179px" class="img-circle"  alt="Avatar" style="width: 80%;margin-left: 45px;margin-top: 10px ">
						<div class="container1">
							<h4 align="center"><b>Satyam D. Burhade</b></h4>

							<p align="center">Information Collector<br>E-mail : sdb8275@gmail.com</p>
							<pre align="center"><h5><b>Contact : 8888888888</b></h5></pre>
						</div>
					</div>		
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
