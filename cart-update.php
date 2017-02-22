<?php
session_start();
;
$productID = $price = $desc = $remove = "";

if(isset($_GET['product']))
{
	$productID = $_GET['product'];
}
$action = $_GET['action'];
if(isset($_GET['desc']))
{
	$desc = $_GET['desc'];
}
if(isset($_GET['price']))
{
	$price = $_GET['price'];
}
$_SESSION['count'] = 0;


if(isset($_GET['remove']))
{
	$remove = $_GET['remove'];
}

if(isset($_GET['price']))
{
	$price = $_GET['price'];
}

if($action == "add"){

	$items = array($productID, $desc, $price);
	if(!isset($_SESSION['cart']))
	{
		
		$_SESSION['cart'][] = $items;
		$_SESSION['count']++;
	}
	else {
		
		if($_SESSION['cart'][$_SESSION['count']][0] !== $productID)
		{
			$_SESSION['cart'][] = $items;
			$_SESSION['count']++;
		}
	}
}

else if($action == "remove")
{
	$count = 0;
	foreach ($_SESSION['cart'] as $values)
	{
		if($values[$count][0] === $productID)
		{
			unset($_SESSION['cart'][$count]);
			
		}
		$count++;
		
	
	}

}

else if($action == "empty"){
	
		unset($_SESSION['cart']);
	
	$_SESSION['count']=0;
}
header("location:cart.php");