<?php
include "config.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

echo json_encode($rows);
?>
