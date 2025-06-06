<?php
// Question 38: Email Validation
// Write a PHP program to validate an email address.

// Sample email addresses for testing
$emails = [
    "user@example.com",
    "invalid-email@",
    "test.user@domain.co",
    "bad-email@domain,com",
    "another.user@domain.org"
];

// Loop through each email and validate
foreach ($emails as $email) {
    // Validate email using PHP's built-in filter
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "'$email' is a valid email address.\n";
    } else {
        echo "'$email' is NOT a valid email address.\n";
    }
}

/*
Sample Output:
'user@example.com' is a valid email address.
'invalid-email@' is NOT a valid email address.
'test.user@domain.co' is a valid email address.
'bad-email@domain,com' is NOT a valid email address.
'another.user@domain.org' is a valid email address.

Explanation:
----------------------
🔹 Email validation is done here using PHP's FILTER_VALIDATE_EMAIL filter.
🔹 This filter checks if the email is in a proper format (basic validation).
🔹 It does not guarantee the email exists or meets RFC5321 fully, but works for most common cases.
🔹 The program tests multiple emails and outputs which are valid or invalid.
*/
?>
