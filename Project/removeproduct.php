<?php
         require_once 'controllers/productController.php';
		 $id=$_GET["id"];
		 $product=getProduct($id);
	?>

	  <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Product Name</th>
				<th>Product Type</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Info</th>
			</tr>
			<tr> 
			<?php 
					 echo "<tr><td>".$product["id"]."</td>";
					 echo "<td>".$product["pname"]."</td>";
					 echo "<td>".$product["type_id"]."</td>";
					 echo "<td>".$product["quantity"]."</td>";
					 echo "<td>".$product["price"]."</td>";
					 echo "<td>".$product["info"]."</td>";
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $product["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_product" value="Remove Product" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allproducts.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
