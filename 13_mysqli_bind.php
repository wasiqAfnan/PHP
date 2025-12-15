<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "users_db";

// connecting to db
$conn = mysqli_connect($server, $user, $pw, $db);

// checking connection established or not
if(!$conn){
    die("Failed to connect to DB: ".mysqli_connect_error($conn));
}

// sql
$sql = "SELECT * FROM users WHERE ID = (?);";

// prepare statement
$stmt = mysqli_prepare($conn, $sql);

// bind params
$id = 4;
mysqli_stmt_bind_param($stmt,"i", $id);

// execute
mysqli_stmt_execute($stmt);

// fetch result
$res = mysqli_stmt_get_result($stmt);

// print
if (mysqli_num_rows($res) === 1) {
    $row = mysqli_fetch_assoc($res);
    echo "<table border='2'><tr><td>" . $row['ID'] . "</td><td>"
        . $row['NAME'] . "</td><td>"
        . $row['EMAIL'] . "</td></tr></table>";
}
?>