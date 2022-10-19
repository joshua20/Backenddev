<?php 
require_once'../php_mysql/conn.php';

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
	
	$author=htmlentities(mysqli_real_escape_string($conn,$_POST['author']));
	$title=htmlentities(mysqli_real_escape_string($conn,$_POST['title']));
	$category=htmlentities(mysqli_real_escape_string($conn,$_POST['category']));
	$year=htmlentities(mysqli_real_escape_string($conn,$_POST['year']));
	$isbn=htmlentities(mysqli_real_escape_string($conn,$_POST['isbn']));

echo $author, $title,$category,$year,$isbn;

	$query="INSERT INTO classics VALUES('$author','$title','$category','$year','$isbn')";
	$result=mysqli_query($conn,$query);
	if (!$result) {
		// code...
		echo "could not INSERT data".mysqli_error($conn);
	}
}

echo<<<_END
<form action="htmlinjection.php" method="post">
Author:<input type="text" name="author"><br>
Title:<input type="text" name="title"><br>
category:<input type="text" name="category"><br>
year:<input type="text" name="year"><br>
isbn:<input type="text" name="isbn"><br>
<input type="submit" value="ADD RECORD">
</form>
_END;

 ?>