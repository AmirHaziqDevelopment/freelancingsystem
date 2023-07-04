<!DOCTYPE html>
<html>
<head>
  <title>Add New Job</title>
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
  color:#4F46E5;
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
  background: #f8f8ff;  /* Lighter background for form fields */
}

input[type="submit"] {
  display: block;
  margin: 0 auto;
  background-color: #4F46E5;
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
  <div class="container">
    <h1>Tambah Kerja Baharu</h1>

    <form action="../databasefunction/addJob.php" method="POST">
      <label for="freelancer_name">Freelancer Name</label>
      <input type="text" id="freelancer_name" name="freelancer_name" placeholder="Ganesh Raaj Arumugam" required>

      <label for="freelancer_email">Freelancer Email</label>
      <input type="text" id="freelancer_email" name="freelancer_email" placeholder="graaj15@gmail.com" required>

      <label for="freelancer_phone">Freelancer Phone Number</label>
      <input type="text" id="freelancer_phone" name="freelancer_phone" placeholder="011-2780 1583" required>

      <label for="title">Job Title</label>
      <input type="text" id="title" name="title" placeholder="Software Engineer" required>

      <label for="description">Job Description</label>
      <textarea id="description" name="description" rows="4" placeholder="Any information regarding the job that is going to be enlisted in the system."></textarea>

      <label for="freelancer_image">Freelancer Image</label>
      <input type="file" id="freelancer_image" name="freelancer_image" required> <!-- File input field for the freelancer's image -->

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

