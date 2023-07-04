<!DOCTYPE html>
<html>
<head>
  <title>Job History</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
}

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      color: #4f46e5;
      text-align: center;
      margin-bottom: 20px;
    }

    .job-card {
      background-color: #e2e8f0;
      border-radius: 6px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .job-card h2 {
      color: #4f46e5;
      margin-bottom: 10px;
    }

    .job-card p {
      color: #718096;
      margin-bottom: 5px;
    }

    .status {
      color: #d53f8c;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Job History</h1>

    
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
        $sql = "SELECT jobstatus.id, fname, cname, remarks, completion_date, title, status FROM `job_history` INNER JOIN jobstatus ON job_history.job_id = jobstatus.id;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the jobs
            while ($row = $result->fetch_assoc()) {
                $jobId = $row['id'];
                $freelance = $row['fname'];
                $client = $row['cname'];
                $complete = $row['completion_date'];
                $remark = $row['remarks'];
                $title = $row['title'];
                $status = $row['status'];

                echo '<div class="job-card">';
                echo '<h2>' . $title . '</h2>';
                echo '<p>Client: ' . $client. '</p>';
                echo '<p>Status: <span class="status">' . $status. '</span></p>';
                echo '<p>Remark: ' . $remark . '</span></p>';
                echo '<p>Date: ' . $complete . '</span></p>';
                echo '</div>';
      // echo '<div class="job-card">';
      //   echo '<h2 class="job-title">'.$jobTitle.'</h2>';
      //   echo '<p class="job-status">Client Name: '.$row['cname'].'</p>';
      //   echo '<p class="job-status">Freelancer Name: '.$row['fname'].'</p>';
      //   if($jobStatus == "PENDING")
      //     echo '<p class="job-status pending">Status: '.$jobStatus.'</p>';
      //   else
      //     echo '<p class="job-status done">Status: '.$jobStatus.'</p>';
      // echo '<p class="job-description">Job Description : '.$jobDescription.'</p>';
      // echo '<form action="../databasefunction/mark_as_complete.php" method="POST">';
      // if($jobStatus == "PENDING")
      // echo '<button class="complete-button">Mark as Complete</button>';
      // else
      // echo '<button class="complete-button" disabled>Mark as Complete</button>';
      // echo '<input hidden name="jID" id="jID" value="'.$jobId.'"';
      // echo '<input type="text" id="fID" name="fID" value="asdasdasd" readonly>';
      // echo '</form>';
      // echo '</div>';
            }
        } else {
            echo "No jobs found.";
        }

        // Close the database connection
        $conn->close();
       
       ?>

    <?php
    // Example job data
    $jobs = [
      [
        'project' => 'Project XYZ',
        'client' => 'John Doe',
        'status' => 'Completed'
      ],
      [
        'project' => 'Project ABC',
        'client' => 'Jane Smith',
        'status' => 'In Progress'
      ],
      [
        'project' => 'Project 123',
        'client' => 'Mark Johnson',
        'status' => 'Cancelled'
      ]
    ];

    // Loop through job data and display job cards
      
    ?>

  </div>
</body>
</html>

