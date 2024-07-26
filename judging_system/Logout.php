<?php
include "../Judging_System/config/config.php";
session_start(); // Start the session

session_start();
session_unset();
session_destroy();

header('location: index.php');
?>