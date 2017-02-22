<?php 

session_start();
header( "refresh:3;url=index.php" );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $password = "";
	$userfile = fopen('users.txt', "r");
	$usernameinfo = array();
	$passwordinfo = array();
	$users = array();
	$userpass = FALSE;
	$passwordpass = FALSE;
	while(!feof($userfile)){
		$line = fgets($userfile);
		array_push($users, $line);
		$user = explode("||", $line);
		if ( ! isset($user[6])) {
			$user[6] = null;
		}
		if ( ! isset($user[7])) {
			$user[7] = null;
		}
		array_push($usernameinfo, $user[6]);
		array_push($passwordinfo, $user[7]);
		
	}
	fclose($userfile);


	if (empty($_POST["username"])) {
	
	}
	else {
		$username = $_POST["username"];
	
	}
	if (empty($_POST["password"])) {
	
	}
	else {
		$password = $_POST["password"];
	
	}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include_once ('header.php');?>
	<title>Login</title>
</head>

<body>
	<?php include_once ('banner.php');?>
	<h2>Login</h2>
	<?php include_once ('nav.php');?>
	
<div id = "validate">
<?php 
	foreach ($usernameinfo as $value)
	{
		if($username == $value)
		{
			$userpass = TRUE;
		}
	}
	foreach ($passwordinfo as $value)
	{
		if($password == $value)
		{
			$passwordpass = TRUE;
		}
	}
	if ($passwordpass == TRUE && $userpass == TRUE)
	{
		echo "Login Successful!!!\n\n";
		$_SESSION['username'] = $username;
		echo "page will return to hompage in 5 seconds!";
		
	}
	else {
		echo "Username or Password not found";
	}
?>

</div>
</body>
</html>
