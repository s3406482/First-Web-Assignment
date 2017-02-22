<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once ('header.php');?>
	<title>Watch the Trailer!</title>
</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Check out the Cinematic Trailer!!</h2>
<?php include_once ('nav.php');?>
	<div id= 'trailer'>
		<video width="780" height= "400" controls>
	  		<source src="trailer.mp4" type="video/mp4">
		</video>
	</div>
	

<?php include_once ('footer.php');?>	
</body>
</html>