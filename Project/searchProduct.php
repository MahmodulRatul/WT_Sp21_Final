<?php
    require_once 'controllers/productController.php';
	$key = $_GET["key"];
	$products = searchProduct($key);
	foreach($products as $product)
	{
		echo $product ["pname"]."<br>";
	}
?>
