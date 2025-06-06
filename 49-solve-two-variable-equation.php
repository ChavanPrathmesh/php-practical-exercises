<?php
// Question 49: Solve Two-variable Equation
// Write a PHP program to solve the following system of linear equations:
// ax + by = c
// dx + ey = f
// Print the values of x and y for given a, b, c, d, e, and f.

// ✅ Sample input (you can change these values)
$a = 3;
$b = 2;
$c = 16;
$d = 4;
$e = -3;
$f = 2;

// ✅ Step 1: Calculate the determinant (D)
$D = $a * $e - $b * $d;

// ✅ Check if determinant is not zero (unique solution exists)
if ($D == 0) {
    echo "No unique solution exists.\n";
} else {
    // ✅ Apply Cramer's Rule
    $Dx = $c * $e - $b * $f;
    $Dy = $a * $f - $c * $d;

    $x = $Dx / $D;
    $y = $Dy / $D;

    // ✅ Output the result
    echo "Values of x and y:\n";
    echo round($x, 3) . " " . round($y, 3) . "\n";
}

/*
Sample Output:
For input: a=2, b=3, c=13, d=1, e=-2, f=-1
Output:
Values of x and y:
4.000 1.000

Explanation:
----------------------
We solve:
  ax + by = c
  dx + ey = f

Using Cramer’s Rule:
  D  = a*e - b*d
  Dx = c*e - b*f
  Dy = a*f - c*d

Then:
  x = Dx / D
  y = Dy / D

Flowchart:
----------------------
Input a, b, c, d, e, f
  |
  v
Compute D = ae - bd
  |
  |-- D == 0? --> No unique solution
  |
  v
Compute Dx and Dy
x = Dx / D
y = Dy / D
Print x and y (rounded to 3 decimals)
*/
?>
