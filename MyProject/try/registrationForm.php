<!DOCTYPE html>
<html>
<head>
  <title>Sign up to find work you love</title>
  <link rel="stylesheet" type="text/css" href="registrationForm.css">
</head>
<body>
  <div class="container">
    <h1>Job Service Registration</h1>
    <form action="../databasefunction/submit.php" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="resume">Upload Resume:</label>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
</body>
</html>
