<?php
// Question 39: Get File Size
// Write a PHP program to get the size of a file.

// Specify the file name (make sure this file exists in the same directory)
$filename = 'sample.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Get the file size in bytes
    $filesize = filesize($filename);

    echo "The size of the file '$filename' is $filesize bytes.\n";
} else {
    echo "File '$filename' does not exist.\n";
}

/*
Sample Output (if sample.txt is 1234 bytes):
The size of the file 'sample.txt' is 1234 bytes.

Explanation:
----------------------
🔹 The PHP function filesize() returns the size of the specified file in bytes.
🔹 Always check if the file exists before calling filesize() to avoid errors.
🔹 The file size is useful for validating uploads, downloads, or displaying file information.
*/
?>
