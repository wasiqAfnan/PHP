<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "db2";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);

    if(!$conn){
        die("Failed to connect to server". mysqli_error($conn));
    }
    else{
        echo "Server connection successful";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Records</title>
</head>
<body>
    <br><br>
    <?php  
        $query = "SELECT * FROM `mytable`;";
        $i=1;
        $test = mysqli_query($conn,$query) or die("Failed");
    ?>
    <table>
        <tr>
            <th>Sl.no<th>
            <th>Name<th>
            <th>Phone<th>
        </tr>

        <tr>
            <td><?php $row = mysqli_fetch_assoc($test);
                    echo $i++;?><td>
            <td><?php echo $row['name'];?><td>
            <td><?php echo $row['phone'];?><td>
        </tr>

        <tr>
            <td><?php $row = mysqli_fetch_assoc($test);
                    echo $i++;?><td>
            <td><?php echo $row['name'];?><td>
            <td><?php echo $row['phone'];?><td>
        </tr>

        <tr>
            <td><?php $row = mysqli_fetch_assoc($test);
                    echo $i++;?><td>
            <td><?php echo $row['name'];?><td>
            <td><?php echo $row['phone'];?><td>
        </tr>

        <tr>
            <td><?php $row = mysqli_fetch_assoc($test);
                    echo $i++;?><td>
            <td><?php echo $row['name'];?><td>
            <td><?php echo $row['phone'];?><td>
        </tr>
</body>
</html>