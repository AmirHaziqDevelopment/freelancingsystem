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
$description = $_POST['description'] ?? '';
$freelancer_name = $_POST['freelancer_name'] ?? '';
$freelancer_email = $_POST['freelancer_email'] ?? '';
$freelancer_phone = $_POST['freelancer_phone'] ?? '';
$freelancer_image = $_POST['freelancer_image'] ?? '';

// Handle file upload


if (isset($_FILES['freelancer_image'])) {
    $file_name = $_FILES['freelancer_image']['name'];
    $file_tmp = $_FILES['freelancer_image']['tmp_name'];

    // Get the file extension
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Valid image extensions
    $valid_extensions = array('jpg', 'jpeg', 'png', 'gif');

    // Check if the uploaded file is a valid image
    if (in_array($file_ext, $valid_extensions)) {
        // Read the image file as binary data
        $fp = fopen($file_tmp, 'rb');
        $image_data = fread($fp, filesize($file_tmp));
        fclose($fp);

        // Escape special characters in the binary data
        $escaped_image_data = $conn->real_escape_string($image_data);

        $freelancer_image = $escaped_image_data;
    } else {
        echo "Invalid file format. Only JPG, JPEG, PNG, and GIF images are allowed.";
        exit();
    }
}

$db = new Database();

$query = 'INSERT INTO jobs (title, description, status, freelancer_name, freelancer_email, freelancer_phone, freelancer_image) VALUES (?, ?, ?, ?, ?, ?, ?)';
$stmt = $conn->prepare($query);
$stmt->bind_param("sssssss", $title, $description, $status, $freelancer_name, $freelancer_email, $freelancer_phone, $freelancer_image);

$title = $_POST['title'];
$description = $_POST['description'];
$status = 'none';
$freelancer_name = $_POST['freelancer_name'];
$freelancer_email = $_POST['freelancer_email'];
$freelancer_phone = $_POST['freelancer_phone'];
$freelancer_image = $_POST['freelancer_image'];


if ($stmt->execute()) {
    header('Location: ../view/DashAdmin.php');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
