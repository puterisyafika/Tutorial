<?php
//connection to server
$con = mysql_connect("localhost","nafbti","8118");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//select the dbase
mysql_select_db("db_nafbti", $con);

//filter Peter only
$result = mysql_query("SELECT * FROM Persons where firstname = 'Peter'");

//OR selects all the data stored in the "Persons" table, and sorts the result by the "Age" column
//$result = mysql_query("SELECT * FROM Persons ORDER BY age");
while($row = mysql_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br/>";
}
mysql_close($con);
?>