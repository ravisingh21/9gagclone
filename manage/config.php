<?php
$host="localhost";
$username="root";
$password="admin";
$db_name="demo";
$tbl_name="manage";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db");
?>
