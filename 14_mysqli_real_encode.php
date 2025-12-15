<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "users_db";

// connecting to db
$conn = new mysqli($server, $user, $pw, $db);

// checking connection established or not
if($conn->connect_error){
    die("Failed to connect to DB: ".$conn->connect_error);
}

// santize so that no need to use bind
$email = "yo@yo.com";
$email = mysqli_real_escape_string($conn, $email);

//sql
$sql = "SELECT * FROM users WHERE EMAIL='$email'";

// execute
$res = mysqli_query($conn, $sql);

// print
if (mysqli_num_rows($res) === 1) {
    $row = mysqli_fetch_assoc($res);
    echo "<table border='2'><tr><td>" . $row['ID'] . "</td><td>"
        . $row['NAME'] . "</td><td>"
        . $row['EMAIL'] . "</td></tr></table>";
}
else{
    echo "<h3> No Records found with ".$email."</h3>";
}
?>