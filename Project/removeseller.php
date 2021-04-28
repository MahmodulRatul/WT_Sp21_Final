<?php
         require_once 'controllers/sellerController.php';
		 $id=$_GET["id"];
		 $seller=getSeller($id);
	?>

	  <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Frist Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Address</th>
				<th>gender</th>
				<th>Email</th>
				<th>Password</th>
				<th>Contact Info </th>
			  
				
			
				
			</tr>
			<tr> 
			<?php 
			    
					 echo "<tr><td>".$seller["id"]."</td>";
					 echo "<td>".$seller["fname"]."</td>";
					 echo "<td>".$seller["lname"]."</td>";
					 echo "<td>".$seller["uname"]."</td>";
					 echo "<td>".$seller["ad"]."</td>";
					 echo "<td>".$seller["gender"]."</td>";
					 echo "<td>".$seller["email"]."</td>";
					 echo "<td>".$seller["pass"]."</td>";
					 echo "<td>".$seller["number"]."</td>"; 
					
				 ?>
			</tr>
			
		

<html>
<head>
      

</head>
<body>

             <h2>
			<span><center>Are you Sure You want to remove this?</center></span> 
			</h2><br>
       
          <form action="" method="post">
            <table>
                <tr>
                   
					  <td><input type="hidden" name="id" value="<?php echo $seller["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_seller" value="Remove Seller" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allsellers.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
