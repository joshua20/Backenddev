<?php 
require_once('conn.php');

$query="SELECT * FROM classics";
$result=mysqli_query($conn,$query);
if (!$result) {
	// code...
	echo "sorry we could not process the query at the moment";
}

$rows=$result->num_rows;
for ($i=0; $i < $rows ; $i++) { 
	// code...
	// 
	$result->data_seek($i);
	echo"Author: ".htmlspecialchars($result->fetch_assoc()['author'])."<br>";
	$result->data_seek($i);
	echo"title: ".htmlspecialchars($result->fetch_assoc()['title'])."<br>";
	$result->data_seek($i);
	echo "category: ".htmlspecialchars($result->fetch_assoc()['category'])."<br>";
	$result->data_seek($i);
	echo "year: ".htmlspecialchars($result->fetch_assoc()['year'])."<br>";
	$result->data_seek($i);
	echo "ISBN: ".htmlspecialchars($result->fetch_assoc()['isbn'])."<br><br>" ;
}
$result->close();
$conn->close();
 ?>