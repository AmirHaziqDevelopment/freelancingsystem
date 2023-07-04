<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" type="text/css" href="test.css">
</head>

<body>
<php>
  $name = "";
  
</php>
  <header>
    <h1>User Profile</h1>
  </header>

  <div class="container">
    <div class="profile">
      <img src="C:\wamp64\www\MyProject" alt="Profile Picture">
      <h2><?php echo $name; ?></h2>
      <p>Email: <?php echo $email; ?></p>
      <p>Location: <?php echo $location; ?></p>
      <button id="editButton">Edit Profile</button>
    </div>

    <div class="edit-profile">
      <h2>Edit Profile</h2>
      <form id="profileForm" method="post" action="update_profile.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="<?php echo $location; ?>" required>

        <button type="submit">Save</button>
      </form>
    </div>
  </div>

  <script src="test.js"></script>
</body>
</html>

