<?php

$servername = "localhost";
$username = "Recipe";
$password = "PutSofAin";
$dbname = "InfleunceRecipeDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Insert data into "Recipe" table using form values
$sql = "INSERT INTO Recipe (rName, rCategory, iName)
        VALUES ('" . $_POST['rname'] . "','" . $_POST['rcategory'] . "','" . $_POST['iname'] . "')";

if (!mysqli_query($conn, $sql)) {
    die('Error: ' . mysqli_error($conn));
}

echo "1 record added";
mysqli_close($conn);

?>



