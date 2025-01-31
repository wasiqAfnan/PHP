<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "mydb";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if (!$conn) {
        die("Failed to connect to server" . mysqli_connect_error());
    } else {
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
        $i = 1;
        $test = mysqli_query($conn, $query) or exit("Failed");
    ?>
    <table>
        <tr>
            <th>Sl.no</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($test)) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <?php if ($i === 1) { echo "<p>No records found.</p>"; } ?>
</body>
</html>
