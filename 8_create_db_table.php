<?php
    // connecting to server
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    

    $conn = mysqli_connect($serverName,$userName,$password);

    if(!$conn){
        echo "failed to connect to the server".mysqli_conect_error();
    }
    echo "Succesfully connected to the server <br>";

    // creating a database

    // $query = "CREATE DATABASE db2;";
    // $test = mysqli_query($conn,$query);

    // if($test){
    //     echo "Creating of db is succesful";
    // }
    // else{
    //     echo "Failed to craete a db" . mysqli_error($conn);
    // }

    // Deleting a database

    // $query = "DROP DATABASE db2;";
    // $test = mysqli_query($conn,$query);

    // if($test){
    //     echo "Deletion of db is succesful";
    // }
    // else{
    //     echo "Failed to delete db" . mysqli_error($conn);
    // }

    /* Creating table */
    
    // selecting databse
    
    mysqli_select_db($conn,"db2") or die ("Failed to connect");

    $query = "CREATE TABLE `mytable` (`sno` INT NOT NULL AUTO_INCREMENT,`phone` INT NOT NULL , PRIMARY KEY (sno)); ";

    $test = mysqli_query($conn,$query);

    if($test){
        echo "creation of table is succesful";
    }
    else{
        echo "Failed to create table" . mysqli_error($conn);
    }

?>