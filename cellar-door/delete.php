<?php

$host="sql4.freemysqlhosting.net"; // Host name 
$username="sql4104755"; // Mysql username 
$password="JPP6XCGFUf"; // Mysql password 
$db_name="sql4104755"; // Database name 
$tbl_name="wine"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#FFFFFF"><strong>Delete data in mysql</strong> </td>
</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><strong>Batch No.</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Type</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Percentage</strong></td>
<td align="center" bgcolor="#FFFFFF">&nbsp;</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td bgcolor="#FFFFFF">#<? echo $rows['batch']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['name']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['type']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['percentage']; ?>%</td>
<td bgcolor="#FFFFFF"><a href="delete_ac.php?batch=<? echo $rows['batch']; ?>">delete</a></td>
</tr>

<?php
// close while loop 
}
?>

</table>

<?php
// close connection; 
mysql_close();
?>
