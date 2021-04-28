<?php
    require_once 'controllers/productController.php';
	$products=getAllproducts();

?>
<html>
    <head> 
	    <h1 align="center">All Products</h1>
		<style>
		.button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 12px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 8px 6px;
        cursor: pointer;
		}
		</style>
	</head>
	<body>
	
    <br></br>  
    <center>
	<input type="text" id="search_text" onkeyup="suggest(this)" placeholder="Search...">
	</center>
	<p align="center" id="suggestion">
	</p>
	
	<center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Product Name</th>
				<th>Product Type</th>
				<th>Price</th>
				<th>Info</th>
			    <th></th>
				<th></th>
				
			</tr>
			<tr> 
			<?php 
			    foreach($products as $product)
				{
					//echo "<tr><td>".$product["id"]."</td>";
					echo "<tr>";
					echo "<td>".$product["pname"]."</td>";
					echo "<td>".$product["t_name"]."</td>";
					//echo "<td>".$product["quantity"]."</td>";
					echo "<td>".$product["price"]."</td>";
					echo "<td>".$product["info"]."</td>";
					echo '<td><a class="button" href="addorder.php?id='.$product["id"].'" target="_ self" >Order Now</a></td>';
					echo '<td><a class="button" href="removeproduct.php?id='.$product["id"].'" target="_ self" >Add to Cart</a></td>';
					echo "</tr>";
				}
				?>
			</tr>
			
		</table>
	<center>    
    </body>
	<script src = "JS/searchProduct.js"></script>
</html>