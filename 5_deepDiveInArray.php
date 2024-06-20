<?php
    /* There Are 3 types of array

    1) Indexed or Numerical Array
    2) Associative Array
    3) Multi Dimensional Array
    */

    /* Indexed or Numerical Array */

    function printArray($arr){

        for ($i=0; $i < count($arr); $i++) { 
            echo $arr[$i];
            echo "<br>";
        }
    }
    $arr = [25,64,89,78];
    // $arr = array(25,64,89,78); //We can also declare array like this
    $name = ["Rohan","Bikash","Binod"];

    printArray($arr);   // Calling printArray() function
    printArray($name);  // Calling printArray() function

    echo "<hr>";

    /* Associative Array */

    $parts = array("cpu" => "For processing",
                    "ram" => "For fast memory",
                    "hdd" => "For storing",
                    "keyboard" => "For input");

    // Printing the content of Associative array
    foreach ($parts as $key => $value) {
        echo "$key is needed $value<br>";
    }

    echo "<hr>";

    /* Multi Dimensional Array */

    // creating a Multi Dimensional Array

    $matrix = array(array(1,2,3),
                    array(4,5,6),
                    array(7,8,9));
    
    // printing MultiDim array

    /* in order to get 1 we have to give row and column so we will need nested for loop */

    for ($i = 0; $i < count($matrix); $i++) { 
        for ($j = 0; $j < count($matrix[$i]); $j++) { 
            echo "At position $i $j value is ". $matrix[$i][$j];
            echo "<br>";
        }
    }
    echo "<br>";
    // Printing in Matrix form

    for ($i = 0; $i < count($matrix); $i++) { 

        for ($j = 0; $j < count($matrix[$i]); $j++) { 
            echo $matrix[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
?>