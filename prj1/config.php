<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="admin"; // Mysql password
$db_name="demo"; // Database name
$tbl_name="userdata";
  
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
