<?php
// Establish a connection to the MySQL database
// $conn = mysqli_connect("localhost", "username", "password", "database_name");
$conn = mysqli_connect('localhost','root','','youtube_db');
// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Get the message and sender from the form
$message = $_POST["message"];
$sender = $_POST["sender"];

// Write a SQL query to insert the message into the database
$sql = "INSERT INTO messages (sender, message) VALUES ('$sender', '$message')";

// Execute the query
mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);
?>