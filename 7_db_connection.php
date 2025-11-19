<?php

    /* There is 2 methods to connect to database

    1) Using mysqli Procedural approach
    2) Using Object Oriented approach

    */

    // 1) Using mysqli extension

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "mydb";

    $conn = mysqli_connect($serverName,$userName,$password,$dbName);
    if(!$conn){
        die("Db connection failed");
    }
    echo "Connection Establish succesfully with database '$dbName' using normal approach\n";

    mysqli_close($conn);// closing connection

    /* 2) Using Object Oriented approach

     here $conn is an object of mysqli class */

    $conn = new mysqli($serverName,$userName,$password,$dbName);

    if($conn -> error ){
        die("Db connection failed".mysqli_connect_error());
    }
    echo "Connection Establish succesfully with database '$dbName'  using object oriented approach";

    $conn -> close(); // closing connection
?>