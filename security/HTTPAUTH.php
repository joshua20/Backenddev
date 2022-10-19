<?php 

$username="josh1000";
$password="josh1000";

if (isset($_SERVER['PHP_AUTH_USER'])&& isset($_SERVER['PHP_AUTH_PW'])) {
	// code...
	// 
	if ($_SERVER['PHP_AUTH_USER']===$username &&
		$_SERVER['PHP_AUTH_PW']===$password) {
		// code...
		// 
		echo "you are logged in";
	}
	else{
		die("invalid user or password try again") ;
	}
}
else{

	header('WWW-Authenticate: realm="restricte area"');
	header("HTTP/1.0 404 Unauthored access");
	die("Invalid username and password");
}

 ?>