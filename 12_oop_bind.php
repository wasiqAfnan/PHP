<?php
$server = "localhost";
$user = "root";
$pw = "";
$db = "users_db";

// connecting to db
$conn = new mysqli($server, $user, $pw, $db);

// checking connection established or not
if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}

// sql
$sql = "SELECT * FROM users where id = (?);";

// prepare
$stmt = $conn->prepare($sql);

// bind params
$id = 4;
$stmt->bind_param("i", $id);

// execute
$stmt->execute();

// fetch result
$res = $stmt->get_result();

// print
if ($res->num_rows === 1) {
    $row = $res->fetch_assoc();
    echo "<table border='2'><tr><td>" . $row['ID'] . "</td><td>"
        . $row['NAME'] . "</td><td>"
        . $row['EMAIL'] . "</td></tr></table>";
}
