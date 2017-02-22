<?php 
session_start();
if(isset($_SESSION["username"])){

	$user = $_SESSION["username"];
	echo $user;
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Hobbit - Battle of Five Armies</title>
</head>
<body>
 	<?php include_once ('banner.php');?>

	<h2>THE DEFINING CHAPTER</h2> 	
	<?php include_once ('nav.php');?>
<!-- synopsis sourced from http://www.comingsoon.net/movie/the-hobbit-there-and-back-again-2014#/slide/1 for educational purposes only -->
	<div id = 'content'>
		<div id= 'synopsis'>
			<p>From Academy Award-winning filmmaker Peter Jackson comes "The Hobbit: The Battle of the Five Armies," </p>
			<p>the third in a trilogy of films adapting the enduringly popular masterpiece The Hobbit, by J.R.R. Tolkien.</p> 
			<p>"The Hobbit: The Battle of the Five Armies" brings to an epic conclusion the adventures of Bilbo Baggins,</p> 
			<p>Thorin Oakenshield and the Company of Dwarves. Having reclaimed their homeland from the Dragon Smaug, the </p>
			<p>Company has unwittingly unleashed a deadly force into the world. Enraged, Smaug rains his fiery wrath down </p>
			<p>upon the defenseless men, women and children of Lake-town. Obsessed above all else with his reclaimed treasure, </p>
			<p>Thorin sacrifices friendship and honor to hoard it as Bilbo's frantic attempts to make him see reason drive the </p>
			<p>Hobbit towards a desperate and dangerous choice. But there are even greater dangers ahead. Unseen by any but the</p> 
			<p>Wizard Gandalf, the great enemy Sauron has sent forth legions of Orcs in a stealth attack upon the Lonely Mountain.</p> 
			<p>As darkness converges on their escalating conflict, the races of Dwarves, Elves and Men must decide to unite or be </p>
			<p>destroyed. Bilbo finds himself fighting for his life and the lives of his friends in the epic Battle of the Five </p>
			<p>Armies, as the future of Middle-earth hangs in the balance.</p>
		</div>
	</div>

	
<?php include_once ('footer.php');?>	
</body>
</html>