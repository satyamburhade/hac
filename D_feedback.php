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
					padding-left: 12%;
					font-size: 80%;
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
			
			
			min-height:70%; 
			
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
		#footer ul{
			margin-left: 32%;
			margin-right: 45%;
			margin-top: 10px;
		}
		#footer ul li{

			list-style: none;
			align-items: center;
		
		text-align:left;
		text-decoration-color: white;

		}
		#footer ul li a{
			color: white;
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
			
			    
	</style>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
			<div id="first" class="col-md-12">
			<div id="email" class="col-md-9">Mail: contect@helpinghand.com</div>
			<div class="col-md-3">
				<input id="logout" type="button" name="" value="Logout" class="btn">
	      </div>
			</div>	
			<div id="menu" class="col-md-12">
				<div id="leftmenu" >
					<img class="logo2" src="logo22.png" height="60px" width="270px">
				</div> 

				<?php include("donar_menu.php"); ?>
			</div>
						
			<div id="banner" class="col-md-12">
				
				<h2 >Feedback</h2>
			</div>

			
			<div id="content" class="col-md-12">
				
			</div>
			<div id="footer" class="col-md-12">
					<ul>
						<li style="margin-left: 13%"><a href="D_home.php">Home</a></li>
						<li style="margin-left: 13%"><a href="D_donarproduct.php">Donate product</li>
						<li><a href="D_productstatus.php">My product status</li>
						<li><a href="D_gallary.php">Gallery</li>
						<li><a href="D_feedback.php">Feedback</li>

					</ul>
					<hr><b style="align-items: center; padding-left: 27%;color: white">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
					
			</div>
			</div>

		</div>
	</div>
</body>

</html>