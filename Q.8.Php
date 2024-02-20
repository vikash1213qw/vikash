<?php
// Function to assign grade based on score
function assignGrade($score) {
    if ($score >= 90) {
        return "Grade A";
    } elseif ($score >= 80) {
        return "Grade B";
    } elseif ($score >= 70) {
        return "Grade C";
    } elseif ($score >= 60) {
        return "Grade D";
    } else {
        return "Grade F";
    }
}

// Example usage:
$score = 75; // You can replace this with any score
$grade = assignGrade($score);
echo "Score: $score, Grade: $grade";
?>
