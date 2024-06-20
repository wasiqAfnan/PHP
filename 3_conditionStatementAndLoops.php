<?php
    /* Conditional Statement
    1. If - Else Statement
    2. Switch - Case Statement
    */

   // If - Else Statement

   $age = 15;

    if($age >= 18){
        echo "You can drive a real car";
    }
    elseif($age < 18 && $age >=14){
        echo "You can drive a toy car but in your home only";
    }
    else{
        echo "You can drive a toy car";
    }

    echo "<hr>";

   // Switch - Case Statement

   $rating = 5;

    switch($rating){
        case 1:
            echo "<b>Your rating is</b> ⭐";
            break;
        case 2:
            echo "<b>Your rating is</b> ⭐⭐";
            break;
        case 3:
            echo "<b>Your rating is</b> ⭐⭐⭐";
            break;
        case 4:
            echo "<b>Your rating is</b> ⭐⭐⭐⭐";
            break;
        case 5:
            echo "<b>Your rating is</b> ⭐⭐⭐⭐⭐";
            break;
        default:
            echo "Please choose between 1 - 5";
            break;
    }

    echo "<hr>";

    /* Loops 
    1) While Loop
    2) Do - While Loop
    3) For Loop
    4) ForEach Loop
    */

    // While Loop

    $i=1;
    echo "<h3>Print using While Loop</h3>";
    while($i<=10){
        echo $i;
        echo "<br>";
        $i++;
    }

    // Do - While Loop

    echo "<h3>Print using Do - While Loop</h3>";
    $i = 1;
    do{
        echo $i;
        echo "<br>";
        $i++;
    }while($i<=10);


    // For Loop

    echo "<h3>Print using For Loop</h3>";
    for ($i=1; $i < 11; $i++) { 
        echo $i;
        echo "<br>";
    }

    // ForEach Loop

    $myList = array("Ram","Motherboard","Keyboard","Processor","Mouse","HardDisk");
    echo "<h3>Print using ForEach Loop</h3>";

    foreach ($myList as $list){
        echo $list;
        echo "<br>";
    }

    /* syntax of for each loop

            foreach ($variableName as $value) {
            # code...
    }
    */
?>