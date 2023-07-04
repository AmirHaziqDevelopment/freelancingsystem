<!DOCTYPE html>
<html>
<head>
  <title>Update Profile Info</title>
  <link rel="stylesheet" type="text/css" href="update_profile.css">
</head>

<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 450px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border: 2px solid #4F46E5;
}

h1 {
  text-align: center;
  color: #4F46E5;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

.form-group input[type="text"],
.form-group input[type="number"],
.form-group textarea {
  width: 390px;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #4F46E5;
  border-radius: 4px;
}

.form-group input[type="submit"] {
  background-color: #4F46E5;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

.form-group input[type="submit"]:hover {
  background-color: #333399;
}

</style>
<body>
  <div class="container">
    <h1>Update Profile Info</h1>

    <form action="update_profile_process.php" method="post">
      <div class="form-group">
        <label for="skills">Skills:</label>
        <input type="text" id="skills" name="skills" required>
      </div>

      <div class="form-group">
        <label for="experience">Experience:</label>
        <input type="text" id="experience" name="experience" required>
      </div>

      <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>
      </div>

      <div class="form-group">
        <label for="contact_info">Contact Info:</label>
        <textarea id="contact_info" name="contact_info" required></textarea>
      </div>

      <div class="form-group">
        <input type="submit" value="Update">
      </div>
    </form>
  </div>
</body>
</html>
