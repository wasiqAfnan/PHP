<?php
    echo "hey this is my first php"; // for printing
    echo "<br>"; //to add a line

    $i=5; // declaring a variable no need to mention data type
    $str="this is afnan";
    echo "$str and my roll is $i"; // concatinating while printing

    /* php is case sensitive */

    $amount = 5666; 
    $Amount = 5666.20;
    echo "$amount $Amount"; // amount and Amount are different
    echo "<hr>";


    /* Data types */

    echo "Data types";
    echo "<br>";

    // Integer
    $amount = 5666; 
    echo "$amount";
    echo "<br>";


    // Float
    $amount = 5666.589; 
    echo "$amount";
    echo "<br>";

    // Bool
    $isTrue = true; 
    $isFalse = false; 
    
    // var_dump is a funtion that prints both value and type of the variable
    echo var_dump($isTrue);
    echo "<br>";
    echo var_dump($isFalse);
    echo "<br>";

    //String
    $str="this is afnan";
    echo "my name is $str";
    echo "<br>";

    // object is also a data type we will look into it later

    // Array
    
    $friends = array("Rohan","faraz","mukaddas","safiullah");
    echo var_dump($friends);// printing in one line

    echo "<br>";
    echo "$friends[0]";
    echo "<br>";
    echo "$friends[1]";
    echo "<br>";
    echo "$friends[2]";
    echo "<br>";
    echo "$friends[3]";
    echo "<br>";

    //Null
    $name = NULL;
    echo var_dump($name);

?>