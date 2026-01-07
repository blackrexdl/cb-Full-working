<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "booking_system"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO bookings (name, email, phone, date, time, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
