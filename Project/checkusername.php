<?php
require_once 'controllers/loginController.php';

$uname = $_GET["uname"];
$rt=checkusername($uname);
if($rt)
{
	echo "true";
}
else
	echo "false";
?>