<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning2</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
.container{
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        <p>Eligibility for voting</p>
    <?php

    // if - else in php
    $age = 17;
    if($age>18){
        echo "Your age is {$age}, you can vote.";
    }
    else if($age==17){
        echo "Your age is {$age}, you have to wait one more year to vote.";
    }
    else{
        echo "You can't.";
    }
    echo "<br>";
    // Arrays in php
    $languages = array("python", "php", "javaScript");
    echo $languages[1];
    echo "<br>";
    echo count($languages);
    echo "<br>";

    // for each loop
    foreach($languages as $lang){
        echo $lang;
        echo "<br> The value from for each loop : ";
    }

    // Loops in php
    $a = 0;

    while ($a <= 10) {
        echo "<br> The value of a is: ";
        echo $a;
        $a++;
    }
    echo "<br>";


    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br> The value of language is: ";
        echo $languages[$a];
        $a++;
    }
    echo "<br>";


    // do while loop
    $a = 0;
    do {
        echo "<br> The value of a from the do while loop is: ";
        echo $a;
        $a++;
    } while ($a < 5);
    echo "<br>";


    // For loop
    for ($a=0; $a < 4; $a++) { 
        echo "<br> The value of a from the for loop is: ";
        echo $a;
    }
    echo "<br>";


    // Functions in php

    function print5(){
        echo "FIVE";
    }
    print5();
    print5();
    print5();
    print5();


    function print_number($number){
        echo "<br> your number is ";
        echo $number;
    }
    
    print_number(6);
    print_number(66);
    print_number(254);


    ?>
    </div>
</body>
</html>