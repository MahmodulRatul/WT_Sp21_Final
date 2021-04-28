<?php
		include 'admin.php';
		require_once 'controllers/searchController.php';
	    $id=$_GET["search"];
		$user=getSeller($search);
?>
<html>
     <head> 
	     <title>Search Result</title></head>
	     
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
				<th>Type</th>
			    <th></th>
				<th></th>
				
			</tr>
			<tr> 
			<?php 
			     
					 echo "<tr><td>".$user["id"]."</td>";
					 echo "<td>".$user["fname"]."</td>";
					 echo "<td>".$user["lname"]."</td>";
					 echo "<td>".$user["uname"]."</td>";
					 echo "<td>".$user["ad"]."</td>";
					 echo "<td>".$user["gender"]."</td>";
					 echo "<td>".$user["email"]."</td>";
					 echo "<td>".$user["pass"]."</td>";
					 echo "<td>".$user["number"]."</td>"; 
					  echo "<td>".$user["type"]."</td>";
				 ?>
			</tr>
			
		</table>
	<center>    
        </body>
</html>