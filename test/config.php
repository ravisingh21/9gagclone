<?php
session_start();
$host="localhost";
$username="root";
$password="admin";
$db_name="9gags";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db");
?>
