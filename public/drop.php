<?php
// Replace "database_name", "username", and "password" with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photobookdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone = $_POST["phone"];
$email = $_POST["email"];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO bookings (firstname, lastname, phone, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $firstname, $lastname, $phone, $email);

// Execute SQL statement
if ($stmt->execute()) {
  echo "Form submitted successfully!";
  


} else {
  echo "Error submitting form: " . $stmt->error;
}

// Close connection
$conn->close();
?>

<a href="/about"><button>Home</button></a>