<?php
    /* there are 4 types of operators in php

    1) Arithmetic Operators
    2) Condition Operators
    3) Assignment Operators
    4) Logical Operators

    */

    // Arithmetic Operators

    $num1 = 2;
    $num2 = 3;

    echo "Arithmetic Operators"."<br>";
    echo ($num1)." + ".($num2)." = ".($num1 + $num2)."<br>";    // Addition
    echo ($num1)." - ".($num2)." = ".($num1 - $num2)."<br>";    // Subtraction
    echo ($num1)." * ".($num2)." = ".($num1 * $num2)."<br>";    // Multiplication
    echo ($num1)." / ".($num2)." = ".($num1 / $num2)."<br>";    // Division
    echo ($num1)." % ".($num2)." = ".($num1 % $num2)."<br>";    // Modulo
    echo ($num1)." ** ".($num2)." = ".($num1 ** $num2)."<br>";  // Power

    echo "<hr>";
    // Conditional Operators

    $num1 = 2;
    $num2 = 3;

    echo "Conditional Operators"."<br>";
    echo $num1." > ".$num2." = ";
    echo var_dump($num1 > $num2)."<br>"; // greater than

    echo $num1." >= ".$num2." = ";
    echo var_dump($num1 >= $num2)."<br>"; // greater than eqaulto

    echo $num1." < ".$num2." = ";
    echo var_dump($num1 < $num2)."<br>"; // less than
    
    echo $num1." <= ".$num2." = ";
    echo var_dump($num1 <= $num2)."<br>"; // less than eqaulto
    
    echo $num1." <> ".$num2." = ";
    echo var_dump($num1 <> $num2)."<br>"; // not eqaulto

    echo $num1." == ".$num2." = ";  
    echo var_dump($num1 == $num2)."<br>"; // eqaulto eqaulto
    
    
    echo "<hr>";
    // Assignment Operators

    $num1 = 2; // Assign 2 in num1
    $num2 = 3;

    echo "Assignment Operators"."<br>";
    echo ($num1)." += ".($num2)." Result : ".($num1 += $num2)."<br>";
    echo ($num1)." -= ".($num2)." Result : ".($num1 -= $num2)."<br>";
    echo ($num1)." *= ".($num2)." Result : ".($num1 *= $num2)."<br>";
    echo ($num1)." /= ".($num2)." Result : ".($num1 /= $num2)."<br>";

    echo "<hr>";
    // Logical Operators
    
    $num1 = true;
    $num2 = false;

    echo "Logical Operators"."<br>";
    echo var_dump($num1);
    echo " and ";
    echo var_dump($num2)." = ";
    echo var_dump($num1 and $num2)."<br>";

    echo var_dump($num1);
    echo " && ";
    echo var_dump($num2)." = ";
    echo var_dump($num1 && $num2)."<br>";

    echo var_dump($num1);
    echo " or ";
    echo var_dump($num2)." = ";
    echo var_dump($num1 or $num2)."<br>";

    echo var_dump($num1);
    echo " || ";
    echo var_dump($num2)." = ";
    echo var_dump($num1 || $num2)."<br>";

    // echo var_dump($num1)."<br>";
    echo "Not of ";
    echo var_dump($num1);
    echo "is ";
    echo var_dump(!$num1);





?>