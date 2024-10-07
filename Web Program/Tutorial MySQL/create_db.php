<?php
//create server connection
$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//create DB
if (mysql_query("CREATE DATABASE db_nafbti",$con))
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysql_error();
}
mysql_close($con);
?>

