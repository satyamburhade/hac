<?php
session_start();
include("connect.php");


function setValue($fieldName)
{
	if(isset($_POST[$fieldName]))
	{
		echo $_POST[$fieldName];
	}
}
function setSelected($fieldName,$fieldValue)
{
			if(isset($_POST[$fieldName]) and $_POST[$fieldName]==$fieldValue)
			{
				echo 'selected="selected"';
			}
}
function setSelectedtype($fieldName,$fieldValue)
{
			if(isset($_POST[$fieldName]) and $_POST[$fieldName]==$fieldValue)
			{
				echo 'selected="selected"';
			}
}


if(isset($_POST["btnDelete"]))
{	
	$id=$_POST["hid"];
	$query="delete from products where Id=$id";

	if(mysqli_query($con,$query))
	{
		echo'<script>alert("Record Deleted Successfully...!")</script>	';
		$_POST=array();

	}
	else
	{
		echo'<script>alert("Record Not Deleted...!")</script>	';
		mysqli_error($con);
	}


}
if(isset($_POST["btnInsert"]))
{
	$protype=$_POST["dltype"];
	$descri=$_POST["txtdescri"];
	$condi=$_POST["dlcondition"];
    $date=$_POST["txtdpdate"];
    $email= $_SESSION["email"];
		
		if($protype=="--------")
		{
		  	echo'<script>alert("Please select valid Product ")</script>';
		}
		elseif(trim($descri)=="")
		{
			echo'<script>alert("Please Enter Description ")</script>';
		}
		elseif($condi=="------")
		{
		  	echo'<script>alert("Please select valid Product Condition ")</script>';
		}
		
		else
		{

			$query="insert into products(Email,Date,Type,Descri,Pcondition) values('".$email."','".$date."','".$protype."','".$descri."','".$condi."')";
		if(mysqli_query($con,$query))
					{
					
						echo'<script>alert("Record inserted Successfully...!")</script>	';
						
								$id=mysqli_insert_id($con);			
								$filename=$id;
								$tmpname=$_FILES["txtfile"]["tmp_name"];
								$type=$_FILES["txtfile"]["type"];
								$path="files/".$filename.".jpg";
								move_uploaded_file($tmpname, $path);
					
								$qz="update products set Pimgpath='$path' where Id=$id";
								if(mysqli_query($con,$qz))
								{
								
									echo'<script>alert("Record updated Successfully...!")</script>	';
									$_POST=array();
								//echo'<a href="dbdemo.php">Add New Record</a>';
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
		    echo mysqli_error($con);
		}
				

	}
}

if (isset($_POST["btnupdate"]))
 {

 	$protype=$_POST["dltype"];
	$descri=$_POST["txtdescri"];
	$condi=$_POST["dlcondition"];
	$id=$_POST["hid"];
	$query="update products set Type='$protype',Descri='$descri',Pcondition='$condi' where Id=$id";
	if(mysqli_query($con,$query))
		{
			echo'<script>alert("Record Updated Successfully...!")</script>';
			if(isset($_FILES["txtfile"]))
			{
				$tmp=$_FILES["txtfile"]["tmp_name"];
				$path="files/".$id.".jpg";
				move_uploaded_file($tmp,$path);
			}	
		}
	else
	{
					echo'<script>alert("Not Updated.....")</script>';
					echo mysqli_error($con);
	}
}

?>
<html>
<head>
	<link href="bootstrap.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="D_donateproduct.css">
	
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
				
				<h2 >Donate Products</h2>
			</div>

			
			<div id="content" class="col-md-12">
				<div id="dtextbox" class="col-md-4">
				<form method="post" enctype="multipart/form-data" >
					<fieldset id="inpbor">
						<legend style="color: white">Donate Products</legend>
					<label>Date :</label>
				<input type="text" name="txtdpdate" class="form-control" value="<?php echo date("d/m/Y",time())?>" readonly/>
				<input type="hidden" name="hid" value="<?php setValue("hid")?>" />
				<label>Product Type :</label>
				<select name="dltype" class="form-control" style="color: black" value="<?php echo $_POST["dltype"];?>" >
					<option value="--------" <?php setSelectedtype("dltype","--------");?> >-------</option>
					<option  value="Books" <?php setSelectedtype("dltype","Books");?>>Books</option>
					<option value="Clothes" <?php setSelectedtype("dltype","Clothes");?>>Clothes</option>
					<option value="Footwear" <?php setSelectedtype("dltype","Footwear");?>>Footwear</option>
					<option value="Watches" <?php setSelectedtype("dltype","Watches");?>>Watches</option>
					<option value="Bags" <?php setSelectedtype("dltype","Bags");?>>Bags</option>
				</select>
				<label>Description :</label>
				<textarea  name="txtdescri" class="form-control" rows="3" cols="10" style="text-align:left">
				 	<?php setValue("txtdescri");?>			
				</textarea>
				<label>Product Condition :</label>
				<select name="dlcondition" class="form-control" style="color: black" >
					<option value="------" <?php setSelected("dlcondition","------");?> >-------</option>
					<option value="Very Good" <?php setSelected("dlcondition","Very Good");?>>Very Good</option>
					<option value="Good"<?php setSelected("dlcondition","Good");?>>Good</option>
					<option value="Average" <?php setSelected("dlcondition","Average");?>>Average</option>
					
				</select><br>
				</fieldset>
			<br>
			<fieldset style="color: white">
				<img src='<?php echo @ $_POST["himg"] ?>' height='200px' width='280px' />
				<br>
				<br>
				<label>Product Image :</label>
				<input type="file" name="txtfile" class="form-control">
				<br>
				
				<input type="submit" value="Update" name="btnupdate" class="btn"/>
				<input type="submit" value="Submit" name="btnInsert" class="btn"/><br>
			</fieldset>			
			</form>
				</div>
				<div class="col-md-8">
					<panel width="" style="border:2px">
					<table class="table">
					<?php
					$em=$_SESSION["email"];
   					$query="select * from products where Email= '$em' ";
					if(mysqli_query($con,$query))
					{	?>
					<tr>
					
						
						<th class="Success">Product Id</th>
						<th class="Warning">Date</th>
						<th class="info">Product Type</th>
						<th  class="Warning">Description</th>
						<th class="Danger">Product Condition</th>
						<th class="info">Image</th>
							<th class="Default">Action</th>
					</tr>
					
	
						<?php
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($result))
						{ ?>
							<form method="post">							
							<tr>
							<td class="Success" > <?php echo $row["Id"] ?>
								<input type="hidden" name="hid" value="<?php echo $row["Id"]?>"/>
							</td>
							<td class="Warning"> <?php echo $row["Date"]?></td>
							<td class="info"><?php echo $row["Type"]?>
								<input type="hidden" name="dltype" value="<?php echo $row["Type"]?>"/>
							</td>
							<td  class="Warning"><?php echo $row["Descri"]?>
								<input type="hidden" name="txtdescri" value="<?php echo $row["Descri"]?>"/>
							</td>
							<td class="Danger"><?php echo $row["Pcondition"]?>
								<input type="hidden" name="dlcondition" value="<?php echo $row["Pcondition"]?>"/>
							</td>
							<td  class="info"><img src="<?php echo $row["Pimgpath"]?>" height="50px" width="50px">
									<input type="hidden" name="himg" value="<?php echo $row["Pimgpath"]?>"/>
							</td>
							<td class="Default"><input type="submit" name="btnEdit" class="btn" value="Edit"></td>
							<td class="Default"><input type="submit" name="btnDelete" class="btn" value="Delete"></td>
							</tr>
							</form>


				
							
					<?php	}

					} ?>
						
		
					
			</table>
		</panel>
					
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
						<li><a href="D_logout.php">Logout</a></li>
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
				
					<hr><b style="align-items: center; padding-left: 27%;color: white">Copyright2019.All Rights Reserved Powered By Helping Hand </b>
					
			</div>
			</div>

		</div>
	</div>
</body>


</html>
