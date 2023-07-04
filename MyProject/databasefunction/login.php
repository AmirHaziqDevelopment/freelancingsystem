<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancing_system";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the email and password entered by the user
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute an SQL query to check the regular users table
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Regular user login successful
    // Redirect to the regular user page
    header("Location: ../view/jobsView.php");
    exit();
}

// Prepare and execute an SQL query to check the freelancers table
$sql = "SELECT * FROM freelancers WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Freelancer login successful
    // Redirect to the freelancer page
    header("Location: ../view/DashAdmin.php");
    exit();
}

// If no matching records found, display an error message
echo "Invalid email or password";

// Close the database connection
$conn->close();
?>
