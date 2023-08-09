<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "velocity_motors";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>