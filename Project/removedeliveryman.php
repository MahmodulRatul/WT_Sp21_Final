<?php
         require_once 'controllers/deliverymanController.php';
		 $id=$_GET["id"];
		 $deliveryman=getDeliveryman($id);
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
			    
					 echo "<tr><td>".$deliveryman["id"]."</td>";
					 echo "<td>".$deliveryman["fname"]."</td>";
					 echo "<td>".$deliveryman["lname"]."</td>";
					 echo "<td>".$deliveryman["uname"]."</td>";
					 echo "<td>".$deliveryman["ad"]."</td>";
					 echo "<td>".$deliveryman["gender"]."</td>";
					 echo "<td>".$deliveryman["email"]."</td>";
					 echo "<td>".$deliveryman["pass"]."</td>";
					 echo "<td>".$deliveryman["number"]."</td>"; 
					
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $deliveryman["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_man" value="Remove Deliveryman" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alldeliveryman.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
