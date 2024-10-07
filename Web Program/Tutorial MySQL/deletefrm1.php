<?php

// Connection to server
$con = mysqli_connect("localhost", "nafbti", "8118");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Select the database
mysqli_select_db($con, "db_nafbti");

// The SQL statement that deletes the record
$result = mysqli_query($con, "DELETE FROM Persons WHERE FirstName = '" . $_POST['firstname'] . "'");

// Check if the deletion was successful
if ($result) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);

?>

