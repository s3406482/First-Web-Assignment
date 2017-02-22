<?php 
session_start();

if(!isset($_SESSION["username"])){
	
	header("location:index.php");
	
	include 'index.php';
	exit();
}
?>


<!DOCTYPE >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Check out our great deals!!</title>
</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Check out our great deals!!</h2>
<?php include_once ('nav.php');?>
<!--All shop items,prices and pictures sourced from http://www.wbshop.com/category/wbshop_brands/the+hobbit-+the+battle+of+the+five+armies/the+hobbit-+the+battle+of+the+five+armies.do?nType=2 -->


	<div id = 'content'>
		<div class="image">
 			<a href="#gandalfplush"><img src="images/shop/gandalf plush.jpg" alt="Gandalf Plush" width="110" height="90"></img></a>
 			<div class="desc"><a href="cart.php">Fight off evil with this Gandalf plush!</a></div>
 			<div class="price">Price = $19.95</div>
 			<a href="cart-update.php?product=1&action=add&desc=Gandalf Plush&price=19.95" />Add to cart</a>
		</div>
		<div class="image">
 			<a href="#smaughoodie"><img src="images/shop/smaug hoodie.jpg" alt="Smaug Hoodie" width="110" height="90"></img></a>
 			<div class="desc"><a href="cart.php">Show your inner dragon with this fierce hoodie!</a></div>
 			<div class="price">Price = $49.95</div>
 			<a href="cart-update.php?product=2&action=add&desc=Smaug Hoodie&price=49.95" />Add to cart</a>
		</div>
		<div class="image">
 			<a href="#hobbitmug"><img src="images/shop/hobbit mug.jpg" alt="Hobbit Mug" width="110" height="90"></img></a>
 			<div class="desc"><a href="cart.php">Keep your coffee as warm as dragon fire in this fiery mug!</a></div>
 			<div class="price">Price = $14.95</div>
 			<a href="cart-update.php?product=3&action=add&desc=Hobbit Mug&price=14.95" />Add to cart</a>
		</div>
		<div class="image">
 			<a href="#smaugdrinkbottle"><img src="images/shop/smaug drink bottle.jpg" alt="Smaug Drink Bottle" width="110" height="90"></img></a>
 			<div class="desc"><a href="cart.php">Keep your water handy to put out the fire with this stylish water bottle!</a></div>
 			<div class="price">Price = $21.95</div>
 			<a href="cart-update.php?product=4&action=add&desc=Smaug Drink Bottle&price=21.95" />Add to cart</a>
		</div>
		<div class="image">
 			<a href="#hobbitmonopoly"><img src="images/shop/hobbit monopoly.jpg" alt="Hobbit Monopoly" width="110" height="90"></img></a>
 			<div class="desc"><a href="cart.php">Show your tactical nous to defeat those Orcs with this intense game of Monopoly!</a></div>
 			<div class="price">Price = $44.95</div>
 			<a href="cart-update.php?product=5&action=add&desc=Hobbit Monopoly&price=44.95" />Add to cart</a>
		</div>
	
	

	
	</div>
	
	<?php include_once ('footer.php');?>	
</body>
</html>