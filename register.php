<?php 
session_start();


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Sign Up!!</title>

</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Register</h2>
	<?php include_once ('nav.php');?>
	<div id = 'content'>
		<form method ="POST" action ="validate.php">
			<fieldset>
			<label for = "firstname">First Name:(required)</label><br />
			<input type="text" name="firstname" id="firstname" /><br />
			<label for = "lastname">Last Name:(required)</label><br />
			<input type="text" name="lastname" id="lastname" /><br />
			<label for = "dob">Date of Birth(dd-mm-yyyy):</label><br />
			<input type="text" name="dob" id="dob" /><br />
			<label for = "address">Address:(required)</label><br />
			<textarea name="address" id="address" rows="5" cols="40"></textarea><br />
			<label for = "male">Male:   </label>
			<input type="radio" name="gender" value="male"/><br />
			<label for = "female">Female:</label>
			<input type="radio" name="gender" value="female"/><br />
			<label for = "other">Other:</label>
			<input type="radio" name="gender" value="other"/><br />
			<br />
			</fieldset>
			<fieldset>
			<label for = "username">Username:(required)</label><br />
			<input type="text" name="username" id="username" /><br />
			<label for = "password">Password:(required)</label><br />
			<input type="password" name="password" id="password" /><br />

			<label for = "email">Email Address:(required)</label><br />
			<input type="text" name="email" id = "email"></input><br />
			<label for = "membership">Membership Type:</label><br />
			<select name = "membership">
				<option value="silver">Silver</option>
				<option value="gold">Gold</option>
				<option value="mithril">Mithril</option>
			</select>
			<br />
			<label for = "duration">Membership length:</label><br />
			<select name = "duration">
				<option value="annual">Annual</option>
				<option value="fiveyears">5 Years</option>
				<option value="tenyears">10 Years</option>
				<option value="life">Life</option>
			</select>
			<br />
			<br />
			<input type="submit" value="Register" />
			</fieldset>
		
		</form>
	</div>
	<div id = "regInfo">
	<p>Sign up to our site now for some great deals!!!</p>
	<p>Choose from our great membership packages.<br /><br />
	Our Silver Membership will put you on our mailing list<br />
	and give you access to the store and is completely free!!<br /><br />
	Our Gold Membership we will send you exclusive deal and <br />
	offers and you will recieve a 10% discount in our store <br />
	for only $20 a year! or $250 for life!<br /><br />
	Our exclusive Mithril membership you will get the works,<br />
	a free gift on sign up, exclusive behind the scenes <br />
	footage including those classic outtakes and also recieve <br />
	%15 off in store. Sign up for $50 per year!!<br />
	Or $600 for life!!<br /><br />
	Lifetime membership also includes any future movies<br />
	from Middle Earth!!</p>
	
	</div>
	
	<?php include_once ('footer.php');
	echo $_SESSION["username"]?>	
	
	

</body>
</html>
