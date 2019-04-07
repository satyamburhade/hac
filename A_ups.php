<?php
include("connect.php");
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:A_login.php");
}
$id=$_GET["hid"];
$img="files/".$id.".jpg";
if(isset($_GET["btnupdate"]))
{
	$st=$_GET["rdo"];
	$st=$st." ".$_GET["txtreason"];
	//$ptime=$_GET["txttime"];
	$id=$_GET["hid"];
	$query="update products set Pickupstatus='".$st."' where Id=$id";

	if(mysqli_query($con,$query))
		{
		
			echo'<script>alert("Record Updated Successfully...!")</script>	';
			
		
		}
	else
		{
			echo'<script>alert("Failed....!")</script>';
			echo mysqli_error($con);
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
	a:link
	{
		margin-top: 40px;
		margin: 10px;

	}
		#content
		{
			
			
			min-height:100px; 
			
		}
		#footer
		{
			
			min-height:50px; 
			
		}
		.textbox{
		width: 30%;
		overflow: hidden;
		font-size: 20px;
		padding: 8px 0;
		margin: 8px 0;
		border-bottom: 1px solid #4caf50;

	}
	</style>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
			<div id="banner" class="col-md-12">
				<?php include("banner.html"); ?>
			</div>

			<div id="menu" class="col-md-12">

				<?php include("A_menu.html"); ?>
			</div>
			<div align="center" id="content" class="col-md-12">
				<form method="get">
				<div class="textbox">
					<h3>Product ID : <?php echo $id;?></h3>
					<input type="hidden" name="hid" value="<?php echo $id;?>"/>
					
					<img src="<?php echo $img; ?>" width="100%" height="40%" /><br>
					<input type="radio" name="rdo" value="Collected">Collected<br>
					<input type="radio" name="rdo" value="Not-Collected">Not-Collected<br>
					<input type="radio" name="rdo" value="Rejected">Rejected<br>
					<input type="text" name="txtreason" placeholder="Enter Reason of Rejected" class="form-control"><br>
					<input class="btn" type="submit" name="btnupdate" value="Update">

				</div>
			</form>

				
			</div>
			<div id="footer" class="col-md-12">
				<hr><b style="align-items: center; padding-left: 27%;color: black">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
			</div>

		</div>
	</div>
</body>

</html>