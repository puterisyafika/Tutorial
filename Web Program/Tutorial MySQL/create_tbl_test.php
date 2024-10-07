<?php

$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}


// query create table in my_db1
mysql_select_db("db_nafbti", $con);
$sql = "CREATE TABLE test
(
Name varchar(15),
id int
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>