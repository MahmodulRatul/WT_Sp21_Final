<?php 
     include 'seller.php';
    require_once 'controllers/typeController.php';
	
?>


<html>
      <head>
	  <title>Type</title>
	      <style>
		  .editproduct-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:4%;
				
				}
		   
	       </style>
	  <head>
	  
	     <body>
		 <div class="editproduct-div">
		 <fieldset>
        <legend align="center"><h1>Catagorie Type</h1></legend>
		    <form action="" onsubmit="return validateType()" method="post">
			   <table align="center">
			           <tr>
					        <td><b><span>Name:</b></span></td>
							<td><input type="text" id="tname" name="tname" value="<?php echo $tname;?>" size="" placeholder="Product Name"><br>
							<span id="err_tname"><?php echo $err_tname;?></span></td>
					    </tr>
					  <tr>
				             <td><input type="submit" name="add_catagorie" value="Add Catagorie Type"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		  <script src="JS/catagorieValidation.js"></script> 
</html>