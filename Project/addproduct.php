<?php
     include 'seller.php';
     require_once 'controllers/productController.php';
	 require_once 'controllers/typeController.php';
	 
	 $catagories=getCatagories();
?>

<html>
      <head>
	  <title>Add Product</title>
	      <style>
		  .addproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:4%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="addproduct-div">
		 <fieldset>
        <legend align="center"><h1>Add Product</h1></legend>
		    <form action="" onsubmit="return validateProduct()" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>Product Name:</b></span></td>
							<td><input type="text" id="pname" name="pname" value="<?php echo $pname;?>" size="" placeholder="Product Name"><br>
							 <span id="err_pname"><?php echo $err_pname;?></span></td>
					    </tr>
					   
					   <tr>
					       <td><span><b>Type of product:<b></span></td>
						   <td>
						 <select id="type_id" name="">
							           <option>Choose One</option>
									   <?php
                                         foreach($catagories as $catagoie)
										 {
											 echo "<option value='".$catagoie["id"]."'>".$catagoie["tname"]."</option>";
										 }											 
									   ?></select>
						 <span id="err_type"><?php echo $err_type;?></span></td>
						</tr>
				
				     <tr>
					           <td><span><b>Add Quantity:</b></span></td>
							   <td><input type="text" id="quantity" size="" name="quantity" value="<?php echo $quantity;?>" placeholder="Add Quantity"><br>
							    <span id="err_quantity"><?php echo $err_quantity;?></span></td>
					</tr>	
					<tr>
					           <td><span><b>Add Price:</b></span></td>
							   <td><input type="text" id="price" size="" name="price" value="<?php echo $price;?>" placeholder="Add price"><br>
							   <span id="err_price"><?php echo $err_price;?></span></td>
					</tr>	
					   <tr>
					          <td><span><b>Add Info:</b></span></td>
					           <td><textarea name="info" id="info" placeholder="Info"><?php echo $info;?></textarea><br>
					         <span id="err_info"><?php echo $err_info ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="add_product" value="Add Product"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
	    <script src="JS/productValidation.js"></script>
		 
</html>