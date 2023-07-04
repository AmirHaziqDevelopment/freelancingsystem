<!DOCTYPE html>
<html>
<head>
  <title>Butiran Kerja</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.5); /* 70% white transparency */
      /* border: 2px solid #4F46E5; */
      border-radius: 15px; 
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 80px; /* Adjust the margin-top value as per your preference */
    }

    h1 {
      color: #4F46E5; /* Indigo heading color */
    }

    p {
      margin-bottom: 10px;
    }

    .line {
      width: 100%;
      height: 1px;
      background-color: indigo; /* Indigo line color */
      margin-bottom: 20px;
    }

    .freelancer-info {
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid #4F46E5;
      margin-bottom: 20px;
    }

    .freelancer-info h2 {
      font-size: 20px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .freelancer-name {
      font-size: 16px;
      color: #666;
      margin-bottom: 5px;
    }

    .freelancer-email {
      font-size: 16px;
      color: #666;
      margin-bottom: 5px;
    }

    .freelancer-phone {
      font-size: 16px;
      color: #666;
    }

    .info-box {
      background-color: #f2f2f2;
      border: 1px solid #4F46E5;
      padding: 10px;
      width: 200px;
      text-align: center;
    }

    .info-box h2 {
      font-size: 16px;
      margin-top: 0;
    }

    .info-box p {
      font-size: 14px;
      margin-bottom: 0;
    }

    .accept-button {
      width: 100%;
      background-color: #4F46E5; /* Indigo accept button color */
      color: #FFFFFF;
      border-radius: 8px; 
      padding: 10px 20px;
      margin-right: 10px;
      cursor: pointer;
    }

    .reject-button {
      width: 100%;
      background-color: red; /* Grey reject button color */
      color: #FFFFFF;
      border-radius: 8px; 
      padding: 10px 20px;
      margin-right: 10px;
      cursor: pointer;
    }

    .accept-button:hover,
    .cancel-button:hover {
      background-color: #333399; /* Darker indigo hover color */
    }

    .actions {
      margin-top: 20px;
    } 

    .apply-form-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    .apply-form-table th,
    .apply-form-table td {
      border: 1px solid #4F46E5;
      padding: 8px;
    }

    .apply-form-table th {
      background-color: #4F46E5;
      color: #FFFFFF;
    }

    .apply-form-table td {
      background-color: #f2f2f2;
    }
  </style>
</head>
<!DOCTYPE html>
<html>
<head>
  <title>Maklumat Perkhidmatan</title>
  <!-- Your CSS styles here -->
</head>
<body>
  <div class="container">
    <h1>Maklumat Perkhidmatan</h1>
    <div class="job-details">
      <?php
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

      // Check if the job ID is provided in the URL parameter
      if (isset($_GET['id'])) {
        $jobId = $_GET['id'];

        
        $jID = $_POST['jID'] ?? '';

          // Fetch job data from the database based on the job ID
          $sql = "SELECT title, description, freelancer_name, freelancer_email, freelancer_phone FROM jobs WHERE id = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("i", $jobId);
          $stmt->execute();
          $result = $stmt->get_result();

          // Display the job details
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();

              echo "<h2 class='job-title'>" . $row['title'] . "</h2>";
              echo "<p class='job-description'>" . $row['description'] . "</p>";

              echo "<div class='freelancer-info'>";
              echo "<h2>Maklumat Freelancer</h2>";
              echo "<p class='freelancer-name'>" . $row['freelancer_name'] . "</p>";
              echo "<p class='freelancer-email'>" . $row['freelancer_email'] . "</p>";
              echo "<p class='freelancer-phone'>" . $row['freelancer_phone'] . "</p>";
              echo "</div>";
          } else {
              echo "Job details not found.";
          }

          $stmt->close();

          // Fetch client apply form data from the database
          $sql = "SELECT client_name, client_number, message, clientapplyform.status, freelancer_name, title, clientapplyform.id FROM clientapplyform INNER JOIN jobs ON clientapplyform.freelancer_id = jobs.id WHERE freelancer_id = $jobId";
          $result = $conn->query($sql);

          // Display the client apply form data
          if ($result->num_rows > 0) {
            echo "<h2>Permintaan Perkhidmatan</h2>";
            $index = 1;
            while ($row = $result->fetch_assoc()) {
              $cname = $row['client_name'];
              $fname = $row['freelancer_name'];
              $desc = $row['message'];
              $title = $row['title'];
              $jID = $row['id'];
                echo "<div class='client-apply-form'>";
                echo "<h3>Application #$index</h3>";
                echo "<table class='apply-form-table'>";
                echo "<tr><th>Nama Pelanggan</th><th>Numbor Pelanggan</th><th>Message</th><th>Action</th><th>Status</th></tr>";
                echo "<tr>";
                echo "<td>" . $row['client_name'] . "</td>";
                echo "<td>+60" . $row['client_number'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                if ($row['status'] == 'PENDING')
                echo "<td>
                        <form action='../databasefunction/addJobHistory.php' method='POST' >
                          <button class='accept-button'>Accept</button>
                          <input hidden name='id' value='$jobId'/>
                          <input hidden name='cname' value='$cname'/>
                          <input hidden name='fname' value='$fname'/>
                          <input hidden name='desc' value='$desc'/>
                          <input hidden name='title' value='$title'/>
                          <input hidden name='jID' value='$jID'/>
                          <input hidden name='opt' value='ACCEPTED'/>
                        </form>
                        <form action='../databasefunction/addJobHistory.php' method='POST' >
                          <button class='reject-button'>Reject</button>
                          <input hidden name='id' value='$jobId'/>
                          <input hidden name='jID' value='$jID'/>
                          <input hidden name='opt' value='REJECTED'/>
                        </form>
                      </td>";
                else
                echo "<td>
                        <button class='accept-button' disabled>Accept</button>
                        <button class='reject-button' disabled>Reject</button>
                      </td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
                $index++;
            }
        } else {
            echo "No client apply form data found.";
        }
        
        

      } else {
          echo "Invalid job ID.";
      }

      // Close connection
      $conn->close();
      ?>
    </div>
    <!-- Add more related information or actions here -->
  </div>
</body>
</html>

