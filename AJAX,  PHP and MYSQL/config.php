<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "ajax_demo";
$port = 3406;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
