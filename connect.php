<?php
// Database configuration
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Your database username (default for XAMPP is 'root')
$password = ""; // Your database password (default for XAMPP is empty)
$dbname = "customerDetails"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (firstName, mail, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstName, $mail, $message);

// Set parameters and execute
$firstName = $_POST['firstName'];
$mail = $_POST['mail'];
$message = $_POST['txtarea'];
$stmt->execute();

echo "Thanku For Contacting";

// Close connections
$stmt->close();
$conn->close();
?>