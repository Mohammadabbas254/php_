<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>
<body>
    <div class="container">
        first php code
    <?php
    echo "heeelllooo printed using php";
    // single line comment

    /*
    multi
    line
    comment
    */

    // Variables in php

    $var1 = 100;
    $var2 = 50;
    echo "<br>";

    echo $var1;
    echo ' ';

    echo $var2;
    echo ' ';
    echo "<br>";

    echo $var1*$var2;

    // -- Operators in php --
    echo "<h4>Operators in php<h4>";

    // Arthimetic Operators
    echo "<br>";
    echo "The value of var1 + var2 is ";
    echo $var1+$var2;

    echo "<br>";
    echo "The value of var1 - var2 is ";
    echo $var1-$var2;

    echo "<br>";
    echo "The value of var1 * var2 is ";
    echo $var1*$var2;

    echo "<br>";
    echo "The value of var1 / var2 is ";
    echo $var1/$var2;

    // Assignment Operators
    echo "<br>";

    $newVar = $var1;
    echo "The value of newVar is ";
    echo $newVar;
    echo "<br>";

    $newVar += 1;
    echo $newVar;
    echo "<br>";

    // Comparison Operator
    // echo "<h4>Comparison Operator<h4>";
    echo "The value of var1 == var2 is ";
    echo var_dump($var1==$var2);
    echo "<br>";
    echo "The value of var1 != var2 is ";
    echo var_dump($var1!=$var2);
    echo "<br>";
    echo "The value of var1 >= var2 is ";
    echo var_dump($var1>=$var2);
    echo "<br>";
    echo "The value of var1 <= var2 is ";
    echo var_dump($var1<=$var2);
    echo "<br>";
    // Increment/ Devrement Operator
    $var3 =1000;
    $var4 =1000;
    $var3++;
    echo "Increment of var3 : ";
    echo $var3;
    echo "<br>";
    $var4--;
    echo "Decrement of var4 : ";
    echo $var4;

    echo $var3++;
    echo $var3--;
    --$var3;
    ++$var3; 

    // Logical Operator



    ?>
    </div>
</body>
</html>