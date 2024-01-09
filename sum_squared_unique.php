<?php
/**
 * Question:
 * Create a PHP script that takes an array of integers, removes duplicate values, and returns the sum of the squared unique numbers.
 */


$numbers = [2, 5, 8, 10, 5, 12, 7, 3, 8, 6];
// 2 + 5 + 8 + 10 + 12 + 7 + 3 + 6 = 53
// 4 + 25 + 64 + 100 + 144 + 49 + 9 + 36 = 431

$sum = 0;


// Remove duplicates and calculate the sum of squared unique numbers goes here
foreach( array_unique($numbers) as $num){
    $sum += pow($num,2);
}

// Output the result
echo "Sum of squared unique numbers: $sum";
?>
