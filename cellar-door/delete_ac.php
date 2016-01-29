
<?php

$host="sql4.freemysqlhosting.net"; // Host name 
$username="sql4104755"; // Mysql username 
$password="JPP6XCGFUf"; // Mysql password 
$db_name="sql4104755"; // Database name 
$tbl_name="wine"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$batch=$_GET['batch'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE batch='$batch'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='delete.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>