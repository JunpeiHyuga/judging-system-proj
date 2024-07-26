<?php
session_start();
include "C:\laragon\www\Judging_System\config\config.php";

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard | Judging System | Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/slsu-logo.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->

            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <?php
                    $sql_for_admin = "SELECT `picture` FROM `organizer` WHERE `account_type` = 'Admin'";
                    if ($result_for_admin = mysqli_query($CONNECTION, $sql_for_admin)) {
                      while ($row = mysqli_fetch_array($result_for_admin)) {
                        // Assuming `picture` column contains binary image data
                        $imageData = $row['picture'];

                        // Output the image as base64 encoded data
                        $base64Image = base64_encode($imageData);
                        $imageSrc = 'data:image/jpeg;base64,' . $base64Image; // Adjust based on your image type

                        echo '<img src="' . $imageSrc . '" alt="" class="w-px-40 h-auto rounded-circle" />';
                      }
                    }
                    ?>
                  </div>


                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatars">
                            <!-- php code -->

                            <!-- Output the img tag -->
                            <div class="avatar avatar-online">
                              <?php
                               $sql_for_admin = "SELECT `picture` FROM `organizer` WHERE `account_type` = 'Admin'";

                              if ($result_for_admin = mysqli_query($CONNECTION, $sql_for_admin)) {
                                while ($row = mysqli_fetch_array($result_for_admin)) {
                                  // Assuming `picture` column contains binary image data
                                  $imageData = $row['picture'];

                                  // Output the image as base64 encoded data
                                  $base64Image = base64_encode($imageData);
                                  $imageSrc = 'data:image/jpeg;base64,' . $base64Image; // Adjust based on your image type

                                  echo '<img src="' . $imageSrc . '" alt="" class="w-px-40 h-auto rounded-circle" />';
                                }
                              }
                              ?>
                            </div>

                            <!-- end of php code -->
                          </div>

                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">
                            <?php
                            $sql = "SELECT `first_name` FROM `organizer` WHERE `account_type` = 'Admin'";

                            if ($result = mysqli_query($CONNECTION, $sql)) {
                              while ($row = mysqli_fetch_array($result)) {
                                $firstName = $row['first_name'];
                                echo "<span style='font-size: small;'> " . $firstName . "</span>";
                              }
                            }
                            ?>
                          </span>
                          <small class="text-muted">
                            <?php
                            $sql_for_admin = "SELECT `account_type` FROM `organizer` WHERE `account_type` = 'Admin'";

                            if ($result_for_admin = mysqli_query($CONNECTION, $sql_for_admin)) {
                              while ($row = mysqli_fetch_array($result_for_admin)) {
                                $account = $row['account_type'];
                                echo "<span style='font-size: small;'> " . $account . "</span>";
                              }
                            }
                            ?>
                          </small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../Logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->


          <!-- End of php code -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">My Profile /</span> Organizer</h4>
            <div class="container">
              <div class="card mt-5">
                <div class="card-header">
                  <h3>Organizer Settings Panel</h3>
                </div>
                <div class="card-body">
                <?php
                  // Initialize variables
                  $firstname = '';
                  $middlename = '';
                  $surname = '';
                  $email = '';
                  $password = '';
                  $picture = '';
                  $newPassword = '';
                  $retypePassword = '';

                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Form submission handling
                    $firstname = mysqli_real_escape_string($CONNECTION, $_POST["first_name"]);
                    $middlename = mysqli_real_escape_string($CONNECTION, $_POST["middle_name"]);
                    $surname = mysqli_real_escape_string($CONNECTION, $_POST["surname"]);
                    $email = mysqli_real_escape_string($CONNECTION, $_POST["email_username"]);
                    // $password = mysqli_real_escape_string($CONNECTION, $_POST["password"]);

                    $sql = "SELECT `password` FROM `organizer`";
                    $result = mysqli_query($CONNECTION, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if($row){
                      $password = $row['password'];
                    }

                    if(!empty($_POST['newPassword']) && !empty($_POST['retypePassword'])){
                      $newPassword = $_POST['newPassword'];
                      $retypePassword = $_POST['retypePassword'];

                      if($newPassword === $retypePassword){
                        $password = $newPassword;
                      }else{
                        echo '<script>alert("Password do not match... please try again.");</script>';
                        exit;
                      }
                    }


                    // File upload handling
                    if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
                      $picture = addslashes(file_get_contents($_FILES["picture"]["tmp_name"]));
                    }

                    // Update query
                    $sql_to_update = "UPDATE `organizer` SET
            `first_name` = '$firstname',
            `middle_name` = '$middlename',
            `surname` = '$surname',
            `email_username` = '$email',
            `password` = '$password',
            `picture` = '$picture'
            ";

                    if (mysqli_query($CONNECTION, $sql_to_update)) {
                      echo "<script>$(document).ready(function(){ $('#successModal').modal('show'); });</script>";
                    } else {
                      echo "<script>alert('Error updating record:');</script>" . mysqli_error($CONNECTION);
                    }
                  } else {
                    // Fetch existing data when not in POST mode
                    $sql = "SELECT `first_name`, `middle_name`, `surname`, `email_username`, `password`, `picture` FROM `organizer`";
                    $result = mysqli_query($CONNECTION, $sql);
                    $row = mysqli_fetch_assoc($result);
                    if ($row) {
                      $firstname = htmlspecialchars($row["first_name"]);
                      $middlename = htmlspecialchars($row["middle_name"]);
                      $surname = htmlspecialchars($row["surname"]);
                      $email = htmlspecialchars($row["email_username"]);
                      $password = htmlspecialchars($row["password"]);
                      // Check if 'picture' key exists in $row before assigning
                      $picture = isset($row["picture"]) ? $row["picture"] : '';
                    }
                  }
                  ?>

                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-8">
                        <h5>Basic Information</h5>
                        <div class="form-group">
                          <label for="firstName">Firstname:</label>
                          <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo htmlspecialchars($firstname); ?>">
                        </div>
                        <div class="form-group">
                          <label for="middleName">Middlename:</label>
                          <input type="text" class="form-control" id="middleName" name="middle_name" value="<?php echo htmlspecialchars($middlename); ?>">
                        </div>
                        <div class="form-group">
                          <label for="lastName">Lastname:</label>
                          <input type="text" class="form-control" id="lastName" name="surname" value="<?php echo htmlspecialchars($surname); ?>">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="companyLogo">Profile Picture:</label>
                          <input type="file" class="form-control-file" id="companyLogo" name="picture">
                        </div>
                        <br>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="username">Username:</label>
                          <input type="text" class="form-control" id="username" name="email_username" value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                        <div class="form-group">
                          <label for="password">Current Password:</label>
                          <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                        </div>
                        <div class="form-group">
                          <label for="retypePassword">New Password:</label>
                          <input type="password" class="form-control" id="retypePassword" name="newPassword">
                        </div>
                        <div class="form-group">
                          <label for="currentPassword">Re-type Password:</label>
                          <input type="password" class="form-control" id="currentPassword" name="retypePassword">
                        </div>
                      </div>
                    </div>


                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 10px;">Cancel</button> -->
                      <a href="Admin_dashboard.php" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 10px;">Cancel</a>
                      <button type="button" class="btn btn-primary" id="confirmUpdateButton">Confirm Update</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>


          <!-- / Content -->


          <!-- Footer -->
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
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link">Support</a>
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

  <!-- Vendors JS -->
  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->


  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>


  <!-- Modal for confirmation -->


  <!-- Modal for success message -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Update Successful</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Your information has been successfully updated.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      // Check if modal should be shown (using sessionStorage)
      var showModal = sessionStorage.getItem('showSuccessModal');
      if (showModal === 'true') {
        $('#successModal').modal('show');
        sessionStorage.removeItem('showSuccessModal'); // Remove after showing
      }

      // Submit form when confirm button is clicked
      $('#confirmUpdateButton').on('click', function() {
        $('#confirmUpdateModal').modal('hide'); // Hide the confirmation modal
        $('form').submit(); // Submit the form
      });

      // Handle modal dismissal properly
      $('#confirmUpdateModal').on('hidden.bs.modal', function(e) {
        // Reset modal state if needed
        $(this).find('form')[0].reset(); // Reset form inside modal if necessary
      });

      // Show success modal after successful update
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        $(function() {
          sessionStorage.setItem('showSuccessModal', 'true'); // Store in sessionStorage
          window.location = window.location.href; // Refresh the page to show the modal
        });
      <?php endif; ?>

      // Close success modal when close button is clicked
      $('#successModal').on('click', '[data-dismiss="modal"]', function() {
        $('#successModal').modal('hide');
      });
    });
  </script>


</body>

</html>