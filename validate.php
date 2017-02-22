<?php
  session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
// define variables and initialize with empty values
$firstnameErr = $lastnameErr = $addrErr = $emailErr = $dobErr = $genderErr = $usernameErr = $passwordErr = "";
$firstname = $lastname = $address = $email = $dob = $gender = $username = $password = $type = $duration = "";
$count = 0;
$pass = TRUE;
$userfile = fopen('users.txt', "r");
$usernameinfo = array();
$users = array();
while(!feof($userfile)){
	$line = fgets($userfile);
	array_push($users, $line);
	$user = explode("||", $line);
	array_push($usernameinfo, $user[6]);
}
fclose($userfile);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$type = $_POST["membership"];
	$duration = $_POST["duration"];
	
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Missing";
    }
    
    else {
        $firstname = $_POST["firstname"];
        if (ctype_alpha($firstname) == FALSE)
        {
        	$firstnameErr = "Error - First Name Must only be alphabetic!!";
        }
    }
 	if (empty($_POST["lastname"])) {
        $lastnameErr = "Missing";
    }
    else {
        $lastname = $_POST["lastname"];
        if (ctype_alpha($lastname) == FALSE)
        {
        	$lastnameErr = "Error - Last Name Must only be alphabetic!!";
        }
    }
    if (empty($_POST["address"])) {
    	$addrErr = "Missing";
    }
    else {
    	$reg = '/^[a-zA-Z0-9,. ]*$/';
    	$address = $_POST["address"];
    	if (preg_match($reg, $address))
    	{
    		
    	}
    	else{
    		$addrErr = "Error -Address Must only be alphanumeric!!";
    	}
    }
    
    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$emailErr = "Error - Invalid email format"; 
		}
     
    }
//did not validate dob as is not required(no marks given for it in the marking guide)
    if (empty($_POST["dob"])) {
        $dobErr = "";
        $dob = "not provided";
    }
    else {
        $dob = $_POST["dob"];
    }
    if(empty($_POST["gender"]))
    {
    	$gender = "not provided";
    }
    else {
    	$gender = $_POST["gender"];
    }
 
    if (empty($_POST["username"])) {
        $usernameErr = "missing";
    }
    else {
        $username = $_POST["username"];
        foreach ($usernameinfo as $value)
        {
        	if($username == $value)
        	{
        		$usernameErr = "Error - Username already taken!!";
        	}
        }
        if (ctype_alnum($username) == FALSE)
        {
        	$usernameErr = "Error - Username Must only be alphanumeric!!";
        }
    }
    if (empty($_POST["password"])) {
    	$passwordErr = "missing";
    }
    else {
    	$password = $_POST["password"];
    	$arr1 = str_split($password);
    	
    	foreach ($arr1 as $value)
    	{
    		if (is_numeric($value))
    			$count++;
    		
    	}
    	if (strlen($password) != 8 )
    	{
    		$passwordErr = "Error - Password Must be 8 characters!!";
    	}
    	if ($count != 2)
    	{
    		$passwordErr = "Error - Password Must be exactly 2 numbers!! you have included $count";
    	}

    }
    
    $check = array($firstnameErr, $lastnameErr, $addressErr, $emailErr, $usernameErr, $passwordErr); 
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include_once ('header.php');?>
	<title>Register</title>
</head>

<body>
	<?php include_once ('banner.php');?>
	<h2>Register Status</h2>
	<?php include_once ('nav.php');?>
<div id = "validate">

<!-- POST Data handling -->
<?php

    echo
	 "Firstname =  $firstname <br>
      Lastname = $lastname <br>
      Address = $address <br>
      Email = $email <br>
   	  UserName = $username<br>";
      
      if($passwordErr == ""){
      	echo "Password = ********<br>"; 
      }
      else {
      	echo "Password = $passwordErr<br>";
      }
      
      echo "Type = $type <br>
      Duration = $duration<br>";
      
      foreach ($check as $value)
      {
      	echo "$value\n";
     
      	if($value != "")
      	{
      		$pass = FALSE;
      	}
      }
      if ($pass == TRUE)
      {
      	echo "<br> REGISTRATION SUCCESSFUL!!";
      	$file = fopen('users.txt',"w");
      	fwrite($file, "$firstname||$lastname||$address||$email||$dob||$gender||$username||$password||$type||$duration\n");
      	foreach ($users as $value)
      	{
      		fwrite($file, "$value");
      	}
      	fclose($file);
      }
      else{
      	echo "<br> REGISTRATION UNSUCCESSFUL!! Please try again (use back button on your browser!)";
      }
      
  ?>
  
  
 </div>
</body>
</html>
