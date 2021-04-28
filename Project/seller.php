<?php
      session_start();
	  if(!isset($_SESSION["sellerlogin"]))
	  {
		  header("Location:login.php");
	  }	
?>

<html>
    <head> 
	     <title>Seller</title>
	</head>
	
	    <body>
		<h2>
			<span style="float:right;"><a style="text-decoration:none" href="logout.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2><br><br>
			
		    <center><h1>Seller</h1></center>
			<h3><p style="text-align:right">Welcome, <?php echo $_SESSION["sellerlogin"]?></p></h3>
		        
		      <h2 align="center">
			        <span><a  style="text-decoration:none" href="home.php" target="_self">Home &nbsp</a> </span>
                    <span><a  style="text-decoration:none" href="allproducts.php" target="_self">All Products &nbsp</a> </span>
					 <span><a  style="text-decoration:none" href="addproduct.php" target="_self">Add Products &nbsp</a> </span>
					 <span><a  style="text-decoration:none" href="alltype.php" target="_self">All Catagorie &nbsp</a> </span>
					  <span><a  style="text-decoration:none" href="type.php" target="_self">Add Catagorie &nbsp</a> </span>
					   <span><a  style="text-decoration:none" href="sellershop.php" target="_self">All Shops &nbsp</a> </span>
					    <span><a  style="text-decoration:none" href="addshop.php" target="_self">Add Shops &nbsp</a> </span>
					 
	
                </h2>
		        
		            
		   
	
	     
        </body>
</html>