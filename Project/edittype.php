<?php
          require_once 'controllers/typeController.php';
		 $id=$_GET["id"];
		 $catagorie=getCatagorie($id);
    ?>


<html>
<head>
        <title>Edit Catagorie</title>
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

  <body>
        <div class="add-div">
    <fieldset>
        <legend align="center"><h1>Edit Catagorie</h1></legend>
        <form action="" onsubmit="return validateType()" method="post">
            <table>
                 <tr>
					<td><span><b>Name:<b></span></td>
					<td>:<input type="hidden" name="id" value="<?php echo $catagorie["id"];?>">  
					<input type="text" name="tname" id="tname" value="<?php echo $catagorie["tname"];?>" placeholder="Catagorie Name">
						<span id="err_tname"><?php echo $err_tname;?></span></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="edit_c" value="Edit Catagorie"></td>
				</tr>

       </table>
        </form>
        
    </fieldset>
	</div>
 		  <script src="JS/catagorieValidation.js"></script> 

</body>
</html>