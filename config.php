<?php

$server = "localhost";
$username = "root";
$password = "";  // Use your MySQL root password here
$database = "bluebirdhotel";
$port = 3306;  // The default MySQL port. Change if MySQL is running on a different port.

$conn = mysqli_connect($server, $username, $password, $database, $port);

if (!$conn) {
    die("<script>alert('Connection Failed: ' . mysqli_connect_error());</script>");
} else {
    //echo "<script>alert('Connection Successful.')</script>";
}
?>  