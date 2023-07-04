<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancing_system";

// Establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $resume = $_FILES["resume"];

    // Validate form data
    if (empty($name)|| empty($email) || empty($phone) || empty($resume)) {
        echo "All fields are required.";
        exit;
    }

    // File upload handling
    $targetDir = "uploads";
    $resumeFileName = basename($resume["name"]);
    $resumePath = $targetDir . $resumeFileName;

    if (move_uploaded_file($resume["tmp_name"], $resumePath)) {
        // Insert data into the database
        $sql = "INSERT INTO registration (name, email, phone, resume) 
                VALUES ('$name', '$email', '$phone', '$resumePath')";

        if ($conn->query($sql) === true) {
            echo "Registration submitted successfully.";
            header('location: /MyProject/view/DashAdmin.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading resume.";
    }
} else {
    header("Location: registration.html");
    exit;
}

// Close the database connection
$conn->close();
?>
