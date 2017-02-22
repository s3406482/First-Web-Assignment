<?php 
session_start();
?>


<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Gallery</title>
</head>
<body>
	<?php include_once ('banner.php');?>
	<h2>Gallery</h2>
	
<?php include_once ('nav.php');?>
	<div id = 'content'>
<!--All gallery pictures sourced from http://www.imdb.com/title/tt2310332/mediaindex?ref_=tt_pv_mi_sm used for educational purposes only-->

		<div class= "gallerypic"><a href="images/gallery/G1.jpg" onclick="this.target= '_blank';return true;"><img src="images/gallery/G1.jpg" alt = "Gallery Image 01" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G2.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G2.jpg" alt = "Gallery Image 02" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G3.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G3.jpg" alt = "Gallery Image 03" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G4.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G4.jpg" alt = "Gallery Image 04" width="100" height="100"></img></a></div>
		<p><br /></p>
		<div class= "gallerypic"><a href="images/Gallery/G5.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G5.jpg" alt = "Gallery Image 05" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G6.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G6.jpg" alt = "Gallery Image 06" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G7.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G7.jpg" alt = "Gallery Image 07" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G8.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G8.jpg" alt = "Gallery Image 08" width="100" height="100"></img></a></div>
		<p><br /></p>
		<div class= "gallerypic"><a href="images/Gallery/G9.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G9.jpg" alt = "Gallery Image 09" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G10.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G10.jpg" alt = "Gallery Image 10" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G11.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G11.jpg" alt = "Gallery Image 11" width="100" height="100"></img></a></div>
		<div class= "gallerypic"><a href="images/Gallery/G12.jpg" onclick="this.target= '_blank';return true;"><img src="images/Gallery/G12.jpg" alt = "Gallery Image 12" width="100" height="100"></img></a></div>
	</div>
	
<?php include_once ('footer.php');?>
</body>
</html>