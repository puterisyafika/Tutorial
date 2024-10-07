<?php
//connection to server
$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//select the database
mysql_select_db("db_nafbti", $con);
// The SQL statement that deletes the record
$result = "update test set Name='Petto' where id=1";
mysql_query($result);
// Close the database connection
mysql_close($con);
?>