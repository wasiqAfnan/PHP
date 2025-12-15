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

// SQl query
$sql = "select * from users;";

// executing query
$res = $conn->query($sql);

//printing result
if($res->num_rows >= 1){
    while($row = $res->fetch_assoc()){
        echo "<table border='2'><tr><td>".$row['ID']."</td><td>"
        .$row['NAME']."</td><td>"
        .$row['EMAIL']."</td></tr></table>";
    }
}

// closing connection
$conn->close();
?>