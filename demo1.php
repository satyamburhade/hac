

 
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  	<?php
	include("connect.php");
	$donated="Donated"; 
	$query="select * from products ";
   	$result=mysqli_query($con,$query);
   	$records=mysqli_num_rows($result);
   	$r=mysqli_fetch_assoc($result);
   									
   								
		if(!is_null($r["Dstatus"]))
		{
			if($r["Pickupstatus"]==$donated)
			{
				
		?>
		 <img  src="<?php echo $r["Dimgpath"]?>" height="150px" width="200px">
	<?php
		}
	}

		?>
 </body>
  </html>