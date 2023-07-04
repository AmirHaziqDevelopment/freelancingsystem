<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <title>Senarai Perkhidmatan</title>
    <style>
        /* General CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Default Font Styles */
        body, a, p {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            color: black;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between; /* Distribute space between items */
            background-color: #2f89b3;
            color: white;
            padding: 20px;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar a, .navbar .dropdown {
            margin-right: 10px; /* Add some space between items */
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
        }

        /* Logo and Menu Styles */
        .navbar-brand, .navbar-menu {
            display: flex;
            align-items: center;
        }

        /* Logo Styles */
        .navbar-brand img {
            height: 30px;  /* Adjust this as needed */
        }

        /* Icon Styles */
        .navbar img.icon {
            height: 30px;
            width: 30px;
        }

        /* Search Bar Styles */
        .search-bar input {
            padding: 10px;  /* Adjust the padding here */
            margin-left: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #4a56e2;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #3a46b2;
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
        }

        /* Custom Styles for Active Links */
        .active-link {
            font-weight: bold;
        }
    </style>

    <script>
        // Function to add/remove the 'active-link' class when a link is clicked
        function handleClick(element) {
            // Remove 'active-link' class from all links
            var links = document.getElementsByClassName('navbar-link');
            for (var i = 0; i < links.length; i++) {
                links[i].classList.remove('active-link');
            }

            // Add 'active-link' class to the clicked link
            element.classList.add('active-link');
        }
    </script>

</head>

<body>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="../index.php" onclick="handleClick(this)">
            <img src="../img/logo.png" alt="KKP Freelancing Logo">
            KKP Freelancing  
        </a>
    </div>
    <div class="navbar-menu">
        <a href="jobsView.php" onclick="handleClick(this)">Cari Perkhidmatan</a>
        <!-- <a href="../view/client_service.php" onclick="handleClick(this)">Service Page</a> -->
        <a href="../view/task_status.php" onclick="handleClick(this)">Proses</a>
        <a href="../view/review_page_cus.php" onclick="handleClick(this)">Maklum Balas</a>
        <form class="ml-2 search-bar">
            <input type="text" id="jobSearch" placeholder="Cari Perkhidmatan">
            <button type="button" onclick="searchJobs()">Cari</button>
        </form>
    </div>
    <!-- Icons container -->
    <div>
        <div class="dropdown">
            <a href="#" onclick="handleClick(this)"><img class="icon" src="../img/bell.png" alt="Notification Icon"></a>
            <div class="dropdown-content">
                <a href="#" onclick="handleClick(this)">Settings</a>
                <a href="../index.php" onclick="handleClick(this)">Logout</a>
            </div>
        </div>
        <a href="#" onclick="handleClick(this)"><img class="icon" src="../img/person.png" alt="Profile Icon"></a>
    </div>
</nav>

</body>
</html>





<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url("../img/bg1.jpg") center/cover fixed;
    background-color: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(2px);
}

.container {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #4F46E5;
    border-radius: 15px; 
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    align-items: center;
    backdrop-filter: blur(2px);
    background-color: rgba(255, 255, 255, 0.7); /* 70% white transparency */
}

h1 {
    color: #4b0082;
            margin-top: 0;
            text-align: center;
            margin-top: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-weight: bold;
}

    /* Job list container */
    .job-listings {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-top: 30px; /* Adjust this value as needed */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Job item */
    .job {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        padding: 10px;
        background-color: #F0F0F0;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Job image */
    .job-image img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-left: 40px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Job details */
    .job-details {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        margin-left: 30px; /* Add this line to move the text to the left */
    }

    .job-details h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .job-details h3 {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .job-details p {
        margin-bottom: 5px;
    }

    .job-details .apply-button {
        align-self: flex-end; /* Align button to the right side */
        margin-top: auto; /* Push the button to the bottom */
        background-color: #4F46E5; /* Indigo color */
        color: #FFFFFF; /* White color */
        border: none;
        padding: 4px 12px;
        border-radius: 4px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .job-details .apply-button:hover {
        background-color: #4239CC; /* Darker shade of indigo for hover effect */
    }

    .centered-title {
        text-align: center;
    }
</style>


<h1>Senarai Perkhidmatan</h1>

<div class="job-listings">
    <?php
    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "freelancing_system";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the jobs table
    $sql = "SELECT id, title, description, freelancer_name, freelancer_email, freelancer_phone, freelancer_image FROM jobs";
    $result = $conn->query($sql);

    // Display each job listing
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $description = $row["description"];
            $freelancerName = $row["freelancer_name"];
            $freelancerEmail = $row["freelancer_email"];
            $freelancerPhone = $row["freelancer_phone"];
            $freelancerImage = $row["freelancer_image"];
            $freelancerID = $row["id"];
            ?>
            <div class="job">
                <div class="job-image">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($freelancerImage); ?>" alt="Job Image">
                </div>
                <div class="job-details">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $description; ?></p>
                    <h3>Freelancer: <?php echo $freelancerName; ?></h3>
                    <p>Email: <?php echo $freelancerEmail; ?></p>
                    <p>Phone: <?php echo $freelancerPhone; ?></p>
                    <a href="../view/company.php?freelancer_email=<?php echo urlencode($freelancerEmail); ?>&freelancer_name=<?php echo urlencode($freelancerName); ?>&freelancerID=<?php echo urlencode($freelancerID); ?>" class="apply-button">Mohon Sekarang</a>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No job listings found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>


<script src="../js/script.js"></script>
</body>

</html>

</body>

</html>


