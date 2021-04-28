<?php
        require_once 'models/db_config.php';
		
		 $tname="";
		 $err_tname="";
		$hasError=false;
	  
	 
		if (isset($_POST["add_catagorie"])){
		
			if (empty($_POST["tname"]))
			{
				$err_tname="Product name required";
				$hasError=true;
			}
			else{
				$tname=htmlspecialchars($_POST["tname"]);
			}
		
			 
			if(!$hasError)
		   {
			   insertCatagorie($tname);
			 
		   }
		}
		if (isset($_POST["edit_c"])){
		
			if (empty($_POST["tname"]))
			{
				$err_tname="Product name required";
				$hasError=true;
			}
			else{
				$tname=htmlspecialchars($_POST["tname"]);
			}
		
			 
			if(!$hasError)
		   {
			   editCatagorie($_POST["id"],$tname);
			 
		   }
		}
		if(isset($_POST["remove_c"]))
		{
            
         
           if(!$hasError)
		  {
			  deleteCatagorie(($_POST["id"]));
			
		  }
           
        }
		
		
		
		function insertCatagorie($tname)
		{
			$query="insert into type values (NULL,'$tname')";
			execute($query);
			header("Location: alltype.php");
		}
			function getCatagories(){
			$query= "SELECT * FROM type";
			$result= get($query);
			return $result;
		}
		
		function getCatagorie($id){
			$query="select * from type where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editCatagorie($id,$tname){
			$query="UPDATE type
                SET tname='$tname'
                WHERE id=$id";
                execute($query);
				header("Location: alltype.php");
		}
		
		function deleteCatagorie($id){
		$query="DELETE FROM type WHERE id=$id";
		execute($query);
		header("Location: alltype.php");
		}
	
