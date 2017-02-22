<?php 
session_start();

if(!isset($_SESSION["username"])){
	
	header("location:index.php");
	
	include 'index.php';
	exit();
	

}

?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Cart</title>
</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Cart</h2>
	
<?php include_once ('nav.php');?>
	
<?php if(!isset($_SESSION["cart"])):?>
	<p>Cart is empty!!!</p>
<div id = cart>	
<?php else : 
	$total = 0;
	$count = 0;
	
	foreach ($_SESSION['cart'] as $value) :?>
	<?php if($value[0] != NULL) :?>	
	<div id = cartitem>
		ID = <?php echo $value[0]?><br>
		Item = <?php echo $value[1]?><br>
		Price= $<?php echo $value[2]?><br>
	<?php $link = "cart-update.php?action=remove&product=$value[0]" ?>
	<a href="<?php echo $link?>"/>Remove Item</a>
	<?php $count++;?>
	<?php endif;?>
	</div>
	<?php $total = $total + $value[2];?>
	<?php endforeach;?>	
	<div id = cartitem>	
	<br>Total for your items = $<?php echo $total?> 
	<br>Amount of items = <?php echo $count?>	
	</div>
<?php endif;?>
	<a href="cart-update.php?action=empty"/>Clear the cart!</a><br><br>
</div>	
	
<a href="checkout.php"/>Proceed to checkout</a>	
<?php include_once ('footer.php');?>
</body>
</html>