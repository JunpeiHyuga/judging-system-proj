<?php
$SERVER_NAME = "localhost";
$USER_NAME = "root";
$PASSWORD = "";
$DATABASE_NAME = "judging_system_database";

$CONNECTION = new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE_NAME);

if ($CONNECTION->connect_error) {
  $error = $CONNECTION->connect_error;
  die("Error: The connection in the config file has some error: " . $error);
}
?>