<!DOCTYPE html>
<html>
<head>
  <title>Simple Form</title>
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
      background-color: rgba(255, 255, 255, 0.5); /* 70% white transparency */
      /* border: 2px solid #4F46E5; */
      border-radius: 30px; 
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 80px; /* Adjust the margin-top value as per your preference */
    }

    .logo {
      display: block;
      max-width: 50px;
      margin-bottom: 10px;
    }

    h1 {
      color: #4F46E5;
      margin-top: 0;
    }

    form {
      margin-top: 20px;
      width: 100%;
      max-width: 400px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #4b0082;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #4b0082;
      border-radius: 4px;
      font-size: 14px;
      color: #333;
      background: #f8f8ff; /* Lighter background for form fields */
    }

    input[type="submit"] {
      display: block;
      margin: 0 auto;
      background-color: indigo; /* Updated color */
      color: #FFFFFF;
      border: none;
      padding: 10px 20px;
      margin-top: 20px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #333399;
    }
  </style>
</head>
<body>
<div class="logo">
    <a href="../view/jobsView.php">
      <img class="logo" src="../img/logo.png" alt="">
    </a>
  </div>
  <div class="container">
    <h2>Maklumat Pelanggan</h2>
    <form action="../databasefunction/sendNotiToClient.php" method="POST">
      <div class="form-group">
        <label for="fID">freelance ID</label>
        <?php
          $freelancerID = isset($_GET['freelancerID']) ? $_GET['freelancerID'] : '';
        ?>
        <input type="text" id="fID" name="fID" value="<?php echo urlencode($freelancerID); ?>" readonly>
      </div>
      <div class="form-group">
        <label for="name">nikname</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="tel">tel no</label>
        +60<input type="number" id="number" name="number" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
        <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
