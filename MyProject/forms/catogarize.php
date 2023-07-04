<!DOCTYPE html>
<html>
<head>
  <title>Choose Role</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #6C63FF;
      color: #fff;
    }

    .logo {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .options {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .option {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      padding: 10px 20px;
      background-color: #fff;
      color: #6C63FF;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .option:hover {
      background-color: #D9D5FF;
    }

    .option i {
      margin-right: 10px;
    }

    .option-text {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">Sertai sebagai pelanggan atau Perkhidmatan Kerja</div>
    <div class="options">
      <div class="option" onclick="selectRole('customer')">
        <i class="fas fa-suitcase"></i>
        <span class="option-text">Saya sebagai Pelanggan</span>
      </div>
      <div class="option" onclick="selectRole('freelancer')">
        <i class="fas fa-user-tie"></i>
        <span class="option-text">Saya seorang Freelancer</span>
      </div>
      <p class="mt-10 text-center text-sm text-gray-500">
      Adakah anda mempunyai akaun?
        <a href="../forms/login.php" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Login</a>
      </p>
    </div>
  </div>
  

  <script>
    function selectRole(role) {
      if (role === 'customer') {
        window.location.href = '../forms/client_signup.php';
      } else if (role === 'freelancer') {
        window.location.href = '../forms/freelancer_signup.php';
      }
    }
  </script>
</body>
</html>
