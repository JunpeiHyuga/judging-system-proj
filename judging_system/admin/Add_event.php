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

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="dashboard.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="../assets/img/favicon/slsu-Logo.png" alt="logo" width="200" height="60">
            </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="Admin_dashboard.php"  class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-male-female"></i>
              <div data-i18n="Dashboard">Judges</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">2</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Add_judge.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-male-female"></i>
                  <div data-i18n="Add judge">Add Judge</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Edit_archive.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">Edit/Archive Judge</div>
                </a>
              </li>
            </ul>
          </li>

          <!-- Front Pages -->
          <li class="menu-item active open">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-calendar-event"></i>
              <div data-i18n="Dashboard">Events</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">4</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item active">
                <a href="#" target="_blank" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                  <div data-i18n="Add Event">Add Event</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Add_criteria.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-book-content"></i>
                  <div data-i18n="Add Event">Add Criteria</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Assign_judge.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-male-female"></i>
                  <div data-i18n="Add Event">Assign Judge</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../admin/Event_archive.php"  class="menu-link">
                <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">Edit/Archive</div>
                </a>
              </li>
            </ul>
          </li>


          <!-- Pages -->
          <li class="menu-item">
            <a href="dashboard.html" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user-circle"></i>
              <div data-i18n="Dashboard">Contestant</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">2</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Add_contestant.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="Add Event">Add Contestant</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Edit_archive_contestant.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">Edit/Archive Contestant</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Components -->


          <!-- Extended components -->

          <!-- Form Validation -->

          <!-- Tables -->

          <!-- Data Tables -->

          <!-- Misc -->

        </ul>
      </aside>
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
                    <a class="dropdown-item" href="../admin/My_profile.php">
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

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Event/</span> Add Event</h4>

            <!-- Basic Layout -->
            <div class="row">
              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Adding the event</h5>
                    <!-- <small class="text-muted float-end">Merged inpu</small> -->
                  </div>

                  <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                      
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Event Name</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-list-plus"></i></span>
                          <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Event Name" aria-label="Event Name" aria-describedby="basic-icon-default-fullname2" name="event_name" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">School Year: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                          <input type="text" id="basic-icon-default-company" class="form-control" placeholder="yyyy - yyyy" aria-label="yyyy - yyyy" aria-describedby="basic-icon-default-company2" name="school_year" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-date">Date Start: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-calendar-plus"></i></span>
                          <input type="date" id="basic-icon-default-date" class="form-control phone-mask" aria-describedby="basic-icon-default-date2" name="date_start" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-date">Date End: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-calendar-check"></i></span>
                          <input type="date" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" name="date_end" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-date">Time Start: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-time"></i></span>
                          <input type="time" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" name="time_start" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-date">Time End: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-time"></i></span>
                          <input type="time" id="basic-icon-default-datee" class="form-control phone-mask" aria-describedby="basic-icon-default-datee2" name="time_end" />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Venue: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-message-square-detail"></i></span>
                          <textarea id="basic-icon-default-message" class="form-control" placeholder="What's on your mind?" aria-label="What's on your mind?" aria-describedby="basic-icon-default-message2" name="venue"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="confirmUpdateButton">Confirm Update</button>
                    </div>
                    </form>
                  </div>
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
                <img src=" ../assets/img/favicon/slsu-logo.ico " alt="logo" width="20" height="20">
                <a href="https://www.southernleytestateu.edu.ph/" target="_blank" class="footer-link me-4">SLSU Official Web</a>
                <img src=" ../assets/img/icons/brands/facebook.png" alt="logo" width="25" height="12">
                <a href="https://www.facebook.com/ssc.slsubc" target="_blank" class="footer-link me-4">SSC - SLSUBC</a>
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

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $eventname = mysqli_real_escape_string($CONNECTION, $_POST["event_name"]);
  $schoolyear = mysqli_real_escape_string($CONNECTION, $_POST["school_year"]);
  $datestart = mysqli_real_escape_string($CONNECTION, $_POST["date_start"]);
  $dateend = mysqli_real_escape_string($CONNECTION, $_POST["date_end"]);
  $venue = mysqli_real_escape_string($CONNECTION, $_POST["venue"]);
  $timestart =  $_POST["time_start"];
  $timeend =  $_POST["time_end"];


  $SQL = "INSERT INTO `add_events`(`event_name`, `school_year`, `date_start`, `date_end`, `venue`, `time_start`, `end_time`) 
          VALUES('$eventname', '$schoolyear', '$datestart', '$dateend', '$venue', '$timestart', '$timeend')";

  if (mysqli_query($CONNECTION, $SQL)) {
    echo "<script>$(document).ready(function(){ $('#successModal').modal('show'); });</script>";
  } else {
    echo "Error: " . mysqli_error($CONNECTION);
  }
}

?>