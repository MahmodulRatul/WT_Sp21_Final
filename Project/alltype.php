<?php
      include 'seller.php';
      require_once 'controllers/typeController.php';
	  $catagories=getCatagories();

?>
<html>
    <head> 
	     <title>All Catagories</title></head>
	<body>
		
   <br></br>  
	<center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Name</th>
			    <th></th>
				<th></th>
				
			
				
			</tr>
			<tr> 
			<?php 
			     foreach($catagories as $catagorie)
				 {
					 echo "<tr><td>".$catagorie["id"]."</td>";
					 echo "<td>".$catagorie["tname"]."</td>";
			         echo '<td><a style="text-decoration:none" href="edittype.php?id='.$catagorie["id"].'" target="_ self" >Edit </a></td>';
					 echo '<td><a style="text-decoration:none" href="removetype.php?id='.$catagorie["id"].'" target="_ self" >Remove</a></td>';
					
				 }
				 ?>
			</tr>
			
		</table>
	<center>    
        </body>
</html>