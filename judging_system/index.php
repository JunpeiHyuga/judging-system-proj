<?php
session_start();
include "../Judging_System/config/config.php";

if (isset($_POST['submit'])) {
  $email_username = $_POST['email-username'];
  $password = $_POST['password'];
  $account_type = $_POST['office'];
  $remember_me = isset($_POST['remember-me']) ? 1 : 0;

  // Sanitize inputs
  $email_username = $CONNECTION->real_escape_string($email_username);
  $password = $CONNECTION->real_escape_string($password);
  $account_type = $CONNECTION->real_escape_string($account_type);

  // Prepare the SQL statement
  $stmt = $CONNECTION->prepare("SELECT `email_username`, `password`, `account_type` FROM `organizer` WHERE `email_username` = ? AND `account_type` = ?");

  // Check if the statement preparation succeeded
  if (!$stmt) {
    die("Preparation failed: " . $CONNECTION->error);
  }

  // Bind parameters
  $stmt->bind_param("ss", $email_username, $account_type);

  // Execute the statement
  $stmt->execute();

  // Bind result variables
  $stmt->bind_result($stored_email_username, $stored_password, $stored_account_type);

  // Fetch the result
  if ($stmt->fetch()) {
    // Directly compare the passwords
    if ($password === $stored_password) {
      // Login successful
      $_SESSION['email_username'] = $stored_email_username;
      $_SESSION['account_type'] = $stored_account_type;

      session_start();
      $_SESSION['loggedIn'] = true;
      $_SESSION['first_name'] = $first_name;

      // Logic to remember the user
      if ($remember_me) {
        // Set cookies for a month
        setcookie('email_username', $stored_email_username, time() + (30 * 24 * 60 * 60), "/");
        setcookie('account_type', $stored_account_type, time() + (30 * 24 * 60 * 60), "/");
      }
      $stmt->close();

      // Redirect to the dashboard or home page
      // header('Location: ..\Judging_System\admin\Admin_dashboard.php');
      if ($stored_account_type === 'Admin') {
        header('Location: admin\Admin_dashboard.php');
      } elseif ($stored_account_type === 'Judge') {
        header('Location: judge\Judge_dashboard.php');
      }
      exit();
    } else {
      echo "Invalid password";
    }
  } else {
    echo "Invalid email/username or account type";
  }

  // Close the statement
  $stmt->close();
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-no-customizer">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Judging System</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/slsu-logo.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Content -->
  <div class="layout-wrapper layout-navbar-full layout-menu-fixed layout-navbar-fixed">
    <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center" id="layout-navbar">
      <div class="container-fluid">

        <div class="navbar-brand app-brand demo py-0 my-4">
          <a href="" class="app-brand-link">
            <img src="../Judging_System/assets/img/favicon/slsu-Logo.png" alt="logo" width="290" height="75">

            <!-- <span class="app-brand-text demo menu-text fw-bold">Judging System</span> -->
          </a>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">

          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container flex-grow-1 container-p-y my-2 mt-4">


      <!-- Examples -->
      <div class="row mt-sm-4">
        <div class="col-12 mb-3">
          <div class="card">
            <h1 class="card-header">Judging System</h1>
            <!-- Template Demo Links -->
            <table class="table">
              <tbody>
                <tr>
                  <th>Ready to serve you . . .</th>
                  <td>
                    <form id="formAuthentication" class="mb-3" action="" method="post">
                      <div class="mb-3">
                        <label for="email" class="form-label">Email or Username</label>
                        <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus />
                      </div>
                      <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                          <label class="form-label" for="password">Password</label>

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

                      <div class="mb-3 form-control">
                        <label for="office" required>Account</label>
                        <select id="office" name="office" class="select2 form-select">
                          <option value="" >Select</option>
                          <option value="Admin">Admin</option>
                          <option value="Judge">Judge</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <button class="btn rounded-pill btn-outline-primary form-control" type="submit" name="submit">Sign in</button>
                      </div>
          </div>
          </form>
          </td>
          </tr>
          </tbody>
          </table>
          <!--/ Template Demo Links -->
        </div>
      </div>

      <div class="col-12 mb-3">
        <div class="card">
          <h5 class="card-header">SOUTHERN LEYTE STATE UNIVERSITY - LIVE VOTING</h5>
          <div class="row">
            <!-- Bootstrap carousel -->
            <div class="col-md">

              <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/elements/13.jpg" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h3>First slide</h3>
                      <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/elements/2.jpg" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Second slide</h3>
                      <p>In numquam omittam sea.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/elements/18.jpg" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Third slide</h3>
                      <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
            <!-- Bootstrap crossfade carousel -->
            <div class="col-md">

              <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/elements/18.jpg" alt="First slide" />
                    <!-- assets/img/elements/18.jpg -->
                    <div class="carousel-caption d-none d-md-block">
                      <h3>First slide</h3>
                      <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/elements/19.jpg" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Second slide</h3>
                      <p>In numquam omittam sea.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/elements/2.jpg" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Third slide</h3>
                      <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <h5 class="card-header">SELECT CONTESTANT</h5>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Select</th>
                      <th>Contestant</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                      </td>
                      <td>
                        <label class="form-check-label" for="radio1">Contestant 01</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                      </td>
                      <td>
                        <label class="form-check-label" for="radio2">Contestant 02</label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">
                      </td>
                      <td>
                        <label class="form-check-label" for="radio3">Contestant 03</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-5">
                  <label for="email" class="form-label">Fullname</label><br>
                  <input type="text" class="form-control-lg" id="email" name="email-username" placeholder="Enter your name" autofocus />
                  <button class="btn btn-primary">Vote</button>
                </div>
              </div>
            </form>
          </div>

          <!-- <div class="mb-3">
            <label class="form-label" for="basic-icon-default-date">Criteria No. 2: </label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-list-plus"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Add criteria 2" aria-label="Event Name" aria-describedby="basic-icon-default-fullname2" name="criteria_2" />
            </div>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bxs-star"></i></span>
              <input type="number" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" min="1" max="100" name="criteria_2_value" placeholder="1-20" />
            </div>
          </div> -->
          <!-- <div class="mb-3">
            <label class="form-label" for="basic-icon-default-date">Criteria No. 3: </label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-list-plus"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Add criteria 3" aria-label="Event Name" aria-describedby="basic-icon-default-fullname2" name="criteria_3" />
            </div>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bxs-star"></i></span>
              <input type="number" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" min="1" max="100" name="criteria_3_value" placeholder="Enter the percent of the criteria" />
            </div>
          </div> -->
          <!-- <div class="mb-3">
            <label class="form-label" for="basic-icon-default-date">Criteria No. 4: </label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-list-plus"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Add criteria 4" aria-label="Event Name" aria-describedby="basic-icon-default-fullname2" name="criteria_4_name" />
            </div>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bxs-star"></i></span>
              <input type="number" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" min="1" max="100" name="criteria_4_value" placeholder="Enter the percent of the criteria" />
            </div>
          </div> -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="confirmUpdateButton">Confirm Update</button>
          </div> -->
          </form>
        </div>
      </div>
    </div>

    <div class="col-12 mb-3">
      <div class="card">
        <h5 class="card-header">SOUTHERN LEYTE STATE UNIVERSITY</h5>
        <!-- Other Links -->
        <div class="row">
          <video src="../Judging_System/assets/img/backgrounds/sample_vid.mp4" style="width: 100%; height: 100vh; object-fit: cover; position: relative; z-index: 0;" autoplay muted loop></video>
        </div>
        <!--/ Other Links -->
      </div>
    </div>
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with ❤️ by
          <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
        </div>
        <div class="d-none d-lg-inline-block">
          <button type="button" class="btn btn-primary-transparent" data-bs-toggle="modal" data-bs-target="#basicModal">Developer</button>
          <img src=" assets/img/favicon/slsu-logo.ico " alt="logo" width="20" height="20">
          <a href="https://www.southernleytestateu.edu.ph/" target="_blank" class="footer-link me-4">SLSU Official Web</a>
          <img src="assets/img/icons/brands/facebook.png" alt="logo" width="25" height="12">
          <a href="https://www.facebook.com/ssc.slsubc" target="_blank" class="footer-link me-4">SSC - SLSUBC</a>
        </div>
      </div>
    </footer>
  </div>
  </div>
  </div>

  <!-- / Content -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>