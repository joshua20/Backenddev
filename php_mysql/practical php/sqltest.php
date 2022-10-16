<?php 

require_once'conn.php';

if(isset($_POST['delete']) && isset($_POST['isbn'])) {
	// code...
	$isbn=get_post($conn,'isbn');
	$query="DELETE FROM classics WHERE isbn='$isbn'";
	$result=mysqli_query($conn,$query);
	if (!$result) {
		// code...
		echo "DELETE failed";
	}
}
if (isset($_POST['author'])&&
     isset($_POST['title'])&&
     isset($_POST['category'])&&
     isset($_POST['year']) &&
     isset($_POST['isbn'])){
	// code...
	
	$author=get_post($conn,'author');
	$title=get_post($conn,'title');
	$category=get_post($conn,'category');
	$year=get_post($conn,'year');
	$isbn=get_post($conn,'isbn');
echo $author, $title,$category,$year,$isbn;

	$query="INSERT INTO classics VALUES('$author','$title','$category','$year','$isbn')";
	$result=mysqli_query($conn,$query);
	if (!$result) {
		// code...
		echo "could not INSERT data".mysqli_error($conn);
	}
}

echo<<<_END
<form action="sqltest.php" method="post">
Author:<input type="text" name="author"><br>
Title:<input type="text" name="title"><br>
category:<input type="text" name="category"><br>
year:<input type="text" name="year"><br>
isbn:<input type="text" name="isbn"><br>
<input type="submit" value="ADD RECORD">
</form>
_END;

$query="SELECT * FROM classics";
$result=mysqli_query($conn,$query);
if (!$result) {
	// code...
	echo "could not SELECT data.".mysqli_error($conn);
}

$rows=$result->num_rows;

for ($i=0; $i < $rows; $i++) { 
	// code...
	$row=$result->fetch_array(MYSQLI_ASSOC);

	$r1=htmlspecialchars($row['author']);
	$r2=htmlspecialchars($row['title']);
	$r3=htmlspecialchars($row['category']);
	$r4=htmlspecialchars($row['year']);
	$r5=htmlspecialchars($row['isbn']);
echo<<<_END
<pre>
Author : $r1
Title  : $r2
Category: $r3
Year   : $r4
ISBN	: $r5
</pre>
<form action="sqltest.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="isbn" value='$r5'>
<input type="submit" value="DELETE RECORD">
</form>
_END; 

}

function get_post($conn,$var){

	return $conn->real_escape_string($_POST[$var]);
}
 ?>
