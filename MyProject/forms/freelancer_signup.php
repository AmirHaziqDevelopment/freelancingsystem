<!DOCTYPE html>
<html>
<head>
  <title>Freelancer Signup</title>
  <link rel="stylesheet" type="text/css" href="freelancer_signup.css">
</head>
<body>
  <div class="logo">
    <a href="../index.php">
      <img class="logo" src="../img/logo.png" alt="">
    </a>
  </div>

  <div class="container">
    <h1>Freelancer Signup</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

   

      <div class="form-group text-center">
        <input type="submit" value="Signup" name="submit">
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST["submit"])) {
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
    // Retrieve the form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Prepare and execute a SQL query to insert the form data into the database
    $sql = "INSERT INTO freelancers (first_name, last_name, username, password, email) VALUES ('$firstName', '$lastName', '$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
      //echo "Data inserted successfully";
      header("Location: ../forms/login.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
  }
  ?>

</body>
</html>
