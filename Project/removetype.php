<?php
         require_once 'controllers/typeController.php';
		 $id=$_GET["id"];
		 $catagorie=getCatagorie($id);
	?>

	  <center>			
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<th>Serial</th>
				<th>Name</th>
				
			</tr>
			<tr> 
			<?php 
			    
					  echo "<tr><td>".$catagorie["id"]."</td>";
					 echo "<td>".$catagorie["tname"]."</td>";
					
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
                   
					  <td><input type="hidden" name="id" value="<?php echo $catagorie["id"];?>">  
					 
                          
                </tr>
			<tr>
					   
						<td><input type="submit" name="remove_c" value="Remove Catagorie" ></td>
						<td><span style="float:right;"><a style="text-decoration:none" href="alltype.php" target="_self" >&nbsp Cancel</a> </span> </td>
				</tr>




            </table>
        </form>
        
    
 

</body>
</html>
