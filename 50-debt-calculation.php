<?php
// Question 50: Debt Calculation in n Months
// Write a PHP program to compute the amount of the debt in n months.
// The borrowing amount is $100,000 and the loan adds 5% interest of the debt 
// and rounds it to the nearest 1,000 above month by month.

// ✅ Sample input (you can change the value of $n)
$n = 24; // Number of months

// ✅ Initial debt
$debt = 100000;

// ✅ Loop for each month
for ($i = 0; $i < $n; $i++) {
    $debt *= 1.05; // Add 5% interest
    $debt = ceil($debt / 1000) * 1000; // Round up to nearest 1,000
}

// ✅ Output
echo "Amount of debt after $n months: $debt\n";

/*
Sample Output:
Input: n = 24
Amount of debt after 24 months: 137000

Explanation:
----------------------
🔹 Start with $100,000 debt.
🔹 Each month:
   - Increase by 5% → debt *= 1.05
   - Round UP to nearest 1,000 → ceil(debt / 1000) * 1000

Example for first 3 months:
Month 1: 100000 * 1.05 = 105000 → Already rounded
Month 2: 105000 * 1.05 = 110250 → Rounded to 111000
Month 3: 111000 * 1.05 = 116550 → Rounded to 117000

Flowchart:
----------------------
Input n
↓
Set debt = 100000
↓
Repeat n times:
   debt = debt * 1.05
   debt = ceil(debt / 1000) * 1000
↓
Output debt
*/
?>
