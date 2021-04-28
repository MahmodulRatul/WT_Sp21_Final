<?php
	session_start();
	require_once 'models/db_config.php';
	
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$pass="";
	$err_pass="";
	$email="";
	$err_email="";
	$number ="";
	$err_number="";
	$ad="";
	$err_ad="";
	$gender="";
	$err_gender="";
	$type="";
	$hasError=false;
	
	function validateEmail($email)
		{
		$pos_at = strpos($email,"@");
		$pos_dot = strpos($email,".",$pos_at+1);
		if($pos_at < $pos_dot)
			{
			return true;
			}
		return false;
		}
		
	function validPass($password)
	 {
		 $hasUpper=false;
		 $hasLower=false;
		 $hasNum=false;
		 $hasQM=false;
		 $hasHash=false;
		
		for($i=0; $i<strlen($password);$i++)
	     {
			 if(ctype_upper($password[$i]))
			 {
				 $hasUpper=true;
			 }
			 
			 if(ctype_lower($password[$i]))
			 {
				 $hasLower=true;
			 }
			 if($password[$i] >='0' && $password[$i]<='9')
			 {
                 $hasNum=true;
                
             }
			 
		     if($password[$i]=='#')
			 {
                 $hasHash=true;
                
             }
              if($password[$i]=='?')
			  {
                  $hasQM=true;
                
                }
                
                if($hasUpper && $hasLower && $hasHash || $hasQM && $hasNum)
				{
                    return true;
                }
            
            }
            return false;
  
        }
	
		if (isset($_POST["Update"])){
		
			if (empty($_POST["fname"])){
				$err_fname="First Name Required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			if (empty($_POST["lname"])){
				$err_lname="Last Name Required";
				$hasError=true;
			}
			else{
				$lname=htmlspecialchars($_POST["lname"]);
			}

			if(empty($_POST["pass"]))
		    {
			$err_pass="Password Required";
			$hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			$pass=$_POST["pass"];
		     }
		
			if (empty($_POST["email"])){
				$err_email="Email Required";
				$hasError=true;
			 }
			elseif(!validateEmail($_POST["email"]))
			{
				$err_email="Not a valid email";
				$hasError=true;
			}
			else
			{
				$email=htmlspecialchars($_POST["email"]);
			}
			
			if(empty($_POST["number"]))
		   {
			 $err_number="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		   {
			 $number=htmlspecialchars($_POST["number"]);
		   }
			If (empty($_POST["ad"])){
				$err_ad="Address Required";
				$hasError=true;
			 }
			else{
				$ad=htmlspecialchars($_POST["ad"]);
			 }
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 
			if(!$hasError)
		    {
			  editUser($uname,$fname,$lname,$ad,$gender,$email,$pass,$number);
			  header("Location: home.php");
		    }
		}
		function editUser($uname,$fname,$lname,$ad,$gender,$email,$pass,$number){
			$query="UPDATE users SET fname='$fname',lname='$lname',ad='$ad',gender='$gender',email='$email',pass='$pass',number='$number',WHERE id='$id'";
                execute($query);
		}
?>