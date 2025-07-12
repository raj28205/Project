<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // User not logged in, redirect to login.php
    header("Location: login.php");
    exit;
}

// Proceed with saving feedback
$conn = new mysqli("localhost", "username", "password", "your_database_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    // Feedback submitted successfully, show an alert and redirect
    echo "<script>
        alert('Feedback submitted successfully!');
        window.location.href = 'kelkui.php';
    </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
