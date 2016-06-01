<?php
$db_host="localhost";
$db_username="root";
$db_pass="hasija";
$db_name="rmgx";
@mysql_connect("$db_host","$db_username","$db_pass") or die ("not linked"); 
@mysql_select_db("$db_name") or die ("no database");
?>

