<?php
// Question 37: Sum of Primes Below 100
// Write a PHP program to compute the sum of the prime numbers less than 100.

// ✅ Function to check if a number is prime
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// ✅ Loop through numbers below 100 and collect primes
$sum = 0;
$primes = [];

for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        $primes[] = $i;
        $sum += $i;
    }
}

// ✅ Output
echo "Prime numbers below 100:\n" . implode(', ', $primes) . "\n";
echo "Total number of primes: " . count($primes) . "\n";
echo "Sum of all prime numbers below 100: $sum\n";

/*
Sample Output:
Prime numbers below 100:
2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97
Total number of primes: 25
Sum of all prime numbers below 100: 1060

Explanation:
----------------------
🔹 A prime number is a number greater than 1 that has no positive divisors other than 1 and itself.
🔹 To check if a number is prime, we try dividing it by all numbers from 2 to √n. If none divide it evenly, it's a prime.
🔹 We loop from 2 to 99, check each number with isPrime(), and if true, add to sum and collect for output.
🔹 This code does not use any PHP built-in prime-checking function — it's custom logic, suitable for interviews.

Why use √n (square root) in the prime check?
---------------------------------------------
🔸 To check if a number n is prime, you only need to test divisors up to the square root of n.
🔸 This is because if n is divisible by some number larger than √n, it will also have a corresponding divisor smaller than √n.
🔸 Checking beyond √n is unnecessary and slower.
🔸 Using √n as the limit optimizes the code by reducing the number of checks needed.
*/
?>
