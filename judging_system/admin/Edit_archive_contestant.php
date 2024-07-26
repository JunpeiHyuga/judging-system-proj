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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
            <img src="../assets/img/favicon/slsu-Logo.png" alt="logo" width="200" height="60">
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item ">
            <a href="Admin_dashboard.php"  class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>
          <!-- Layouts -->

          <!-- Front Pages -->
          <li class="menu-item ">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-male-female"></i>
              <div data-i18n="Dashboard">Judges</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">2</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Add_judge.php"  class="menu-link">
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
          <!-- Apps -->
          <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-calendar-event"></i>
              <div data-i18n="Dashboard">Events</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">4</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Add_event.php"  class="menu-link">
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
                <a href="#" target="_blank" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-group"></i>
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
          <li class="menu-item active open">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user-circle"></i>
              <div data-i18n="Dashboard">Contestant</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">2</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="Add_contestant.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="Add Event">Add Contestant</div>
                </a>
              </li>
              <li class="menu-item active">
                <a href="#"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">Edit/Archive Contestant</div>
                </a>
              </li>
            </ul>
          </li>


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
                    <!-- <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
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
                            <!-- <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" /> -->
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
                             $sql = "SELECT `first_name` FROM `organizer` WHERE`account_type` = 'Admin'";

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
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Archive</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">Edit/Archive</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Contestant Fullname</th>
                      <th>Contestant No</th>
                      <th>Contestant Address</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php
                    $sql = "SELECT `contestant_id`, `contestant_fullname`, `contestant_no`, `contestant_address` 
        FROM `add_contestant` 
        WHERE `archived` = 0";

                    if ($RESULTS = mysqli_query($CONNECTION, $sql)) {
                      while ($row = mysqli_fetch_array($RESULTS)) {
                        $contestant_id = $row['contestant_id'];
                        $contestant_fullname = $row['contestant_fullname'];
                        $contestant_no = $row['contestant_no'];
                        $contestant_address = $row['contestant_address'];
                        echo '<tr>
                              <th scope="row">' .  $contestant_id . '</th>
                              <td>' . $contestant_fullname . '</td>
                              <td>' . $contestant_no . '</td>
                              <td>' . $contestant_address . '</td>
                              <td>
                        <button class="btn btn-primary"><a href="Update_edit_archive_co.php?id=' . $contestant_id . '" class="text-light"><i class="fa fa-pencil"></i></a></button>
                        <button class="btn btn-danger" data-target="#confirmModal"><a href="..\admin\Delete.php?id=' . $contestant_id . '" class="text-light"><i class="fa fa-archive"></i></a></button>

                              </td>
                              </tr>';
                      }
                    }
                    ?>
                  </tbody>
                </table>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>