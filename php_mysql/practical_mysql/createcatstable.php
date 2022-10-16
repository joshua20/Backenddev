<?php 
require_once"../conn.php";

$query="CREATE TABLE cats (
						id INT UNSIGNED NOT NULL AUTO_INCREMENT,
						family VARCHAR(100),
						name VARCHAR(50),
						age tinyINT,
						INDEX(name(30)),
						PRIMARY KEY(id)
						)";
$result=mysqli_query($conn,$query);
if (!$result) {
	// code...
	// 
	echo "table cats was not created".mysqli_error($conn);
}

 ?>