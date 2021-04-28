 <?php 
     require_once 'models/db_config.php';
	
    $search="";
	$err_search="";
	$hasError=false;
	
		if(isset($_POST["search_now"])){
		
			if (empty($_POST["search"])){
				$err_search="Search Bar is Empty";
				$hasError=true;
			}
			else{
				$search=htmlspecialchars($_POST["search"]);
			}
			
			if(!$hasError)
		   {
			  
			  header("Location:alldeliveryman.php");
			 
		   }
		}
		
		function getUser($search){
			$query="select * from users where fname=$search";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
    ?>