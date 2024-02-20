<?php
// Simulate the user's account type (you can change this value to test different scenarios)
$userAccountType = "premium";

// Display different messages based on the user's account type
if ($userAccountType === "basic") {
    echo "Welcome to your basic user profile page!";
} elseif ($userAccountType === "premium") {
    echo "Welcome to your premium user profile page!";
} else {
    echo "Unknown account type. Please contact support for assistance.";
}
?>