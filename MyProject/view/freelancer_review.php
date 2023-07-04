<!DOCTYPE html>
<html>
<head>
  <title>Freelancer Reviews</title>
  <link rel="stylesheet" type="text/css" href="../css/freelancer_review.css">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .checked {
  color: orange;
}
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">Ulasan Pelanggan</h1>

    
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
        $sql = "SELECT * FROM reviews";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the jobs
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $freelancer = $row['freelancer'];
                $job = $row['job'];
                $status = $row['jobdone'];
                $rating = $row['rating'];
                $review = $row['review'];

                echo '<div class="review-item">';
                echo '<div class="review-content">';
        echo '<h2 class="username">'.$name.'</h2>';
        echo '<p class="job-status">Job: '.$job.'</p>';
        echo '<p class="job-status">Freelancer: '.$freelancer.'</p>';
        if($status == "PENDING")
          echo '<p class="job-status pending">Status: '.$jobStatus.'</p>';
        else
          echo '<p class="job-status done">Status: '.$status.'</p>';
        echo '<div class="star-rating">';
          $star = $rating;
          $starr = 5 - $star;

          for($i = 0; $i < $star; $i++)
          {
            echo '<span class="fa fa-star checked"></span>';
          }


          for($i = 0; $i < $starr; $i++)
          {
            echo '<span class="fa fa-star"></span>';
          }

          
      echo '</div>';

      echo '<p class="job-description">Comment : '.$review.'</p>';
      echo '</div>';
      echo '</div>';
            }
        } else {
            echo "No jobs found.";
        }

        // Close the database connection
        $conn->close();
       
       ?>



    <!-- <div class="review-item">
  <div class="profile">
    <img class="profile-image" src="../img/pic-1.png" alt="Profile Image">
  </div>
  <div class="review-content">
    <div class="username">JohnDoe123</div>
    <div class="star-rating">
      <span class="fa fa-star checked"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="fa fa-star"></span>
    </div>
    <p>This freelancer did an excellent job. Highly recommended!</p>
  </div>
</div>


<div class="review-item">
  <div class="profile">
    <img class="profile-image" src="../img/pic-2.png" alt="Profile Image">
  </div>
  <div class="review-content">
    <div class="username">JohnDoe123</div>
    <div class="star-rating">
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
    </div>
    <p>This freelancer did an excellent job. Highly recommended!</p>
  </div>
</div>

<div class="review-item">
  <div class="profile">
    <img class="profile-image" src="../img/pic-3.png" alt="Profile Image">
  </div>
  <div class="review-content">
    <div class="username">JohnDoe123</div>
    <div class="star-rating">
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
      <span class="star"></span>
    </div>
    <p>This freelancer did an excellent job. Highly recommended!</p>
  </div>
</div> -->
      <!-- Add more review items here -->

    </div>
  </div>
</body>
</html>