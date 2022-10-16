<?php 
require_once("../conn.php");

$query="DESCRIBE cats";
$result=mysqli_query($conn,$query);

if (!$result) {
	// code...
	// 
	echo "we could run describe command";
}

$rows=mysqli_num_rows($result);
echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
for ($i=0; $i < $rows; $i++) { 
	// code...
	// 
	$row=$result->fetch_array(MYSQLI_NUM);

	echo "<tr>";
	for ($k=0; $k <4 ; $k++) { 
		// code...
		echo "<td>".htmlspecialchars($row[$k])."</td>" ;

	}
	echo "</tr>";


}
echo "</table>";
 ?>