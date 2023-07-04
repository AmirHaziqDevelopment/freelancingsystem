<?php
// Retrieve the jobId from the submitted form
// $name = $_POST['fID'];
$jobId = $_POST['jID'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancing_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Update the status of the selected job to "Done"
$updateSql = "UPDATE jobstatus SET status = 'DONE' WHERE id = $jobId";
if ($conn->query($updateSql) === TRUE) {
    echo "Job marked as complete successfully.";

    // Insert a new entry into job_history table
    $freelancerId = 123; // Assuming you have the freelancer ID stored somewhere
    $completionDate = date("Y-m-d"); // Get the current date
    $remarks = "Job completed successfully";

    $insertSql = "INSERT INTO job_history (job_id, freelancer_id, completion_date, remarks)
                  VALUES ('$jobId', '$freelancerId', '$completionDate', '$remarks')";

    if ($conn->query($insertSql) === TRUE) {
        echo "Job history updated successfully.";
    } else {
        echo "Error updating job history: " . $conn->error;
    }
} else {
    echo "Error updating job status: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
