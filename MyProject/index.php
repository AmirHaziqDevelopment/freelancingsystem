<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom CSS styles */
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .background-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      filter: blur(10px); /* Adjust the blur amount as needed */
    }

    .navbar {
      background-color: white; /* Set the background color to white */
      height: 70px; /* Adjust the height as needed */
    }

    .content {
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Adjust the background color and opacity for the content */
    }

    /* Footer styles */
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      z-index: 2;
    }
     /* Styles for the active button */
  .active {
    background-color: #ff80b5;
    color: white;
    /* Add more styles as needed */
  }
  </style>
<?php require'view/header.php'; ?>
    
    <div class="relative isolate px-6 pt-14 lg:px-8">
  <body class="h-full">
    <video class="background-video" src="vid/mp4.mp4" autoplay loop muted></video>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="text-center">
      <h1 class="text-4xl font-bold tracking-tight text-orange-500 sm:text-6xl" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">KKP Freelancing Service System</h1>
        <p class="mt-6 text-lg leading-8 text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">Serlahkan potensi anda dan cetuskan kerjaya bebas anda dengan tapak web Sistem Perkhidmatan Bebas KKP yang tiada tandingannya, di mana peluang berlimpah dan kreativiti berkembang pesat.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="../MyProject/forms/login.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulakan</a>
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Ketahui lebih lanjut <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <!-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> -->
    <br>
    <br>
    <br>

    <!-- Added buttons -->
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Folding Clothes</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Repair Phone</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Teaching</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Clothes Iron</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">English Tuition</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Service Car</a>
      <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Printing</a>
    </div>



  <!-- Content -->
  <div class="content">
    <!-- Your content here -->
  </div>
<!-- Footer -->
<!-- <footer class="footer">
    <<div class="container mx-auto px-4">
      <div class="flex flex-wrap justify-center">
        <div class="w-full lg:w-1/4 mb-6 lg:mb-0">
          <h3 class="text-white text-lg font-semibold mb-4">Our Partners</h3>
          <div class="flex justify-center">
            <img src="company1.png" alt="Company 1" class="h-8 w-auto mr-4">
            <img src="company2.png" alt="Company 2" class="h-8 w-auto mr-4">
            <img src="company3.png" alt="Company 3" class="h-8 w-auto mr-4">
          </div>
        </div>
        <div class="w-full lg:w-1/4 mb-6 lg:mb-0">
          <h3 class="text-white text-lg font-semibold mb-4">Featured Clients</h3>
          <div class="flex justify-center">
            <img src="client1.png" alt="Client 1" class="h-8 w-auto mr-4">
            <img src="client2.png" alt="Client 2" class="h-8 w-auto mr-4">
            <img src="client3.png" alt="Client 3" class="h-8 w-auto mr-4">
          </div>
        </div>
        <div class="w-full lg:w-1/4 mb-6 lg:mb-0">
          <h3 class="text-white text-lg font-semibold mb-4">Our Affiliates</h3>
          <div class="flex justify-center">
            <img src="affiliate1.png" alt="Affiliate 1" class="h-8 w-auto mr-4">
            <img src="affiliate2.png" alt="Affiliate 2" class="h-8 w-auto mr-4">
            <img src="affiliate3.png" alt="Affiliate 3" class="h-8 w-auto mr-4">
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  
  <script>
  // Get the "Find Talent" button element
  const findTalentButton = document.getElementById('find-talent-button');

  // Add event listener for button click
  findTalentButton.addEventListener('click', function() {
    // Toggle the 'active' class on the button
    findTalentButton.classList.toggle('active');
  });
</script>

</body>
</html>
