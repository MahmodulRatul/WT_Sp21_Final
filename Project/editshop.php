    <?php
         require_once 'controllers/shopController.php';
		 $id=$_GET["id"];
		 $shop=getShop($id);
    ?>


<html>
<head>
        <title>Edit Shop</title>
      <style>
	 
	            .add-div
				{
					
				border:1px solid black;
				margin:auto;
				width:25%;
				margin-top:17%;
				
				}
 		
	  
	  
	  </style>

</head>
        
<body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Shop</h1></legend>
        <form action="" onsubmit="return validateShop()" method="post">
            <table>
                <tr>
                    <td><Span><b>Shop Name</b></Span></td>
					  <td>: <input type="hidden" name="id" value="<?php echo $shop["id"];?>">  
					  <input type="text" id="sname" name="sname" value="<?php echo $shop["sname"]; ?>" placeholder="Shop Name" > 
                          <span id="err_sname"><?php echo $err_sname;?></span></td>
                </tr>
			
			  <tr>
					        <td><span><b>Shop Address:</b></span></td>
							  
					        <td>:<input type="hidden" name="id" value="<?php echo $shop["id"];?>"> 
							<input type="text" id="stad" name="stad" value="<?php echo $shop["stad"];?>" placeholder="Street Address">
					          <span id="err_stad"><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					    
					   <td> :<input type="hidden" name="id" value="<?php echo $shop["id"];?>"> 
					   <input type="text" id="city" name="city" placeholder = "City" value="<?php echo $shop["city"];?>" placeholder = "City" size="">
                          <span id="err_city"><?php echo $err_city;?></span></td>
				</tr>
                
                
               
                <tr>
                <td><span><b>Email</b></span></td>
				  
                    <td>:<input type="hidden" name="id" value="<?php echo $shop["id"];?>"> 
					<input type="text" id="email" placeholder="Email" value="<?php echo $shop["email"]; ?>" name="email"> 
                      <span id="err_email"><?php echo $err_email; ?></span></td>
                </tr>

                <tr>
                        <td><span><b>PhoneNumber</b></span></td>
						 
                          <td>:<input type="hidden" name="id" value="<?php echo $shop["id"];?>"> 
						  <input type="text" id="num" size="" name="num" value="<?php echo $shop["num"];?>" placeholder="Phone number">
                          <span id="err_num"><?php echo $err_num;?></span></td>

                  </tr>
				  
			  
					<tr>
					    <td></td>
						<td><input type="submit" name="edit_shop" value="Edit Shop"></td>
				</tr>



            </table>
        </form>
        
    </fieldset>
	</div>
   

</body>
<script src="JS/shopValidation.js"></script>
</html>