<?php
        // Connect to your database
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

        // Retrieve jobs from the database
        $sql = "SELECT * FROM jobs";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the jobs
            while ($row = $result->fetch_assoc()) {
                $jobId = $row['id'];
                $jobTitle = $row['title'];
                $jobStatus = $row['status'];
                $jobDescription = $row['description'];

                // Display the job details
                echo "<div class='job'>";
                echo "<h2>$jobTitle</h2>";
                echo "<p>$jobDescription</p>";

                // Display the "Mark as Complete" button for jobs with status "Done"
                if ($jobStatus == 'Done') {
                    echo "<form action='mark_as_complete.php' method='post'>";
                    echo "<input type='hidden' name='jobId' value='$jobId'>";
                    echo "<button type='submit'>Mark as Complete</button>";
                    echo "</form>";
                }

                echo "</div>";
            }
        } else {
            echo "No jobs found.";
        }

        // Close the database connection
        $conn->close();
       
       ?>
      