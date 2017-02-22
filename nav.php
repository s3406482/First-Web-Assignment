<div id = 'nav'>
	<p id = 'navbar'>
		<a href="cast.php">Cast and Crew</a>
		<br />
		<a href="gallery.php">Gallery</a> 
		<br />
		<?php if(isset($_SESSION["username"])) :  ?>
			<a href="shopping.php">Shopping</a>
		<?php else:?>
			<a href="register.php">Sign Up!</a>"<br />
		<?php endif; ?>
		<br />
		<a href="trailer.php">Watch the trailer</a>
	</p>
	
	<?php if(isset($_SESSION["username"])) :  ?>
	<a href="logout.php">Logout</a> 
	
	<?php else: ?>
	<form method ="POST" action ="login.php">
			<fieldset>
			<label for = "username">Username:</label><br />
			<input type="text" name="username" id="username" /><br />
			<label for = "password">Password:</label><br />
			<input type="password" name="password" id="password" /><br />
			<br />
			<input type="submit" value="Login" />
			</fieldset>
	</form>
	<?php endif; ?>
	</div>
