<?php

$host="sql4.freemysqlhosting.net"; // Host name 
$username="sql4104755"; // Mysql username 
$password="JPP6XCGFUf"; // Mysql password 
$db_name="sql4104755"; // Database name 
$tbl_name="wine"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$type=$_POST['type'];
$percentage=$_POST['percentage'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, type, percentage)VALUES('$name', '$type', '$percentage')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>