<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="admin"; // Mysql password
$db_name="test"; // Database name
$tbl_name="test_mysql"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="1" cellspacing="0" cellpadding="3">

<?php
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td width="10%"><? echo $rows['id']; ?></td>
<td width="30%"><? echo $rows['name']; ?></td>
<td width="30%"><? echo $rows['lastname']; ?></td>
<td width="30%"><? echo $rows['email']; ?></td>
</tr>

<?php
// close while loop
}

?>
</table>
<?php
// close MySQL connection
mysql_close();
?>
