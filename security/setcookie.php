<?php 
/*
cookies store some infomation ithe users computer for the wesite tp either identify or help improve
user experience

setcookie(name, value, expire, path, domain, secure, httponly);
 */

setcookie("location",'Nairobi', time()+2*60*60*24,'/');

if (isset($_COOKIE['location'])) {
	// code...
	$cookie=$_COOKIE['location'];

	echo $cookie;
}


//to destroy the cookie
//setcookie('location','Nairobi', -7*24*3600,'/');

 ?>