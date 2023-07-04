<?php
$name = "Amir Haziq";
$email = "amirhaziq@gmail.com";
$location = "Johor Bahru, Malaysia";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $location = $_POST['location'];

  // Perform any necessary actions with the form data (e.g., update profile)

  // Display success message or perform any other desired actions
  echo "Profile updated successfully!";
}
?>
