<?php
    $str = "This is a string";
    echo $str;
    echo "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . " thankyou <br>";
    // echo $lenn;
    echo "The length of words in this string is ". str_word_count($str) . " thankyou <br>";
    echo "The reverse string is ". strrev($str)."<br>";
    echo "The position of a in the string is ". strpos($str, "a")."<br>";
    echo "The replaced string is ". str_replace("a", "at", $str)."<br>";

?>