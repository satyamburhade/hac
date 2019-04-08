<?php
include("connect.php");
function setValue($fieldName)
{
	if(isset($_POST[$fieldName]))
	{
		echo $_POST[$fieldName];
	}
}
if(isset($_POST["btnSave"]))
{

	$name=$_POST["txtdname"];
	$contact=$_POST["txtdcontact"];
	$email=$_POST["txtdemail"];
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
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) or empty($email)) 
	{

		echo'<script>alert("Please Enter valid Email..")</script>';
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
		$query="SELECT * FROM donar_registration WHERE Email='$email' ";

	if($result=mysqli_query($con,$query))
	{
		if(mysqli_num_rows($result)>0)
		{
				echo '<script>alert("This Email already Exist Please enter new Email..")</script>';
				
		}
		else
		{
			
		
	
   			$query="insert into donar_registration(Date,Name,Email,Address,Contact,Pass) values('".$date."','".$name."','".$email."','".$address."',".$contact.",'".$pass."')";
		if(mysqli_query($con,$query))
		{
		
			echo'<script>alert("Record inserted Successfully...!")</script>	';
			$_POST=array();
		//echo'<a href="dbdemo.php">Add New Record</a>';
		}
		else
		{
			echo'<script>alert("Failed....!")</script>';
		echo mysql_error();
		}
		}
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
	
	#banner
	{
		width: 100%;
		height: 200px;
		background-position:50% 50%;
		background-image: linear-gradient(rgba(26,26,26,0.8),rgba(26,26,26,0.8)),url("11.jpg");
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
		
			
			min-height:120%; 
			
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
	
			    #dtextbox{


			    	background-color:#311432;
			    	padding-top: 20px;
			    	padding-bottom: 10px;
			    	border:solid black 2px ;

			    }
			    #inpbor{
			    	border:20px;
			    	color: white;
			    	/*transform: translate(-50%);
			    	float: right 0px;*/
			    }
			    #blankspace{
			    	height: 20px;

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
				<h1>Registration</h1>
			</div>

			<div id="blankspace" class="col-md-12">
			</div>
				
			</div>
			<div id="content" class="col-md-12">
				<div id="dtextbox1" class="col-md-8">
					
					<img src="reg.jpg" height="80%" width="50%" id="iii" style="float: left;margin-right: 10px;margin-top: 20px;border:solid black 1px;padding: 2px">
					<p>
						One of the best way to devlop children's literacy is to encourage poor children's to read Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States
						 that wish to play in online casinos.
					</p>
				</div>
				<div id="dtextbox" class="col-md-4">
				<form method="post">
					<fieldset id="inpbor">
						<legend style="color:white">Donar Information</legend>
				<label>Date :</label>
				<input type="text" name="txtddate" class="form-control" value="<?php echo date("d/m/Y",time())?>" readonly/>	
				<label>Name :</label>
				<input type="text" name="txtdname" class="form-control" value="<?php setValue("txtdname");?>"/>
				<label>Contact :</label>
				<input type="text" name="txtdcontact" class="form-control" value="<?php setValue("txtdcontact");?>"/>
				<label>Email :</label>
				<input type="email" name="txtdemail" class="form-control" value="<?php setValue("txtdemail");?>"/>
				<label>Address :</label>
				<textarea class="form-control" name="txtdaddress" rows="3" cols="30">
					<?php setValue("txtdaddress");?>
				</textarea>
				<label>Password :</label>
				<input type="password" name="txtdpassword" class="form-control" value="<?php setValue("txtdpassword");?>"/>
				<label>Confirm-Password</label>
				<input type="password" name="txtdcpassword" class="form-control" value="<?php setValue("txtdcpassword");?>"/><br>
				<input type="submit" value="Submit" name="btnSave" class="btn"/>
				<input type="Reset" value="Reset" name="btnReset" class="btn"/>
				</fieldset>
			</form>
				</div>

			</div><br>

			<div id="footer1" class="col-md-12">
			<div class="col-md-3">
				
				<h4 style=" padding-top:20px; color: white"> Useful Links :</h4>
				<ul>
						<li style="margin-left: 13%"><a href="P_home.php">Home</a></li>
						<li style="margin-left: 13%"><a href="P_registration.php">Registration</li>
						<li><a href="P_event.php">Event</li>
						<li><a href="P_about_us.php">About us</li>
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
</body>

</html>
