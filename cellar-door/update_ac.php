<?php
$host="sql4.freemysqlhosting.net"; // Host name 
$username="sql4104755"; // Mysql username 
$password="JPP6XCGFUf"; // Mysql password 
$db_name="sql4104755"; // Database name 
$tbl_name="wine"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// update data in mysql database 
$sql="UPDATE $tbl_name SET name='$name', type='$type', percentage='$percentage' WHERE batch='$batch'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='list_records.php'>View result</a>";
}

else {
echo "ERROR";
}

?>