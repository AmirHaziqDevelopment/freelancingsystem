<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelancing_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve job history from the database
$sql = "SELECT * FROM job_history";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the job history
    while ($row = $result->fetch_assoc()) {
        $jobId = $row['job_id'];
        $freelancerId = $row['freelancer_id'];
        $completionDate = $row['completion_date'];
        $remarks = $row['remarks'];

        // Display the job history details
        echo "<div class='job-history'>";
        echo "<p>Job ID: $jobId</p>";
        echo "<p>Freelancer ID: $freelancerId</p>";
        echo "<p>Completion Date: $completionDate</p>";
        echo "<p>Remarks: $remarks</p>";
        echo "</div>";
    }
} else {
    echo "No job history found.";
}

// Close the database connection
$conn->close();
?>
