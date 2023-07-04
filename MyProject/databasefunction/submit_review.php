<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $freelancer = $_POST['freelancer'];
    $name = $_POST['name']; // Assuming you have a field named 'name' in your form
    $job = $_POST['job'];
    $jobdone= $_POST['jobdone'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    // Perform any necessary validation on the data

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

    // Prepare and execute a SQL query to insert the review into the database
    $sql = "INSERT INTO reviews (name, freelancer, job, jobdone, rating, review) 
            VALUES ('$name', '$freelancer', '$job', '$jobdone', '$rating', '$review')";

    if ($conn->query($sql) === TRUE) {
        // echo "Review submitted successfully";
        header("Location:../view/jobsView.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect the user back to the review page if they accessed this file directly without submitting the form
    header("Location: review_page_cus.php");
    exit();
}
