<?php
     include 'seller.php';
     require_once 'controllers/productController.php';
	 require_once 'controllers/typeController.php';
	 $catagories=getCatagories();
	 $id=$_GET["id"];
	 $product=getProduct($id);
?>

<html>
<head>
        <title>Edit Seller</title>
      <style>
	 
	            .add-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:4%;
				}
	  </style>

</head>
<body>

  </body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Productr</h1></legend>
        <form action="" onsubmit="return validateProduct()" method="post">
            <table>
                 <tr>
					<td><span><b>Product Name<b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $product["id"];?>">  
					<input type="text" name="pname" id="pname" value="<?php echo $product["pname"];?>" placeholder="Product Name">
						<span id="err_pname"><?php echo $err_pname;?></span></td>
				</tr>
					   <tr>
					       <td><span><b>Type of product:<b></span></td>
						   <td><input type="hidden" name="id" value="<?php echo $product["id"];?>">
						 <select name="type_id" id="type_id" value="<?php echo $product["type_id"];?>">
							           <option>Choose One</option>
									   <?php
                                         foreach($catagories as $catagoie)
										 {
											 echo "<option value='".$catagoie["id"]."'>".$catagoie["tname"]."</option>";
										 }											 
									   ?>
							         
						</select>
						       <span id="err_type"><?php echo $err_type;?></span></td>
						</tr>
				
				    <tr>
					<td><span><b>Quantity</b></span></td>
					<td><input type="hidden" name="id" value="<?php echo $product["id"];?>">  
					<input type="text" name="quantity" id="quantity" value="<?php echo $product["quantity"];?>" placeholder="Quantity">
						 <span id="err_quantity"><?php echo $err_quantity;?></span></td>
				</tr>
				<tr>
					<td><span><b>Price</b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $product["id"];?>">  
					<input type="text" name="price" id="price" value="<?php echo $product["price"];?>"placeholder="Address">
					 <span id="err_price"><?php echo $err_price;?></span></td>
				</tr>	
					   <tr>
					          <td><span><b>Info:</b></span></td>
					           <td><input type="hidden" name="id" value="<?php echo $product["id"];?>">
							   <textarea name="info"  id="info" placeholder="Info"><?php echo $product["info"];?></textarea><br>
					         <span id="err_info"><?php echo $err_info ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="edit_product" value="Edit Product"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		  <script src="JS/productValidation.js"></script>
		
</html>