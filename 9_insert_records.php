<?php
    // conencting to database
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "mydb";
    

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        echo "failed to connect to the server".mysqli_conect_error();
    }
    echo "Succesfully connected to the server <br>";

    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO `mytable` (`name`, `phone`) VALUES ('$name','$phone');";
        $test = mysqli_query($conn,$query);
        if($test){
            echo "Succesfully inserted";
        }
        else{
            echo "Not Inserted Succesfully".mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Records</title>
</head>
<body>
    <form action="9_insert_records.php" method ="post" enctype="multipart/form-data">
        <label> name:</label>
        <input type = "text" name = "name"><br><br>
        <label> Phone:</label>
        <input type = "number" name = "phone"><br><br>
        <input type = "submit" name = "sub">
    </form>
</body>
</html>
