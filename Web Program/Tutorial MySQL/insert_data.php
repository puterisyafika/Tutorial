<?php
/* Connect to localhost */
$con = mysqli_connect("localhost", "Recipe", "PutSofAin");
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

/* Select database */
mysqli_select_db($con, "InfluencerRecipeDB");

/* Insert two records of data into table Recipe */
mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Nasi Khao Mok', 'Rice', 'Dapoq_pdoq')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Peach strudel', 'Dessert', 'Dapoq_pdoq')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Pineapple galbi', 'Korean dish', 'Dapoq_pdoq');

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Creamy tomyam pasta', 'Pasta', 'Khairul Aming');

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Chicken Chop', 'Chicken', 'Khairul Aming')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Sambal Udang Petai', 'Shrimp', 'Che Nom')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Agar Agar Santan Pandan', 'Dessert', 'Che Nom')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Tomyam Ayam', 'Chicken', 'Che Nom')");

mysqli_query($con, "INSERT INTO Recipe (rName, rCategory, iName)
VALUES ('Kuih Ketayap', 'Dessert', 'Che Nom')");


mysqli_close($con);
?>
