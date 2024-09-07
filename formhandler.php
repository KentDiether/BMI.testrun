<?php
//  var_dump($_SERVER["REQUEST_METHOD"]);

if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]) ;
    $lastname = htmlspecialchars($_POST["lastname"]) ;
    $height = htmlspecialchars($_POST["height"]) ;
    $weight = htmlspecialchars($_POST["weight"]) ;


    $bmi = $weight/($height*$height);

    echo"Hello "."".$firstname ." ".$lastname."<br>";

    if ($bmi < 18.5) {
        $category = "Underweight";
    } elseif ($bmi < 24.9) {
        $category = "Normal weight";
    } elseif ($bmi < 29.9) {
        $category = "Overweight";
    } else {
        $category = "Obesity";
    }


    echo "Your BMI is: " . round($bmi, 2) . "<br>";
    echo "Category: " . $category;


}