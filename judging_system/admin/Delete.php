<?php
// Include your database connection file if not already included
include "C:\laragon\www\Judging_System\config\config.php";

// Check if the ID parameter is set in the URL and is numeric
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $contestant_id = $_GET['id'];

    // Prepare the SQL statement to update contestant's archived status
    $sql = "UPDATE `add_contestant` SET `archived` = 1 WHERE `contestant_id` = ?";

    // Prepare statement
    $stmt = mysqli_prepare($CONNECTION, $sql);

    if ($stmt === false) {
        die('MySQL prepare error: ' . mysqli_error($CONNECTION));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $contestant_id);

    // Execute the update statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect back to the original page or wherever you want after archiving
        // header("Location: Edit_archive_contestant.php");
        echo "<script>window.location.href = '../admin/Edit_archive_contestant.php';</script>";
        exit();
    } else {
        echo "Error executing update: " . mysqli_stmt_error($stmt);
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    echo "Contestant ID not specified or invalid.";
}
?>