<?php
include("connect.php");
session_start();
if(!isset($_SESSION["admin"]))
{
	header("location:A_login.php");
}
$id= $_SESSION["id1"];

$img="files/".$id.".jpg";
if(isset($_POST["btndsubmit"]))
{
	$ds=$_POST["chk"];
	$date=$_POST["txtddate"];
	
	
	
	$query="update products set Dstatus='".$ds."',Ddate='".$date."' where Id=$id";

	if(mysqli_query($con,$query))
		{		
			echo'<script>alert("Record Updated Successfully...!")</script>	';
			$id= $_SESSION["id1"];			
			$filename=$id;
			$tmpname=$_FILES["txtfile"]["tmp_name"];
			$type=$_FILES["txtfile"]["type"];
			$path="files1/".$filename.".jpg";
			move_uploaded_file($tmpname, $path);
		
		$qz="update products set Dimgpath='$path' where Id=$id";
		if(mysqli_query($con,$qz))
		{
		
			echo'<script>alert("Record updated Successfully...!")</script>	';
			//$_POST=array();
		
		}
		else
		{
			echo'<script>alert("Failed....!")</script>';
			echo mysqli_error($con);
		}
		}
		else
		{
			echo'<script>alert("Failed....!")</script>';
			echo mysql_error();
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
	a:link
	{
		margin-top: 40px;
		margin: 10px;

	}
		#content
		{
			
			min-height:200px; 
			
		}
		#footer
		{
			/*background-color:blue; */
			min-height:50px; 
			
		}
		.leftmenu h4{
					font-family: Comic Sans MS;
					padding-left: 70px;

					padding-top: 30px;
					font-weight: bold;
					color:white ;
					font-size: 60px;
			    }
	
	</style>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
			<div id="banner" class="col-md-12">
				<div class="leftmenu">
			<h4>Helping Hand</h4>
		</div> 
				<?php include("banner.html"); ?>
			</div>

			<div id="menu" class="col-md-12">

				<?php include("A_menu.html"); ?>
			</div>
			<div id="content" class="col-md-12" align="center"><br>
					<form  method="post" enctype="multipart/form-data">
					<div class="textbox">
					
					<h3>Product ID : <?php echo $id;?></h3>
					<img src="<?php echo $img; ?>" width="40%" height="40%" /><br>
				    <label>Upload Photo : </label>
				    <input type="file" name="txtfile"/>
					<input type="checkbox" name="chk" value="Donated"/>Doanted<br><br>
					<label>Date of Donated :</label>
					<input type="text" name="txtddate" ><br><br>
					<input type="submit" value="Submit" name="btndsubmit" class="btn"/>
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