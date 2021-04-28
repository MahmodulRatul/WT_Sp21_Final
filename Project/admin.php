<?php
       
      session_start();
	  if(!isset($_SESSION["adminlogin"]))
	  {
		  header("Location:login.php");
	  }		  
	 
       require_once 'controllers/searchController.php';
?>

<html>
    <head> 
	     <title>ADMIN</title>
	</head>
	<body>
	
		<h2>
			<span style="float:right;"><a style="text-decoration:none" href="logout.php" target="_self" >Log Out &nbsp</a> </span> 
			</h2><br><br>
			  <center><h1>ADMIN</h1></center>
			 <?php echo $_SESSION["adminlogin"] ?>
			 <br></br>
			 
			 <form action="" method="post">
			<table align="center"> 
	             <tr>
					<td><span><b>Search Here:<b></span></td>
					<td>:<input type="text" size="100" name="search" value="<?php echo $search;?>" placeholder="Search now">
						<span><?php echo $err_search;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="search_now" value="Search"></td>
				</tr>
			</table>
	</form>	
		   
	
		        
		     <h2 align="center">
			        <span><a  style="text-decoration:none" href="home.php" target="_self">Home &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="alldeliveryman.php" target="_self">All DeliveryMan &nbsp</a> </span> 
					  <span><a  style="text-decoration:none" href="adddeliveryman.php" target="_self" >Add Deliveryman &nbsp</a> </span> 
					<span><a  style="text-decoration:none" href="allsellers.php" target="_self">All Sellers &nbsp</a> </span> 
					  <span><a  style="text-decoration:none" href="addseller.php" target="_self" >Add Seller &nbsp</a> </span> 
					    <span><a  style="text-decoration:none" href="allshops.php" target="_self" >All Shops &nbsp</a> </span> 
						 <span><a  style="text-decoration:none" href="addshop.php" target="_self" >Add Shops &nbsp</a> </span> 
					  <span><a  style="text-decoration:none" href="admin.php" target="_self">back &nbsp</a> </span>
			        <span><a  style="text-decoration:none" href="csdSearch.php" target="_self">back &nbsp</a> </span>
                </h2>
		        
	
	
	     
        </body>
</html>