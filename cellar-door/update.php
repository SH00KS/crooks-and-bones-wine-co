<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="cbwc"; // Database name 
$tbl_name="wine"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$id=$_GET['batch'];

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name WHERE batch='$batch'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Type</strong></td>
<td align="center"><strong>Percentage</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="name" type="text" id="name" value="<? echo $rows['name']; ?>">
</td>
<td align="center">
<input name="type" type="text" id="type" value="<? echo $rows['type']; ?>" size="15">
</td>
<td>
<input name="percentage" type="text" id="percentage" value="<? echo $rows['percentage']; ?>" size="2">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="batch" type="hidden" id="batch" value="<? echo $rows['batch']; ?>">
</td>
<td align="center">
<input type="submit" name="Submit" value="Submit">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php
// close connection 
mysql_close();
?>
