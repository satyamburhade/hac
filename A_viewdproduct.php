
<?php 
include("connect.php");
session_start();

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
		 
			min-height:50px; 
			
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
			<div id="content" class="col-md-12">
				<table  class="table">
				<?php
				
   					$query="select * from products order by Id desc";
   					$result=mysqli_query($con,$query);
   					
   						$records=mysqli_num_rows($result);
   					
   					
   					$row=ceil($records/3);

   					for ($i=1;$i<=$row;$i++)
   					{
   						?>
   							<tr>
   								<?php for($j=1;$j<=3;$j++)
   								{
   									$r=mysqli_fetch_assoc($result);
   									
   								?>
   								<form method="post" >
   									<?php
   										if(!is_null($r["Dstatus"]))
   										{
   									 ?>
   								<td >
   									<img src="<?php echo $r["Pimgpath"]?>" height="150px" width="200px">					
				        			 <h4>Product ID :<?php echo $r["Id"] ?></h4>
				        			 <input type="hidden" name="hid" value="<?php echo $r["Id"] ?>"/>
									<h4>Date : <?php echo $r["Date"]?></h4>
									<h4>Product Type : <?php echo $r["Type"]?></h4>
									<h4>Description :<?php echo $r["Descri"]?></h4>
									<h4>Product Condition :<?php echo $r["Pcondition"]?></h4>
									<h4>Email :<?php echo $r["Email"]?></h4>
									
								</td>
								<?php } ?>
							</form>
								<?php } ?>
						</tr>
						<?php } ?>
					</table>
				
			</div>
			<div id="footer" class="col-md-12">
				<hr><b style="align-items: center; padding-left: 27%;color: black">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
			</div>

		</div>
	</div>
</body>

</html>