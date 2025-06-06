<?php
// Question 40: Calculate Modulus Without %
// Write a PHP program to calculate the modulus of two given integers without using the % operator.

// ✅ Function to calculate modulus using subtraction
function modulus($dividend, $divisor) {
    if ($divisor == 0) {
        return "Error: Division by zero.";
    }

    // Ensure dividend and divisor are positive for simplicity
    $dividend = abs($dividend);
    $divisor = abs($divisor);

    while ($dividend >= $divisor) {
        $dividend -= $divisor;
    }

    return $dividend;
}

// ✅ Test values
$dividend = 29;
$divisor = 5;
$result = modulus($dividend, $divisor);

// ✅ Output
echo "Modulus of $dividend and $divisor without using % operator is: $result\n";

/*
Sample Output:
Modulus of 29 and 5 without using % operator is: 4

Explanation:
----------------------
🔹 The modulus operation (%) returns the remainder of the division of two numbers.
🔹 Instead of using the % operator, this code repeatedly subtracts the divisor from the dividend.
🔹 When the dividend becomes less than the divisor, the remaining value is the modulus (remainder).
🔹 This method works correctly for positive integers.
🔹 We use abs() to handle possible negative inputs simply, but full support for negatives requires extra logic.

Why not use %?
--------------
🔸 Sometimes in programming interviews or constrained environments, you may be asked to implement arithmetic operations without built-in operators.
🔸 Understanding how modulus works at a fundamental level helps in algorithm design and low-level programming.
*/
?>
