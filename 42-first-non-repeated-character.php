<?php
// Question 42: First Non-Repeated Character
// Write a PHP program to find the first non-repeated character in a given string.

// Function to find the first non-repeated character in a string
function firstNonRepeatedChar($str) {
    // Convert string to array of characters
    $chars = str_split($str);

    // Create an associative array to count occurrences of each character
    $counts = [];

    // Count the frequency of each character
    foreach ($chars as $char) {
        $charLower = strtolower($char); // Case insensitive counting
        if (isset($counts[$charLower])) {
            $counts[$charLower]++;
        } else {
            $counts[$charLower] = 1;
        }
    }

    // Find the first character with count 1 (non-repeated)
    foreach ($chars as $char) {
        if ($counts[strtolower($char)] == 1) {
            return $char; // Return the first non-repeated character preserving case
        }
    }

    // If no non-repeated character found, return null
    return null;
}

// Sample Inputs
$input1 = "Green";
$input2 = "abcdea";

// Outputs
echo "Input: $input1\nOutput: " . firstNonRepeatedChar($input1) . "\n\n";
echo "Input: $input2\nOutput: " . firstNonRepeatedChar($input2) . "\n";

/*
Sample Output:
Input: Green
Output: G

Input: abcdea
Output: b

Explanation:
----------------------
🔹 We convert the input string into an array of characters for easy traversal.
🔹 We then count the occurrences of each character in a case-insensitive manner, storing counts in an associative array.
🔹 After counting, we iterate again through the original characters to find the first character whose count is exactly 1.
🔹 The function returns that character, preserving its original case.
🔹 If all characters are repeated, the function returns null.
🔹 This approach ensures the first unique character is identified efficiently in O(n) time.

Logic:
----------------------
🔸 Use a frequency count hash map (associative array) to count all character occurrences.
🔸 This helps in quick lookups to identify if a character is repeated or unique.
🔸 A second pass over the characters keeps the original order to find the first unique one.
🔸 Case-insensitive counting helps avoid missing repeats of the same letter in different cases.
*/
?>
