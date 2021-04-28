 <?php        require_once 'models/db_config.php';		        $sname="";        $err_sname="";        $email="";        $err_email="";        $stad="";	    $err_stad="";	    $city="";	    $err_city="";		$num="";        $err_num="";		$hasError=false;				function validateEmail($email)		{		$pos_at = strpos($email,"@");		$pos_dot = strpos($email,".",$pos_at+1);		if($pos_at < $pos_dot)			{			return true;			}		return false;		}				if (isset($_POST["add_shop"])){                        if(empty($_POST["sname"])){                $err_sname="*Shop name Required";				$hasError=true;                            }            else if(strlen($_POST["sname"]) <8){                $err_sname="*Shop name should be at least 8 characters";				$hasError=true;                            }            else{                $sname=htmlspecialchars($_POST["sname"]);            }                       if (empty($_POST["email"])){				$err_email="Email Required";				$hasError=true;			 }			elseif(!validateEmail($_POST["email"]))			{				$err_email="Not a valid email";				$hasError=true;			}			else			{				$email=htmlspecialchars($_POST["email"]);			}                       if(empty($_POST["stad"]))		    {			 $err_stad="Street Name Required";			 $hasError=true;		   }		   else		   {			 $stad=htmlspecialchars($_POST["stad"]);		   }	       if(empty($_POST["city"]))		   {			 $err_city="City Name Required";			 $hasError=true;		   }		   else		   {			 $city=htmlspecialchars($_POST["city"]);		   }		    if(empty($_POST["num"]))          {             $err_num="Number Required";             $hasError=true;          }           elseif(!is_numeric($_POST["num"]))          {             $err_num="*Numaric Value required";             $hasError=true;          }         else          {             $num=$_POST["num"];          }           if(!$hasError)		{			insertShop($sname,$stad,$city,$email,$num);					}        }								if (isset($_POST["edit_shop"]))		{			 if(empty($_POST["sname"])){                $err_sname="*Shop name Required";				$hasError=true;                            }            else if(strlen($_POST["sname"]) <8){                $err_sname="*Shop name should be at least 8 characters";				$hasError=true;                            }            else{                $sname=htmlspecialchars($_POST["sname"]);            }                       if (empty($_POST["email"])){				$err_email="Email Required";				$hasError=true;			 }			elseif(!validateEmail($_POST["email"]))			{				$err_email="Not a valid email";				$hasError=true;			}			else			{				$email=htmlspecialchars($_POST["email"]);			}            if(empty($_POST["num"]))          {             $err_num="Number Required";             $hasError=true;          }           elseif(!is_numeric($_POST["num"]))          {             $err_num="*Numaric Value required";             $hasError=true;          }         else          {             $num=$_POST["num"];          }            if(empty($_POST["stad"]))		    {			 $err_stad="Street Name Required";			 $hasError=true;		   }		   else		   {			 $stad=htmlspecialchars($_POST["stad"]);		   }	       if(empty($_POST["city"]))		   {			 $err_city="City Name Required";			 $hasError=true;		   }		   else		   {			 $city=htmlspecialchars($_POST["city"]);		   }            if(!$hasError)		   {			 editShop($_POST["id"],$sname,$stad,$city,$email,$num);		 						   }                      		}				if(isset($_POST["remove_shop"]))		{                                if(!$hasError)		  {			  deleteShop(($_POST["id"]));					  }                   }				function insertShop($sname,$stad,$city,$email,$num)		{			$query="INSERT INTO shops VALUES (NULL,'$sname','$stad','$city','$email','$num')";			execute($query);			header("Location: allshops.php");		}		function getAllShops(){			$query= "SELECT * FROM shops";			$result= get($query);			return $result;		}				function getShop($id){			$query="select * from shops where id=$id";			$result=get($query);			if(count($result)>0){				return $result[0];			}			return false;		}				function editShop($id,$sname,$stad,$city,$email,$num){			$query="UPDATE shops                SET sname='$sname',                stad='$stad',                city='$city',                email='$email',                num='$num'                WHERE id=$id";                execute($query);				header("Location: allshops.php");		}				function deleteShop($id){		$query="DELETE FROM shops WHERE id=$id";		execute($query);		header("Location:allshops.php");		}    ?>