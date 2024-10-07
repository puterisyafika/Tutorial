<?php

$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

/* --- can remove because db_nafbti is created by admin server already. 
if (mysql_query("CREATE DATABASE db_nafbti",$con))
{
echo "Database created";
}
else
{
echo "Error creating database: " . mysql_error();
}
*/


// query create table in db_nafbti
mysql_select_db("db_nafbti", $con);

$sql = "CREATE TABLE Persons
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";

if (mysql_query($sql,$con))
{
  echo "<br />Table Persons created";
}
else
{
  die('<br />Error creating table: ' . mysql_error());
}

mysql_close($con);
?>
