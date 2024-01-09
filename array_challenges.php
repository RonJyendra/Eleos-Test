<?php
/**
 * Question:
 * Create a PHP script that takes an array of complex data structures (nested arrays, objects, mixed data types) and performs the following tasks:
 * 1. Flatten the array, removing any nested structures and preserving only the values.
 * 2. Calculate the sum of numeric values within the flattened array.
 * 3. Find and return the longest string within the array.
 */


$data = [
    'name' => 'John Doe',
    'age' => 30,
    'address' => [
        'street' => 'Jalan Kerinchi',
        'city' => 'Kuala Lumpur',
        'country' => 'MALAYSIA'
    ],
    'scores' => [95, 80, 75, 88,100],
    'grades' => [
        'math' => 'A',
        'english' => 'B',
        'history' => 'A-',
        'programming' => "A+"
    ],
    'contacts' => [
        'email' => 'john@example.com',
        'phone' => '555-1234'
    ]
];

$array = array();
$sum = 0;
$longest_str = "";

// Perform the tasks goes here

// task 1 -  convert the array to 1d array
foreach ($data as $dt){
    if( !is_array($dt) ) {
        array_push($array,$dt);
    }else {
        foreach($dt as $val){
            array_push($array,$val);
        }
    }
}

// task 2  - sum = 468. "555-1234" is not considered 

foreach($array as $elem){
    if(is_numeric($elem)){
        $sum+= $elem;
    }
}

// task 3 - longest string is "john@example.com"

foreach($array as $str){
    if (is_string($str)){
        if(strlen($str) > strlen($longest_str)){
            // echo "$str <br/>";
            $longest_str = $str;
        }
    }
} 

// Output the results
echo "Flattened array: ". json_encode($array) ."</br>"; // Output the flattened array
echo "Sum of numeric values:  $sum <br/>"; // Output the sum of numeric values
echo "Longest string:  $longest_str"; // Output the longest string
?>
