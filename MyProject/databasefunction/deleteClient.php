<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientId = $_POST['jID'];

    // Database configuration
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

    // Delete the client from the database
    $sql = "DELETE FROM clientapplyform WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $clientId);
    if ($stmt->execute()) {
        echo "Client deleted successfully.";
    } else {
        echo "Failed to delete client: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
