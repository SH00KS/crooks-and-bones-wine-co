<?php
function connect() {
    $host="sql4.freemysqlhosting.net"; // Host name 
	$username="sql4104755"; // Mysql username 
	$password="JPP6XCGFUf"; // Mysql password 
	$db_name="sql4104755"; // Database name 
	$tbl_name="wine"; // Table name 

	// Connect to server and select database.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

}
?>