<?php
require '../databasefunction/Database.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancing_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'] ?? '';
$description = $_POST['desc'] ?? '';
$freelancer_name = $_POST['fname'] ?? '';
$client_name = $_POST['cname'] ?? '';
$opt = $_POST['opt'] ?? '';
$id = $_POST['id'] ?? '';
$jID = $_POST['jID'] ?? '';

// Handle file upload

$db = new Database();

if($opt == 'ACCEPTED')
{
    $query = "INSERT INTO jobstatus (job_id, title, cname, fname, status, description) VALUES ($id, '$title', '$client_name', '$freelancer_name', 'PENDING', '$description')";
    


    if ($conn->query($query) === true) {
    } else {
        echo "Error: " . $conn->error;
    }

    $query = "UPDATE clientapplyform SET status = 'ACCEPTED' WHERE id = $jID";


    if ($conn->query($query) === true) {
        header('Location: ../view/jobListAdmin.php');
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
else
{
    $query = "DELETE FROM clientapplyform WHERE id = $jID";


    if ($conn->query($query) === true) {
        header('Location: ../view/DashAdmin.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $conn->close();
}

