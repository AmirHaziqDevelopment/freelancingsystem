<!doctype html>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #4F46E5;
        }

        p {
            margin-bottom: 10px;
        }

        .job {
            border: 1px solid #DDD;
            padding: 20px;
            margin-bottom: 20px;
        }

        .job-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .job-description {
            font-size: 16px;
            color: #666;
        }

        .job-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4F46E5;
            color: #FFF;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .job-button:hover {
            background-color: #333;
        }
    </style>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>cms dashboard
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../css/DashAdmin.css">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	
	
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  



<div class="wrapper">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../img/logo.png" href="index.php"  class="img-fluid"/><span>KKP Freelancer</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
		
		      <div class="small-screen navbar-display">
                <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">notifications</i><span> 4 notification</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                    <li>
                                    <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                    </ul>
                </li>
				
				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                </li>
				
				 <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                 <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">person</i><span> </span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                    <li>
                                        <a href="profile.ht">Profile</a>
                                    </li>
                                    <li>
                                        <a href="settings.html">Settings</a>
                                    </li>
                                    <li>
                                         <a href="../index.php">Logout</a>
                                    </li>
                    </ul>
                </li>
                </li>
				
				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                </li>
				</div>
			
			
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">aspect_ratio</i><span>Layouts</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="../view/jobListAdmin.php">Senarai Perkhidmatan</a>
                        </li>
                        <li>
                            <a href="../view/jobHistory.php">Sejarah Pekerjaan</a>
                        </li>
                        <li>
                        <a href="../view/freelancer_review.php">Laman Ulasan</a>
                        </li>
                    </ul>
                </li>
                
                <!-- <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">apps</i><span>widgets</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->
				
				 <!-- <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">equalizer</i>
				
					
					<span>chart</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				  <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">extension</i><span>ui element</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">border_color</i><span>forms</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
			   
			   
			   <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">grid_on</i><span>tables</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
			   
			     <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
               <li class="">
                    <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                </li>
				
				 <li  class="">
                    <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
                </li>
               
               
            </ul> -->

           
        </nav>


                <!-- Page Content  -->
                <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <!-- <span class="notification">4</span> -->
                               </a>
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                                  
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../view/addNewJob.php">
								<span class="material-icons">apps</span>
								</a>
                            </li>
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">person</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                         <a href="../view/profile_info.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="settings.html">Settings</a>
                                    </li>
                                    <li>
                                        <a href="../index.php">Logout</a>
                                    </li>
                                
                                </ul>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">settings</span>
								</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>

<!-- 
        <div class="main-content">
			
			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Visits</strong></p>
                                    <h3 class="card-title">70,340</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="#pablo">See detailed report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">shopping_cart</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Orders</strong></p>
                                    <h3 class="card-title">102</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Product-wise sales
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">
attach_money
</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Revenue</strong></p>
                                    <h3 class="card-title">$23,100</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Weekly sales
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    
<span class="material-icons">
follow_the_signs
</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Followers</strong></p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<!DOCTYPE html> -->


                    <div class="container">
    <h1>Halaman Kerja - Freelancer</h1>
    <?php
                // Database configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "freelancing_system";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch job data from database
                $sql = "SELECT * FROM jobs";
                $result = $conn->query($sql);

                // Display job listings
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='job'>";
                        echo "<h2 class='job-title'>" . $row['title'] . "</h2>";
                        echo "<p class='job-description'>" . $row['description'] . "</p>";
                        echo "<a href='./jobsViewPage.php?id=". $row['id']."' class='job-button'>Maklumat Lanjut</a>";
                        echo "</div>";
                    }
                } else {
                    echo "No job listings found.";
                }

                // Close connection
                $conn->close();
                ?>

            </div>
        </div>
    </div>

    <!-- Add more job listings here -->

  </div>







        <!-- footer -->
        <footer class="footer">
                <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6">
                    <nav class="d-flex">
                        <ul class="m-0 p-0">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                   
                </div>
				<div class="col-md-6">
				 <p class="copyright d-flex justify-content-end"> &copy 2023 Design by
                        <a href="#">KKP Freelancing Service System</a>Freelancer Dashboard
                    </p>
				</div>
				  </div>
				    </div>
            </footer>
					
					</div>



             <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });


     
           
       
</script>
  
  



  </body>
  
  </html>