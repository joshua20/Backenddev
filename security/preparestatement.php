<?php 
/*
• i: The data is an integer.
• d: The data is a double.
• s: The data is a string.
• b: The data is a BLOB (and will be sent in packets).
 */
require_once("../php_mysql/conn.php");

$stmt=$conn->prepare("INSERT INTO classics VALUES(?,?,?,?,?)");
$stmt->bind_param('sssss',$author,$title,$category,$year,$isbn);

$author='joshua nyakundi';
$title='laravel 001';
$category='php development';
$year='2020';
$isbn='222626272782';

$stmt->execute();
 printf("%d Row inserted.\n", $stmt->affected_rows);
 $stmt->close();
 $conn->close();





 ?>