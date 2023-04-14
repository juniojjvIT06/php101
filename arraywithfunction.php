<?php

// Define an array of numbers
$numbers = array(2, 4, 6, 8, 10);

// Define a function to calculate the sum of an array of numbers
function calculateSum($array) {
  $sum = 0;
  foreach ($array as $num) {
    $sum += $num;
  }
  return $sum;
}

// Call the function with the numbers array as an argument and display the result
echo "The sum of the numbers is: " . calculateSum($numbers);

?>