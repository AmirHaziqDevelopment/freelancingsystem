<html>
<style>
    :root {
        --primary-color: #4F46E5;
        /* --secondary-color: #FFFFFF; */
        --text-color: #333333;
        --indigo-color: #4F46E5;
        --grey-color: #808080;
        --white-color: #FFFFFF;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
    }

    .container {
        max-width: 800px; /* Adjust the max-width value as desired */
        margin: 0 auto;
        padding: 30px; /* Adjust the padding value as desired */
        background-color: rgba(255, 255, 255, 0.5); /* 70% white transparency */
        border-radius: 30px; 
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 80px; /* Adjust the margin-top value as desired */
    }

    .logo {
        display: block;
        max-width: 50px;
        margin-bottom: 10px;
    }

    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
    }

    .profile-image img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
    }

    .contact-info {
        margin-top: 20px;
    }

    .contact-info h2 {
        color: var(--indigo-color);
    }

    .contact-info p {
        margin: 5px 0;
    }

    .title-job {
        margin-top: 20px;
    }

    .title-job h2 {
        color: var(--indigo-color);
    }

    .btn {
        display: inline-block;
        background-color: var(--indigo-color);
        color: var(--secondary-color);
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: var(--grey-color);
    }
</style>
</html>


<?php
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

// Retrieve the email and name from the query parameter
$freelancerEmail = isset($_GET['freelancer_email']) ? $_GET['freelancer_email'] : '';
$freelancerName = isset($_GET['freelancer_name']) ? $_GET['freelancer_name'] : '';
$freelancerID = isset($_GET['freelancerID']) ? $_GET['freelancerID'] : '';



$freelancerImage = '';
$phoneNumber = '';
$skills = '';
$experience = '';
$titleJob = '';


// Retrieve user profile information from the database
$sql = "SELECT * FROM jobs WHERE freelancer_email = '$freelancerEmail' AND freelancer_name = '$freelancerName'";
$result = $conn->query($sql);

// ...

if ($result->num_rows > 0) {
    // Fetch the user profile data
    $row = $result->fetch_assoc();
    $phoneNumber = $row['freelancer_phone'];
    $freelancerImage = $row['freelancer_image'];

    // Check if the indices exist in the $row array before assigning their values
    if (isset($row['skills'])) {
        $skills = $row['skills'];
    }
    if (isset($row['experience'])) {
        $experience = $row['experience'];
    }

    $titleJob = $row['title'];
} else {
    echo "No user found with email: $freelancerEmail and name: $freelancerName";
    // Output the SQL query to verify its correctness
    echo "Query: $sql";
}

// ...

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/company.css">

    <style>
        :root {
            --primary-color: #4F46E5;
            --secondary-color: #FFFFFF;
            --text-color: #333333;
        }

        
    </style>
</head>
<body>
    <div class="logo">
        <a href="../view/jobsView.php">
            <img class="logo" src="../img/logo.png" alt="">
        </a>
    </div>
    <div class="profile-container">
        <div class="profile-image">
            <img src="data:image/jpeg;base64,<?= base64_encode($freelancerImage); ?>" alt="Profile Image">
        </div>
        <div class="title-job">
            <h2>Tajuk Perkhidmatan</h2>
            <h3><strong></strong> <?php echo $titleJob; ?></h3>
        <div class="contact-info">
            <h2>Maklumat Freelancer</h2>
            <p><strong>Freelance ID:</strong> <?php echo $freelancerID; ?></p>
            <p><strong>Name:</strong> <?php echo $freelancerName; ?></p>
            <p><strong>Email:</strong> <?php echo $freelancerEmail; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phoneNumber; ?></p>
        </div>
        <!-- <div class="skills">
            <h2>Skills</h2>
            <p><?php echo $skills; ?></p>
        </div> -->
        <!-- <div class="experience">
            <h2>Experience</h2>
            <p><?php echo $experience; ?></p>
        </div> -->
        <div class="form-group">
            <a href="../view/clientForm.php?freelancerID=<?php echo urlencode($freelancerID); ?>" class="btn">Mohon Sekarang</a>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>

