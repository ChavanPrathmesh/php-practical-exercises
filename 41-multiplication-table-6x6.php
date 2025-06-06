<?php
// Question 41: Multiplication Table 6x6
// Write a PHP program to print out the multiplication table up to 6x6.

// ✅ Loop through rows and columns to generate multiplication table
echo "Multiplication Table (6 x 6):\n\n";

for ($row = 1; $row <= 6; $row++) {
    for ($col = 1; $col <= 6; $col++) {
        // Print product with padding for alignment
        printf("%4d", $row * $col);
    }
    echo "\n"; // New line after each row
}

/*
Sample Output:
Multiplication Table (6 x 6):

   1   2   3   4   5   6
   2   4   6   8  10  12
   3   6   9  12  15  18
   4   8  12  16  20  24
   5  10  15  20  25  30
   6  12  18  24  30  36

Explanation:
----------------------
🔹 The logic involves two nested loops:
   - Outer loop ($row) runs from 1 to 6 representing each row of the table.
   - Inner loop ($col) runs from 1 to 6 representing each column within a row.
🔹 For every combination of $row and $col, multiply them to get the product.
🔹 The product is printed with fixed width formatting (4 spaces) using printf() to keep columns aligned.
🔹 After completing each inner loop iteration (one row), a newline character is printed to move to the next row.
🔹 This approach systematically covers every multiplication fact from 1x1 up to 6x6.
*/
?>
