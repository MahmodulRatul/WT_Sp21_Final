 <?php
     require_once 'controllers/shopController.php';
?>


<html>
<head>
    <title>Add Shop</title>
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
        <legend align="center"><h1>Add Shop</h1></legend>
        <form action="" onsubmit="return validateShop()" method="post">
            <table>
                <tr>
                    <td><Span><b>Shop Name</b></Span></td>
                    <td>:<input type="text" id="sname" placeholder="Shop Name" value=" <?php echo $sname; ?> " name="sname"> 
                    <span id="err_sname"><?php echo $err_sname; ?></span></td>
                </tr>
			
				  <tr>
					        <td><span><b>Shop Address:</b></span></td>
					        <td>:<input type="text" id="stad" name="stad" value="<?php echo $stad;?>" placeholder="Street Address">
					        <span id="err_stad"><?php echo $err_stad;?></span></td>
					
				       </tr>
				 <tr>
					   <td></td>
					   <td> :<input type="text" id="city" name="city" placeholder = "City" value="<?php echo $city;?>" placeholder = "City" size="">
                            <span id="err_city"><?php echo $err_city;?></span></td>
				</tr>
                
	    <tr>
                <td><span><b>Email</b></span></td>
                    <td>:<input type="text" id="email" placeholder="Email" value="<?php echo $email; ?>" name="email"> 
                     <span id="err_email"><?php echo $err_email; ?></span></td>
                </tr>
                  <tr>
                        <td><span><b>PhoneNumber</b></span></td>
                          <td>:<input type="text" id="num" size="" name="num" value="<?php echo $num;?>" placeholder="Phone number">
                           <span id="err_num"><?php echo $err_num;?></span></td>

                      </tr>
					<tr>
					   <td></td>
						<td><input type="submit" name="add_shop" value="Add Shop"></td>
				</tr>



            </table>
        </form>
        
    </fieldset>
   </div>

</body>
<script src="JS/shopValidation.js"></script>
</html>