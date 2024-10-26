<!-- db.php -->
<?php
$servername = "localhost";
$username = "root"; // Default username for localhost
$password = ""; // Default password is empty for localhost
$dbname = "projects"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
