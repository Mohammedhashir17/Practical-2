<?php
// Define a function to find the square root of a number
function findSquareRoot($number) {
    // Check if the number is non-negative
    if ($number < 0) {
        return "Invalid input: Square root of a negative number is undefined in real numbers.";
    }
    
    // Calculate the square root
    $squareRoot = sqrt($number);
    
    // Return the result
    return $squareRoot;
}

// Example usage
$number = 25;
echo "The square root of $number is: " . findSquareRoot($number);
?>
