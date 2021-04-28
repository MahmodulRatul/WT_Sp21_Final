<?php
      session_start();
?>

<html>
    <head> 
	     <title>Delivery</title>
	</head>
	
	    <body>
		<h2>
			<span style="float:right;"><a style="text-decoration:none" href="login.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2><br><br>
			
		    <center><h1>Delivery</h1></center>
			 <?php echo $_SESSION["deliverylogin"] ?>
	
		        
		      <h2 align="center">
			        <span><a  style="text-decoration:none" href="home.php" target="_self">Home &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="alldeliveryman.php" target="_self">All Deliveryman &nbsp</a> </span> 
			       
                </h2>

        </body>
</html>