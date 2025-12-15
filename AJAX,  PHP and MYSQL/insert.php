<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "User saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
