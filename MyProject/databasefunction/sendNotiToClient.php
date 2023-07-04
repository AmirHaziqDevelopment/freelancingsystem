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

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

$name = $_POST['name'];
$number = $_POST['number'];
$message = $_POST['message'];
$id = $_POST['fID'];

    // Store the data in the freelancer table
    $sql = "INSERT INTO clientapplyform (client_name, client_number, message, freelancer_id) VALUES ('$name', '$number', '$message', '$id')";

    if ($conn->query($sql) === true) {
        echo "Data stored successfully.";
        header('Location: ../view/jobsView.php');

        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
