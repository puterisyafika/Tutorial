<?php

$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

mysql_select_db("db_nafbti", $con);

$result = mysql_query("SELECT * FROM Persons");
while($row = mysql_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br />";
}
mysql_close($con);
?>