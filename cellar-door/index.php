<?php
$username = "root";
$password = "root";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("cbwc",$dbhandle) 
  or die("Could not select cbwc");

//execute the SQL query and return records
$result = mysql_query("SELECT batch, name, type, percentage FROM wine");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "Batch:".$row{'batch'}." Name:".$row{'name'}." 
   ".$row{'type'}."<br>";
}

//close the connection
mysql_close($dbhandle);
?>