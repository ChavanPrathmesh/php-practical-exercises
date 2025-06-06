<?php
// Question 35: Write a PHP program to remove duplicates from a sorted list.

// ----------------------
// ✅ 1. Using built-in function
// ----------------------
$input1 = [1, 1, 2, 2, 3, 4, 5, 5];
$output1 = array_values(array_unique($input1));

echo "Using array_unique:\n";
echo "Input: (" . implode(',', $input1) . ")\n";
echo "Output: (" . implode(',', $output1) . ")\n\n";

// ----------------------
// 🔁 2. Without using array_unique (manual method)
// ----------------------
$input2 = [1, 1, 2, 2, 3, 4, 5, 5];
$output2 = [];

$prev = null;
foreach ($input2 as $val) {
    if ($val !== $prev) {
        $output2[] = $val;
        $prev = $val;
    }
}

echo "Without using array_unique:\n";
echo "Input: (" . implode(',', $input2) . ")\n";
echo "Output: (" . implode(',', $output2) . ")\n";

/*
Sample Output:
Using array_unique:
Input: (1,1,2,2,3,4,5,5)
Output: (1,2,3,4,5)

Without using array_unique:
Input: (1,1,2,2,3,4,5,5)
Output: (1,2,3,4,5)

Explanation:
- ✅ Method 1 uses array_unique() to remove duplicates automatically.
- 🔁 Method 2 loops through and checks if the current value is different from the previous one to avoid duplicates.
- Assumes the input is a **sorted list**.
*/
?>
