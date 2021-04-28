<?php
session_start();
require_once 'controllers/productController.php';
$id=$_GET["id"];
$product = getProduct($id);
require_once 'controllers/orderController.php';
?>

<html>
    <head>
	<title>Add Order</title>
	
	     <style>
	            .ao-div
				{
				border:1px solid black;
				margin:auto;
				width:35%;
				margin-top:7%;
				}
 		 </style>
	</head>
	<body>
	<div class="ao-div">
	 <fieldset>
        <legend align="center"><h1>Add Order</h1></legend>
		<form action="" method="post">
			<table border="0">
				
				<tr>
					<td><span >Product Quantity</span></td>
					<td> : </td>
					<td><input type="text" name="pqty" value="<?php echo $pqty;?>"> </td><td><span><?php echo $err_pqty;?></span></td>
				</tr>
				
				<tr>
					<td><span >Customer Name</span></td>
					<td> : </td>
					<td><input type="text" name="cname" value="<?php echo $_SESSION["loggedin"] ?>"> </td><td><span><?php echo $err_cname;?></span></td>
				</tr>
					<td><input type="hidden" name="pid" value="<?php echo $product["id"];?>"> </td>
				</tr>
				
				<tr>
					<td><span >Address</span></td>
					<td>:</td>
					<td><input type="text" name="address" value="<?php echo $address;?>"> </td><td><span><?php echo $err_address;?></span></td>
				</tr>
				
				<tr>
					<td><span >Product Name</span></td>
					<td> : </td>
					<td><input type="text" name="pname" value="<?php echo $product["pname"];?>"> </td>
				</tr>
				
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="Confirm" value="Confirm">
					</td>
				</tr>
			</table>
		</form>
		 </fieldset>
		 </div>
		</center>
	</body>
</html>