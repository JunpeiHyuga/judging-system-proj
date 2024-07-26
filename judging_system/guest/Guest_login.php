<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include "C:\laragon\www\Judging_System\config\config.php";
if (isset($_POST['submit'])) {
  // Check if the required POST variables are set
  if (empty($_POST['username']) || empty($_POST['password'])) {
    die("Username or password not provided");
  }

  $email_username = $_POST['username'];
  $password = $_POST['password'];
  $remember_me = isset($_POST['remember-me']) ? 1 : 0;

  // Validate and sanitize inputs
  $email_username = filter_var($email_username, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  // Establish the database connection

  // Prepare the SQL statement
  $stmt = $CONNECTION->prepare("SELECT `guest_id`, `username`, `email`, `password` FROM `add_guest` WHERE `username` = ?");
  
  // Check if the statement preparation succeeded
  if (!$stmt) {
    die("Preparation failed: " . $CONNECTION->error);
  }

  // Bind parameters
  $stmt->bind_param("s", $email_username);

  // Execute the statement
  $stmt->execute();

  // Bind result variables
  $stmt->bind_result($guest_id, $stored_username, $stored_email, $stored_password);

  // Fetch the result
  if ($stmt->fetch()) {
    // Verify the password
    if (password_verify($password, $stored_password)) {
      // Login successful
      session_start();
      $_SESSION['username'] = $stored_username;
      $_SESSION['guest_id'] = $guest_id;

      $stmt->close();
      $CONNECTION->close();

      // Redirect to the dashboard or home page
      header('Location: ../guest/dashboard.php');
      exit();
    } else {
      echo "Invalid password";
    }
  } else {
    echo "Invalid username or account type";
  }

  // Close the statement
  $stmt->close();
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Voting || System </title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/slsu-logo.ico" />


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <span class="app-brand-text demo text-body fw-bold" style="text-transform:uppercase;">
                <img src="../assets/img/backgrounds/Logov1.png" alt="" style="display: block;
  margin: 0 auto 15px;
  width: 75px;
  height: auto;">
                SLSU BONTOC
              </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to Voting System! 👋</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure of voting</p>

            <form id="formAuthentication" class="mb-3" action="" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input type="text" class="form-control" id="email" name="username" placeholder="Enter your email or username" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  <a href="auth-forgot-password-basic.html">
                    <small>Forgot Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" name="submit">Sign in</button>
              </div>
            </form>

            <p class="text-center">
              <span>New on our platform?</span>
              <a href="../guest/Guest_register.php">
                <span>Create an account</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
  <!-- 
    
    <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>