<?php
    $str = "Afnan is a good boy";
    
    /* String function */

    echo "The length of the string is ". strlen($str);
    // '.' is string concatination operator
    echo "<br>";

    echo strtolower($str);
    echo "<br>";

    echo strtoupper($str);
    echo "<br>";

    //to get the position of any char or string --> strpos(varName,char or string)
    echo strpos($str,"good");
    echo "<br>";


    //to reverse a string --> strrev(varName)
    echo strrev($str);
    echo "<br>";

    echo strrev("hey");
    echo "<br>";    
    
    echo str_word_count($str);
    echo "<br>";

    // str_replace(oldString,newString,varName where chane will occur)
    echo str_replace("Afnan","Harry",$str);
    echo "<br>";



?>