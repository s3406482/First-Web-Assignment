<?php 
session_start();

$firstname = $lastname = $address = $email = "";


$username = $_SESSION['username'];


$users = array();

$userfile = fopen('users.txt', "r");
while(!feof($userfile)){
	$line = fgets($userfile);
	array_push($users, $line);
	$user = explode("||", $line);
	if ( ! isset($user[6])) {
		$user[6] = null;
	}
	if($username == $user[6])
	{
		$firstname = $user[0];
		$lastname = $user[1];
		$address = $user[2];
		$email = $user[3];
	}
}
fclose($userfile);
$total = 0;
foreach ($_SESSION['cart'] as $value)
{
	$total = $total + $value[2];
}

?>

<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Checkout</title>
</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Checkout</h2>
	
<?php include_once ('nav.php');?>
	

<div id = checkout>
	<form method ="POST" action ="checkout.php">
			<fieldset>
			<label for = "firstname">First Name:</label><br />  
			<input type="text" name="firstname" id="firstname" value ="<?php echo $firstname ?>" /><br />
			<label for = "lastname">Last Name:</label><br />
			<input type="text" name="lastname" id="lastname" value ="<?php echo $lastname ?>" /><br />
			<label for = "address">Address:</label><br />
			<input type="text" name="address" id="address" value ="<?php echo $address ?>"></textarea><br />
			<label for = "creditcard">Credit Card Number:</label><br />
			<input type="text" name="creditcard" id = "creditcard"></input><br />
			Total for order = <?php echo $total?><br>
			<input type="submit" value="process" />
			</fieldset>
		
		</form>

</div>
	

	
	
<?php include_once ('footer.php');?>
</body>
</html>

//sourced from http://www.smileywar.com/validating-credit-cards-with-javascript-using-luhn-algorithm/
function checkCard($card){
 var c = $card;
 var cl = parseInt(c.substr(c.length - 1));
 var c = c.slice(0,-1)
 var c = c.split("").reverse().join("");
 var c = c.split("");
 var a = 2;
 var cm = [];
 for (var i = 0; i < c.length; i++){
 if (a%2 == 0){var t = c[i]*2;
 if (t > 9){var t = (t -9);}
 cm.push(t);
 }else{cm.push(parseInt(c[i]));}
 a++;
 }
 var f = 0;
 for (var i = 0; i < cm.length; i++) {f += cm[i];}
 f = f + cl;
 if (f%10 == 0){return true;}else{return false;}
 }
 
 var result = checkCard("6011177131977068");
 
 if (result==true){
 // write your own rules if true
 console.log("all ok");
 }else{
 // write your own rules if false
 console.log("not ok");
 }