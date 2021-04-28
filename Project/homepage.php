<?php
      session_start();
?>
<html>
    <head>

    <title>Homepage</title>
	<style>
	       #img-f {
            width: 100%;
                  }
	</style>
		   
	</head>
        <body>
		    <center><h1>Home</h1><center>
			<?php echo $_SESSION["loggedin"]; ?>
			<?php echo $_SESSION["username"]; ?>
		    <h2>
			<span style="float:right;"><a style="text-decoration:none" href="login.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2>
			<h2>
			<span style="float:left;"><a style="text-decoration:none" href="allorders.php" target="_self" >My Orders &nbsp</a> </span> 
			</h2>
			<br>
			<h2>
			<span style="float:left;"><a style="text-decoration:none" href="Cart.php" target="_self" >Cart &nbsp</a> </span> 
			</h2>
			<h2>
			<span style="float:right;"><a style="text-decoration:none" href="edituser.php" target="_self" >Edit Profile &nbsp</a> </span> 
			</h2>
			<h2>
			<!--<span style="float:right;"><a style="text-decoration:none" href="Admin.php" target="_self" >Admin &nbsp &nbsp</a> </span> -->
			</h2><br><br>
			
	           
			   <center><img src = "add/pets.jpg" id="img-f" width="3080" height="800"/></center>
			   
			  <center><h1>Categories</h1><center>
			   

			    <h2>
                    <span><a target="_self" style="text-decoration:none" href="shops.php">Shops &nbsp</a> </span> 
                    <span><a target="_self" style="text-decoration:none" href="allproducts-user.php">Product &nbsp</a> </span>
					<span><a target="_self" style="text-decoration:none" href="accessories.php">Accessories &nbsp</a> </span>
					<span><a target="_self" style="text-decoration:none" href="petcare.php">Pet Care &nbsp</a> </span>
					<span><a target="_self" style="text-decoration:none" href="userreview.php">Rate Us &nbsp</a> </span>
                </h2>
			   
			   <h2>
					  <span style="position: absolute; bottom:0px;right:0px;" ><a style="text-decoration:none" href="contactus.php" target="_self" >Contact us &nbsp</a> </span> 
					  </h2>
        </body>
</html>