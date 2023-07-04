<!DOCTYPE html>
<html>
<head>
  <title>Freelancer Jobs</title>
  <style>
    /* Add your custom styles here */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      justify-content: center;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      color: #4F46E5;
    }

    .job-list {
      margin-top: 20px;
    }

    .job-item {
      border: 1px solid #4F46E5;
      padding: 20px;
      margin-bottom: 20px;
    }

    .job-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .job-status {
      font-size: 16px;
      font-weight: bold;
      color: #4F46E5;
      margin-bottom: 10px;
    }

    .job-description {
      font-size: 16px;
      color: #666;
    }

    .job-status.pending {
      color: #FF9800;
    }

    .job-status.done {
      color: #4CAF50;
    }

    .complete-button {
      background-color: #4F46E5;
      color: #FFFFFF;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .complete-button:hover {
      background-color: #333399;
    }
  </style>
</head>
</head>
<body>
  <div class="container">
    <h1>Freelancer Jobs</h1>
    
    <div class="job-list">

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
        $sql = "SELECT * FROM jobstatus";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the jobs
            while ($row = $result->fetch_assoc()) {
                $jobId = $row['id'];
                $jobTitle = $row['title'];
                $jobStatus = $row['status'];
                $jobDescription = $row['description'];

      echo '<div class="job-item">';
        echo '<h2 class="job-title">'.$jobTitle.'</h2>';
        echo '<p class="job-status">Client Name: '.$row['cname'].'</p>';
        echo '<p class="job-status">Freelancer Name: '.$row['fname'].'</p>';
        if($jobStatus == "PENDING")
          echo '<p class="job-status pending">Status: '.$jobStatus.'</p>';
        else
          echo '<p class="job-status done">Status: '.$jobStatus.'</p>';
      echo '<p class="job-description">Job Description : '.$jobDescription.'</p>';
      echo '<form action="../databasefunction/mark_as_complete.php" method="POST">';
      if($jobStatus == "PENDING")
      echo '<button class="complete-button">Mark as Complete</button>';
      else
      echo '<button class="complete-button" disabled>Mark as Complete</button>';
      echo '<input hidden name="jID" id="jID" value="'.$jobId.'"';
      echo '<input type="text" id="fID" name="fID" value="asdasdasd" readonly>';
      echo '</form>';
      echo '</div>';
            }
        } else {
            echo "No jobs found.";
        }

        // Close the database connection
        $conn->close();
       
       ?>

    <!-- <div class="job-list">
      <div class="job-item">
        <h2 class="job-title">Job Title 1</h2>
        <p class="job-status pending">Status: Pending</p>
        <p class="job-description">Job Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec sapien eget odio fermentum tincidunt vitae et mauris. Sed et lacus id ex commodo fringilla vel id felis.</p>
      </div>

      <div class="job-item">
        <h2 class="job-title">Job Title 2</h2>
        <p class="job-status done">Status: Done</p>
        <p class="job-description">Job Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nec sapien eget odio fermentum tincidunt vitae et mauris. Sed et lacus id ex commodo fringilla vel id felis.</p>
        <button class="complete-button">Mark as Complete</button><a href="#"></a>
      </div> -->

      <!-- Add more job items here -->
    </div>
  </div>
</body>
</html>
