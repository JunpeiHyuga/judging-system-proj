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
            <a href="../judge/Judge_dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Dashboard">Dashboard</div>
            </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item active open">
            <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-male-female"></i>
              <div data-i18n="Dashboard">Judges</div>
              <!-- <div class="badge bg-danger rounded-pill ms-auto">2</div> -->
            </a>
            <ul class="menu-sub">
              <li class="menu-item active">
                <a href="Judge_grading_system.php" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                  <div data-i18n="Add Event">Grading System</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="Edit_archive.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">Edit/Archive Contestant</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="../judge/Tally_score.php"  class="menu-link">
                  <i class="menu-icon tf-icons bx bx-edit"></i>
                  <div data-i18n="Add Event">View Score</div>
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
                    $sql_for_admin = "SELECT `picture` FROM `organizer` WHERE `account_type` = 'Judge' LIMIT 0, 1";

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
                            $sql_for_admin = "SELECT `picture` FROM `organizer` WHERE `account_type` = 'Judge' LIMIT 0, 1";

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
                            $sql = "SELECT `first_name` FROM `organizer` WHERE`account_type` = 'Judge' LIMIT 0, 1";

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
                            $sql_for_admin = "SELECT `account_type` FROM `organizer` WHERE `account_type` = 'Judge' LIMIT 0, 1";

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
                    <a class="dropdown-item" href="../judge/Judge_profile.php">
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
          <?php
          // Fetch contestant ID (assuming you have some logic to determine the contestant)
          $contestant_id = 0; // Default value or error indicator
          $query = "SELECT `contestant_id` FROM `add_contestant`"; // Modify the condition as per your logic
          $result = $CONNECTION->query($query);

          if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $contestant_id = $row['contestant_id'];
          }

          if ($contestant_id > 0) {
            // Fetch criteria and comments from POST
            $criteria101 = isset($_POST['criteria101']) ? floatval($_POST['criteria101']) : 0;
            $criteria102 = isset($_POST['criteria102']) ? floatval($_POST['criteria102']) : 0;
            $criteria103 = isset($_POST['criteria103']) ? floatval($_POST['criteria103']) : 0;
            $criteria104 = isset($_POST['criteria104']) ? floatval($_POST['criteria104']) : 0;
            $comments = isset($_POST['comment_text']) ? htmlspecialchars($_POST['comment_text']) : '';

            // Calculate total score
            $score = ($criteria101 * 0.10) + ($criteria102 * 0.30) + ($criteria103 * 0.20) + ($criteria104 * 0.40);
            $totalScore = round($score, 2);

            // Insert/update data in the database
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $stmt = $CONNECTION->prepare("INSERT INTO `ranking_system`(`contestant_id`, `criteria101`, `criteria102`, `criteria103`, `criteria104`, `comment_text`, `total_score`) VALUES (?, ?, ?, ?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE
            `criteria101`=VALUES(`criteria101`), `criteria102`=VALUES(`criteria102`), `criteria103`=VALUES(`criteria103`), `criteria104`=VALUES(`criteria104`), `comment_text`=VALUES(`comment_text`), `total_score`=VALUES(`total_score`)");
              $stmt->bind_param("iddddsd", $contestant_id, $criteria101, $criteria102, $criteria103, $criteria104, $comments, $totalScore);

              if ($stmt->execute()) {
                echo "<script>$(document).ready(function(){ $('#successModal').modal('show'); });</script>";
              } else {
                echo "<p>Error: " . $stmt->error . "</p>";
              }

              $stmt->close();
            }
          } else {
            echo "<p>Error: Contestant ID not found.</p>";
          }
          ?>
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Rating/</span> Rating System</h4>
            <div class="flex-grow-1">
              <?php
              // Define the query to retrieve the total score
              $sql = "SELECT `total_score` FROM `ranking_system` WHERE `archive` = 0 LIMIT 0, 1";  // adjust the query based on your table structure and requirements

              // Execute the query
              $result = $CONNECTION->query($sql);

              // Fetch the result
              if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $totalScore = $row['total_score'];
              } else {
                $totalScore = 0; // Default value if no score is found
              }
              ?>
              <span class="fw-medium d-block">
                Total Score Earned:
                <?php
                $displayScore = isset($totalScore) && $totalScore !== '' ? $totalScore . '%' : '0%';

                echo $displayScore;
                ?> of 100%
              </span>
            </div>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a class="nav-link active" href="../judge/Judge_grading_system.php">Contestant 101</a></li>
              <li class="nav-item"><a class="nav-link " href="../judge/Contestant2.php">Contestant 102</a></li>
              <li class="nav-item"><a class="nav-link " href="../judge/Contestant3.php">Contestant 103</a></li>
              <li class="nav-item"><a class="nav-link" href="../judge/Contestant4.php">Contestant 104</a></li>
              <li class="nav-item"><a class="nav-link" href="../judge/Contestant5.php">Contestant 105</a></li>
              <li class="nav-item"><a class="nav-link" href="../judge/Tally_score.php">View Tally</a></li>
            </ul>
            <!-- Basic Layout -->
            <div class="row">
              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Rating System</h5>
                  </div>
                  <div class="card-body">
                    <?php
                    $sql = "SELECT `criteria_id`, `criteria_1_name`, `criteria_1_value`, `criteria_2_name`, `criteria_2_value`, `criteria_3_name`, `criteria_3_value`, `criteria_4_name`, `criteria_4_value` FROM `add_criteria`";

                    $result = $CONNECTION->query($sql);

                    // Check if there are results
                    if ($result->num_rows > 0) {
                      // Output data of each row
                      while ($row = $result->fetch_assoc()) {
                        // Assuming you want to echo out the data
                        $criteria_id = $row["criteria_id"];
                        $criteria_1_name = $row["criteria_1_name"];
                        $criteria_1_value = $row["criteria_1_value"];
                        $criteria_2_name = $row["criteria_2_name"];
                        $criteria_2_value = $row["criteria_2_value"];
                        $criteria_3_name = $row["criteria_3_name"];
                        $criteria_3_value = $row["criteria_3_value"];
                        $criteria_4_name = $row["criteria_4_name"];
                        $criteria_4_value = $row["criteria_4_value"];
                      }
                    } else {
                      echo "0 results";
                    }
                    ?>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                      <?php if (isset($id)) { ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <?php } ?>
                      <div class="mb-3">
                        <label for="criteria101">Criteria 101 - <?php echo isset($criteria_1_name) ? htmlspecialchars($criteria_1_name) : ''; ?> <?php echo isset($criteria_1_value) ? htmlspecialchars($criteria_1_value) : ''; ?> %</label>
                        <input type="number" step="0.1" class="form-control" id="criteria101" name="criteria101" value="<?= $criteria101 ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="criteria102">Criteria 102 - <?php if (isset($criteria_2_name)) : ?><?php echo htmlspecialchars($criteria_2_name); ?><?php endif; ?> <?php if (isset($criteria_2_value)) : ?><?php echo htmlspecialchars($criteria_2_value); ?><?php endif; ?>%</label>
                        <input type="number" step="0.1" class="form-control" id="criteria102" name="criteria102" value="<?= $criteria102 ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="criteria103">Criteria 103 - <?php if (isset($criteria_3_name)) : ?><?php echo htmlspecialchars($criteria_3_name); ?><?php endif; ?> <?php if (isset($criteria_3_value)) : ?><?php echo htmlspecialchars($criteria_3_value); ?><?php endif; ?>%</label>
                        <input type="number" step="0.1" class="form-control" id="criteria103" name="criteria103" value="<?= $criteria103 ?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="criteria104">Criteria 104 - <?php if (isset($criteria_4_name)) : ?><?php echo htmlspecialchars($criteria_4_name); ?><?php endif; ?> <?php if (isset($criteria_4_value)) : ?><?php echo htmlspecialchars($criteria_4_value); ?><?php endif; ?>%</label>
                        <input type="number" step="0.1" class="form-control" id="criteria104" name="criteria104" value="<?= $criteria104 ?>" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-message">Comment: </label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-message-square-detail"></i></span>
                          <textarea id="basic-icon-default-message" class="form-control" placeholder="What's on your mind?" aria-label="What's on your mind?" aria-describedby="basic-icon-default-message2" name="comment_text"><?= isset($_POST['comment_text']) ? htmlspecialchars($_POST['comment_text']) : '' ?></textarea>
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
            <?php
            $sql_for_judge = "SELECT aj.assign_id, aj.judges_id, ae.event_name, ae.status 
                  FROM assign_judges aj
                  JOIN add_events ae ON aj.event_id = ae.event_id LIMIT 0, 1";

            if ($result_for_judge = mysqli_query($CONNECTION, $sql_for_judge)) {
              while ($row = mysqli_fetch_array($result_for_judge)) {
                $judge_id = $row['judges_id'];
                $assign_time = $row['assign_id'];
                $event_name = $row['event_name'];
                $event_status = $row['status'];

                // Fetch judge details from the `judges` table
                $sql_for_judge_details = "SELECT fullname, judges 
                                  FROM add_judges 
                                  WHERE judges_id = $judge_id";

                if ($result_for_judge_details = mysqli_query($CONNECTION, $sql_for_judge_details)) {
                  while ($judge_details = mysqli_fetch_array($result_for_judge_details)) {
                    $judge_name = $judge_details['fullname'] . ' ' . $judge_details['judges'];

                    echo "<div class='card mb-4'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>Assigned Judge for Event: $event_name</h5>";
                    echo "<p class='card-text'>Judge: $judge_name</p>";
                    echo "<p class='card-text'>Assigned Judge ID: $assign_time</p>";

                    // Check if event is finished and display/update accordingly
                    if ($event_status == 'finished') {
                      echo "<p class='card-text'>Event Status: Finished</p>";
                      // Here you can update the event status or perform other actions
                      // For example, update the database to mark the event as finished
                      $update_sql = "SELECT `event_id` , `status` FROM `add_events` WHERE `status` = 'finished'";
                      mysqli_query($CONNECTION, $update_sql);
                    } else {
                      echo "<p class='card-text'>Event Status: In Progress</p>";
                    }

                    echo "</div>";
                    echo "</div>";
                  }
                }
              }
            }
            ?>

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