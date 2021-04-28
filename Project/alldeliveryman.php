<?php
       include 'admin.php';
      require_once 'controllers/deliverymanController.php';
	  $deliverymans=getAllDeliveryman();

?>
<html>
     <head> 
	     <title>All Seller</title></head>
	     
	<body>
		
   <br></br>  
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
			    <th></th>
				<th></th>
			</tr>
			<tr> 
			<?php 
			     foreach($deliverymans as $deliveryman)
				 {
					 echo "<tr><td>".$deliveryman["id"]."</td>";
					 echo "<td>".$deliveryman["fname"]."</td>";
					 echo "<td>".$deliveryman["lname"]."</td>";
					 echo "<td>".$deliveryman["uname"]."</td>";
					 echo "<td>".$deliveryman["ad"]."</td>";
					 echo "<td>".$deliveryman["gender"]."</td>";
					 echo "<td>".$deliveryman["email"]."</td>";
					 echo "<td>".$deliveryman["pass"]."</td>";
					 echo "<td>".$deliveryman["number"]."</td>"; 
					 echo '<td><a style="text-decoration:none" href="editdeliveryman.php?id='.$deliveryman["id"].'" target="_ self" >Edit Deliveryman</a></td>';
					 echo '<td><a style="text-decoration:none" href="removedeliveryman.php?id='.$deliveryman["id"].'" target="_ self" >Remove Deliveryman</a></td>';
					
				 }
				 ?>
			</tr>
			
		</table>
	<center>    
        </body>
</html>