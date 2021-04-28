<?php
        require_once 'models/db_config.php';
		
		 $pname="";
		 $err_pname="";
		 $type_id="";
		 $err_type="";
		 $quantity="";
		 $err_quantity="";
		 $price="";
		 $err_price="";
		 $info="";
		 $err_info="";
		 $hasError=false;
	  
	 
		if (isset($_POST["add_product"])){
		
			if (empty($_POST["pname"]))
			{
				$err_pname="Product name required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			if(!isset($_POST["type_id"]))
		    {
			$err_type="Type required";
			$hasError=true;
		    }
		    else
		    {
		     $type_id=htmlspecialchars($_POST["type_id"]);
		    }
			 if(empty($_POST["quantity"]))
		    {
			 $err_quantity="Quantity Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["quantity"]))
		   {
			 $err_quantity="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $quantity=htmlspecialchars($_POST["quantity"]);
		    }
			if(empty($_POST["price"]))
		    {
			 $err_price="*Price Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["price"]))
		   {
			 $err_price="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $price=htmlspecialchars($_POST["price"]);
		    }
			
			if(empty($_POST["info"]))
			{
			$err_info="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $info=htmlspecialchars($_POST["info"]);
		     }
			 
			if(!$hasError)
		   {
			   insertProduct($pname,$type_id,$quantity,$price,$info);
			 
		   }
		}
	    if (isset($_POST["edit_product"])){
		
			if (empty($_POST["pname"]))
			{
				$err_pname="Product name required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
			if(!isset($_POST["type_id"]))
		    {
			$err_type="Type required";
			$hasError=true;
		    }
		    else
		    {
		     $type_id=htmlspecialchars($_POST["type_id"]);
		    }
			 if(empty($_POST["quantity"]))
		    {
			 $err_quantity="Quantity Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["quantity"]))
		   {
			 $err_quantity="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $quantity=htmlspecialchars($_POST["quantity"]);
		    }
			if(empty($_POST["price"]))
		    {
			 $err_price="*Price Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["price"]))
		   {
			 $err_price="*Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $price=htmlspecialchars($_POST["price"]);
		    }
			
			if(empty($_POST["info"]))
			{
			$err_info="Information Required";
			$hasError=true;
		    }
		    else
			{
		    $info=htmlspecialchars($_POST["info"]);
		     }
			 
			if(!$hasError)
		   {
			   editProduct($_POST["id"],$pname,$type_id,$quantity,$price,$info);
			 
		   }
		}
		if(isset($_POST["remove_product"]))
		{
            
         
           if(!$hasError)
		  {
			  deleteProduct(($_POST["id"])); 
			
		  }
           
        }
	
	 
	 
         function insertProduct($pname,$type_id,$quantity,$price,$info)
		{
			$query="INSERT INTO products VALUES (NULL,'$pname','$type_id','$quantity','$price','$info')";
			execute($query);
			header("Location: allproducts.php");
			
		}
		function getAllproducts(){
			$query= "select p.*,t.tname as 't_name' from products p left join type t on p.type_id=t.id";
			$result= get($query);
			return $result;
		}
		
		function getProduct($id){
			$query="select * from products where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editProduct($id,$pname,$type_id,$quantity,$price,$info){
			$query="UPDATE products
                SET pname='$pname',
                type_id='$type_id',
                quantity='$quantity',
                price='$price',
				info='$info'
                WHERE id=$id";
                execute($query);
				header("Location:allproducts.php");
		
		}
		function searchProduct($key)
		{
			$query = "select pname,id from products where pname like '%$key%' ";
			$result = get($query);
			return $result;
		}
		function deleteProduct($id){
		$query="DELETE FROM products WHERE id=$id";
		execute($query);
		header("Location:allproducts.php");
		}
	
    ?>