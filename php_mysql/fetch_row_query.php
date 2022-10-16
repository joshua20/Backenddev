<?php 
require_once("conn.php");

$query="SELECT * FROM classics";
$result=mysqli_query($conn,$query);

$rows=$result->num_rows;

for ($i=0; $i <$rows ; $i++) { 
	// code...
	// 
	$row=$result->fetch_array(MYSQLI_ASSOC);//we could use MYSQLI_NUM or MYSQLI_BOTH

	echo "Author: ".htmlspecialchars($row['author'])."<br>" ;
	echo "Title : ".htmlspecialchars($row['title'])."<br>";
	echo "category ".htmlspecialchars($row['category'])."<br>";
	echo "year  : ".htmlspecialchars($row['year'])."<br>";
	echo "ISBN  : ".htmlspecialchars($row['isbn'])."<br><br><br>";
}
$result->close();
$conn->close();


 ?>