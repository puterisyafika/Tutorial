<?php
// Connection to the server
$servername = "localhost";
$username = "kamilahsb";
$password = "password00";
$dbname = "musicdb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the entered username and password from the login form
$enteredUsername = $_POST["username"];
$enteredPassword = $_POST["password"];

// SQL query to check if the entered username and password exist in the Users table
$sql = "SELECT * FROM Users WHERE Username = '$enteredUsername' AND Password = '$enteredPassword'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // If a matching record is found, the login is successful
    date_default_timezone_set('Asia/Kuala Lumpur');
    // Get the current date and time
    $lastVisited = date("d/m/Y H:i:s");

    // Set the cookie to store the last visited date
    setcookie("lastVisited", $lastVisited, time() + (86400 * 30), "/"); // Cookie lasts for 30 days
    
    session_start();
    $_SESSION["Login"] = "YES";

    // Generate the JavaScript code to display the alert box
    $message = "Welcome back! Your last visited date was: $lastVisited";
    echo "<script>
            alert('$message');
            window.location.href = 'Music Player.php';
          </script>";
    exit;
} else {
    // If no matching record is found, the login is unsuccessful
    session_start();
    $_SESSION["Login"] = "NO";
    echo "<h1>You are NOT logged in correctly</h1>";
    echo "<p><a href='MainPage.html'>Back to Login Page</a></p>";
}

// Close the connection
mysqli_close($conn);
?>
