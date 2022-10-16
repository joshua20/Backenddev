<?php 
require_once('login.php');
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
	// code...
	die('fatal error');
}

 ?>