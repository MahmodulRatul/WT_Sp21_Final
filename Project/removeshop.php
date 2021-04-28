<?php
       require_once 'controllers/shopController.php';
		 $id=$_GET["id"];
		 $shop=getShop($id);
	?>

	
		 <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Shop Name</th>
				<th>Street Address</th>
				<th>City</th>
				<th>Email</th>
				<th>Contact Info </th>
				
				
			</tr>
			<tr> 
			<?php 
			    
					 echo "<tr><td>".$shop["id"]."</td>";
					 echo "<td>".$shop["sname"]."</td>";
					 echo "<td>".$shop["stad"]."</td>";
					 echo "<td>".$shop["city"]."</td>";
					 echo "<td>".$shop["email"]."</td>";
					 echo "<td>".$shop["num"]."</td>"; 
					
				
				 ?>
			</tr>
			


<html>
<head>
      

</head>
<body>

             <h2>
			<span><center>Are you Sure You want to remove this Shop?</center></span> 
			</h2><br>
       
          <form action="" method="post">
            <table>
                <tr>
                   
					  <td><input type="hidden" name="id" value="<?php echo $shop["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_shop" value="Remove Shop" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="allshops.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
