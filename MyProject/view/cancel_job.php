<?php
include '../databasefunction/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobId = $_POST["jobId"];

    // Update job status to "Cancelled"
    $updateSql = "UPDATE jobs SET status = 'Cancelled' WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("i", $jobId);

    if ($stmt->execute()) {
        echo "Job cancelled successfully.";
    } else {
        echo "Error cancelling job: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
