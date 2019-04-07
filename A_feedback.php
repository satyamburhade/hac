<?php
include("connect.php");

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
				
				<table class="table">
					<?php
					
   					$query="select * from feedback";
					if(mysqli_query($con,$query))
					{	?>
					<tr>

						<th class="Danger">Email</th>
						
						<th class="info">Contact</th>
						<th class="Success">Description</th>
						
					</tr>
					
					<?php
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_assoc($result))
						{ ?>
							<tr>
							<td class="Danger" > <?php echo $row["Email"] ?></td>
							<td class="info"> <?php echo $row["Contact"]?></td>
							<td class="Success"><?php echo $row["Description"]?></td>
						</tr>
					<?php	}

					} ?>
				</table>

						
		
				
			</div>
			<div id="footer" class="col-md-12">
				<hr><b style="align-items: center; padding-left: 27%;color: black">Copyright2018.All Rights Reserved Powered By (DAP)Production</b>
			</div>
			

			

			

		</div>

	</div>
</body>

</html>