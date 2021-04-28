<?php
require_once 'models/db_config.php';
	$pqty="";
	$err_pqty="";
	$cname="";
	$err_cname="";
	$address="";
	$err_address="";
	$hasError=false;
	
		if (isset($_POST["Confirm"]))
		{
			
			$pid=$_POST["pid"];
			$cname= $_POST["cname"];
			$pname=$_POST["pname"];
			if (empty($_POST["pqty"]))
			{
				$err_pqty="**Quantity can't be null.";
				$hasError=true;
			}
			else if((!is_numeric($_POST["pqty"])))
			{
				$err_pqty="**Quantity must be a number.";
				$hasError=true;
			}
			else
			{
				$pqty=htmlspecialchars($_POST["pqty"]);
			}
			
			if (empty($_POST["cname"]))
			{
				$err_cname="**Customer Name Required.";
				$hasError=true;
			}
			else if(strlen($_POST["cname"])<1)
			{
				$err_cname="**Customer Name should be least a character.";
				$hasError=true;
			}
			else
			{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
				$hasError=true;
			}
			else if(strlen($_POST["address"])<12)
			{
				$err_address="**Address should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);
			}
			
			if(!$hasError)
		    {
				insertorder($pid,$pqty,$pname,$cname,$address);
		    }
		}
		
		if(isset($_POST["OK"]))
		{
			$id=$_GET["id"];
			$pid=$_POST["pid"];
			$pname=$_POST["pname"];
			if (empty($_POST["pqty"]))
			{
				$err_pqty="**Quantity can't be null.";
				$hasError=true;
			}
			else if((!is_numeric($_POST["pqty"])))
			{
				$err_pqty="**Quantity must be a number.";
				$hasError=true;
			}
			else
			{
				$pqty=htmlspecialchars($_POST["pqty"]);
			}
			
			if (empty($_POST["cname"]))
			{
				$err_cname="**Customer Name Required.";
				$hasError=true;
			}
			else if(strlen($_POST["cname"])<1)
			{
				$err_cname="**Customer Name should be least a character.";
				$hasError=true;
			}
			else
			{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			
			if (empty($_POST["address"]))
			{
				$err_address="**Address Required.";
				$hasError=true;
			}
			else if(strlen($_POST["address"])<12)
			{
				$err_address="**Address should be least 12 character.";
				$hasError=true;
			}
			else
			{
				$address=htmlspecialchars($_POST["address"]);
			}
			
			if(!$hasError)
		    {
				editOrder($id,$pid,$pqty,$pname,$cname,$address);
		    }
		}
		
		function insertorder($pid,$pqty,$pname,$cname,$address)
		{
			$query="INSERT INTO orders VALUES ('$pid','$pqty','$pname','$cname',NULL,'$address')";
			execute($query);
			header("Location: allorders.php");
		}
		function getAllorders(){
			$query= "select * from orders";
			$result= get($query);
			return $result;
		}
		function getOrder($id){
			$query="select * from orders where id=$id";
			$result=get($query);
			if(count($result)>0){
				return $result[0];
			}
			return false;
		}
		function editOrder($id,$pid,$pqty,$pname,$cname,$address)
		{
			$query="UPDATE orders
                SET pid = $pid,
				Quantity='$pqty',
                pname='$pname',
                cname='$cname,
				address='$address'
                WHERE id=$id";
                execute($query);
				//header("Location:allorders.php");
		}
?>