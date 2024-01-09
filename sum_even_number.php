<?php

/**
 * Question:
 * Create a PHP script that takes an array of integers and returns the sum of all even numbers in the array.
 */


$numbers = [2, 5, 8, 10, 15, 12, 7, 3, 6];
// 2 + 8 + 10 + 12 + 6 = 38
$sum = 0;

// Calculate the sum of even numbers goes here
for($i = 0; $i < sizeof($numbers); $i++ ){
    if(fmod($numbers[$i],2) == 0 ){
        // echo $numbers[$i] . "<br/>";
        $sum += $numbers[$i];
    }
    
}

// Output the result
echo "Sum of even numbers: $sum";
?>
