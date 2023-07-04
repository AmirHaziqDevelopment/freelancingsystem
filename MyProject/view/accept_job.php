<?php
include '../databasefunction/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobId = $_POST["jobId"];

    // Update job status to "Accepted"
    $updateSql = "UPDATE jobs SET status = 'Accepted' WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("i", $jobId);

    if ($stmt->execute()) {
        echo "Job accepted successfully.";
    } else {
        echo "Error accepting job: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
