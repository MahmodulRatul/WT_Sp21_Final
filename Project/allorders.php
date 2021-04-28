<?php
require_once 'controllers/orderController.php';
$orders=getAllorders();
?>
<html>
    <head> 
	    <title>All Orders</title>
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
		<center><h1>ALL ORDERS</h1></center>
			  <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Order Number</th>
				<th>Product Name</th>
				<th>Customer Name</th>
				<th>Address</th>
				<th>Quantity</th>
				<th>Poduct ID</th>
				
			</tr>
			<tr> 
			<?php 
			    foreach($orders as $order)
				{
					//echo "<tr><td>".$product["id"]."</td>";
					echo "<tr>";
					echo "<td>".$order["id"]."</td>";
					echo "<td>".$order["pname"]."</td>";
					echo "<td>".$order["cname"]."</td>";
					echo "<td>".$order["address"]."</td>";
					echo "<td>".$order["Quantity"]."</td>";
					echo "<td>".$order["pid"]."</td>";
					echo '<td><a class="button" href="editorder.php?id='.$order["id"].'" target="_ self" >Edit</a></td>';
					echo '<td><a class="button" href="removeorder.php?id='.$order["id"].'" target="_ self" >Cancel</a></td>';
					echo "</tr>";
				}
				?>
			</tr>
			
		</table>
	<center>    
			  
			
		</table>
	<center>    
        </body>
</html>			   
		