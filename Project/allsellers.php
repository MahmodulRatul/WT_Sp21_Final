<?php  
       include 'admin.php';
      require_once 'controllers/sellerController.php';
	  $sellers=getAllSeller();

?>
<html>
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
			     foreach($sellers as $seller)
				 {
					 echo "<tr><td>".$seller["id"]."</td>";
					 echo "<td>".$seller["fname"]."</td>";
					 echo "<td>".$seller["lname"]."</td>";
					 echo "<td>".$seller["uname"]."</td>";
					 echo "<td>".$seller["ad"]."</td>";
					 echo "<td>".$seller["gender"]."</td>";
					 echo "<td>".$seller["email"]."</td>";
					 echo "<td>".$seller["pass"]."</td>";
					 echo "<td>".$seller["number"]."</td>"; 
					 echo '<td><a style="text-decoration:none" href="editseller.php?id='.$seller["id"].'" target="_ self" >Edit Seller</a></td>';
					 echo '<td><a style="text-decoration:none" href="removeseller.php?id='.$seller["id"].'" target="_ self" >Remove Seller</a></td>';
					
				 }
				 ?>
			</tr>
			
		</table>
	<center>    
        </body>
</html>