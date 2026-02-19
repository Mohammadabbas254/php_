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
    define('PI', 3.14);
    echo "<br>";
    echo "<h4>Printing in php</h4>";
    echo "heeelllooo printed using php";
    // single line comment

    /*
    multi
    line
    comment
    */

    // Variables in php
    echo "<h4>Variables in php</h4>";

    $var1 = 100;
    $var2 = 50;
    // echo "<br>";

    echo $var1;
    echo ' ';

    echo $var2;
    echo ' ';
    echo "<br>";

    echo $var1*$var2;

    // -- Operators in php --
    echo "<h4>Operators in php</h4>";

    // Arthimetic Operators
    echo "<h5>Arthimetic Operators in php</h5>";

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
    echo "<h5>Assignment Operators in php</h5>";

    echo "<br>";

    $newVar = $var1;
    echo "The value of newVar is ";
    echo $newVar;
    echo "<br>";

    $newVar += 1;
    echo $newVar;
    echo "<br>";

    // Comparison Operator
    echo "<h5>Comparison Operators in php</h5>";

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
    echo "<h5>Increment/ Devrement Operators in php</h5>";
    
    $var3 =1000;
    $var4 =1000;
    $var3++;
    echo "Increment of var3 : ";
    echo $var3;
    echo "<br>";
    $var4--;
    echo "Decrement of var4 : ";
    echo $var4;
    echo "<br>";
    echo $var3++;
    echo $var3--;
    --$var3;
    ++$var3; 

    // Logical Operator
    echo "<h5>Logical Operators in php</h5>";

    // and (&&)
    // or (||)
    // xor
    // !
    echo "&&";
    echo "<br>";
    $myVar = (true and true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false and true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false and false);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (true and false);
    echo var_dump($myVar);
    echo "<br>";



    //OR 
    echo "||";

    echo "<br>";
    $myVar = (true or true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false or true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false or false);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (true or false);
    echo var_dump($myVar);
    echo "<br>";

    //XOR
    echo "XOR";

    echo "<br>";
    $myVar = (true xor true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false xor true);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (false xor false);
    echo var_dump($myVar);

    echo "<br>";
    $myVar = (true xor false);
    echo var_dump($myVar);


    ?>

    <?php
        //Data types in php

        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        echo "<br> <h4>Data types in php</h4>";
        $var = "This is the string in php";
        echo var_dump($var);
        echo "<br>";
        $var = 75;
        echo var_dump($var);
        echo "<br>";
        $var = 75.32443;
        echo var_dump($var);
        echo "<br>";
        $var = true;
        echo var_dump($var);
        echo "<br>";
        echo "constant in php (defined in top of the code) ";
        echo PI;


    ?>
    </div>
</body>
</html>