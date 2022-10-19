<?php 
require_once("mysl/conn.php");
/*
• i: The data is an integer.
• d: The data is a double.
• s: The data is a string.
• b: The data is a BLOB (and will be sent in packets).
 */
PREPARE statement FROM "INSERT INTO classics VALUES(?,?,?,?,?)";

SET @author="joshua nyakundi";
	@title="laravel as i know it";
	@category="php programming";
	@year="2023";
	@isbn="2728282892929";

EXECUTE statement USING @author, @title,@category,@year,@isbn;
DEALLOCATE PREPARE statement;

 ?>