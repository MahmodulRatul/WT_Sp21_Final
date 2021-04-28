<?php
require_once 'controllers/orderController.php';
$id=$_GET["id"];
$order = getOrder($id);
?>
<html>
    <head>
	<title>Edit Order</title>
	
	     <style>
	        .ee-div
			{
			border:1px solid black;
			margin:auto;
			width:35%;
			margin-top:7%;
			}
		.button
		{
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
	<div class="ee-div">
	 <fieldset>
        <legend align="center"><h1>Edit Order</h1></legend>
		<form action="" method="post">
			<table border="0">
				
				<tr>
					<td><span >Product Quantity</span></td>
					<td> : </td>
					<td><input type="text" name="pqty" value="<?php echo $order["Quantity"];?>"> </td><td><span><?php echo $err_pqty;?></span></td>
				</tr>
				
				<tr>
					<td><span >Customer Name</span></td>
					<td> : </td>
					<td><input type="text" name="cname" value="<?php echo $order["cname"] ?>"> </td><td><span><?php echo $err_cname;?></span></td>
				</tr>
					<td><input type="hidden" name="id" value="<?php echo $order["id"];?>"> </td>
					<td><input type="hidden" name="pid" value="<?php echo $order["pid"];?>"> </td>
				</tr>
				
				<tr>
					<td><span >Address</span></td>
					<td> : </td>
					<td><input type="text" name="address" value="<?php echo $order["address"];?>"> </td><td><span><?php echo $err_address;?></span></td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="pname" value="<?php echo $order["pname"];?>"> </td>
				</tr>
				
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit"  class="button" name="OK" value="OK">
					</td>
				</tr>
			</table>
		</form>
		</fieldset>
		</div>
		</center>
	</body>
</html>