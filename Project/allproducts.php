<?php
      include 'seller.php';
      require_once 'controllers/productController.php';
	  $products=getAllproducts();

?>
<html>
    <head> 
	     <title>All Products</title></head>
	<body>
		
   <br></br>  
	<center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Product Name</th>
				<th>Product Type</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Info</th>
			    <th></th>
				<th></th>
				
			</tr>
			<tr> 
			<?php 
			     foreach($products as $product)
				 {
					 echo "<tr><td>".$product["id"]."</td>";
					 echo "<td>".$product["pname"]."</td>";
					 echo "<td>".$product["t_name"]."</td>";
					 echo "<td>".$product["quantity"]."</td>";
					 echo "<td>".$product["price"]."</td>";
					 echo "<td>".$product["info"]."</td>";
					 echo '<td><a style="text-decoration:none" href="editproduct.php?id='.$product["id"].'" target="_ self" >Edit Product</a></td>';
					 echo '<td><a style="text-decoration:none" href="removeproduct.php?id='.$product["id"].'" target="_ self" >Remove Product</a></td>';
					
				 }
				 ?>
			</tr>
			
		</table>
	<center>    
        </body>
</html>