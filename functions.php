<?php

// types of functions
// parametrless/argumentless function (with no argument)
// parameterized function (with argument)
// function that returns a value
// function that doesn't return a value

// function getNumber($searchValue)
// {
//     for($i = 0; $i<= 5; $i++)
//     {
//         if($i == $searchValue){
//             continue;
//         }
//         echo $i .  "<br/>";
//     }
// }


// getNumber(3);

// function checkAge($age){
//     if($age >= 18)
//     {
//         echo "You can make your CNIC";
//         echo "Come with your father or any relative";
//     }
        
//     else
//         echo "Sorry! You can't make your CNIC";
// }

// checkAge(44);

// function checknum($num){
//     if ($num >=0)
//     echo "positive number";

//     else
//     echo "negative number";
// }

// checknum(-2);

// $tablenum=5;


// for ($i = 1; $i <= 10; $i++)
// {
//     $result = $i * $tablenum;
//     echo "$tablenum x $i = $result <br/>";
// }

// function table($tablenum, $var, $stop){
//     for($i = $var; $i <= $stop ; $i++){
//         $result= $i * $tablenum;
//         echo "$tablenum x $i = $result <br/>";
        
//     }
// }

// table(3,6,8);

function add($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}


$myans = add(3, 5);

echo $myans;
?>