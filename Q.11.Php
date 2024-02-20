<?php
// Define the correct answers for the quiz
$correct_answers = array(
    1 => 'B', // Question 1's correct answer
    2 => 'A', // Question 2's correct answer
    3 => 'C', // Question 3's correct answer
    // Add more correct answers for additional questions as needed
);

// Function to calculate user's score
function calculateScore($user_answers, $correct_answers) {
    $score = 0;
    foreach ($user_answers as $question_number => $user_answer) {
        // Check if the user's answer matches the correct answer
        if (isset($correct_answers[$question_number]) && $user_answer === $correct_answers[$question_number]) {
            $score++; // Increment score for each correct answer
        }
    }
    return $score;
}

// Example usage:
$user_answers = array(
    1 => 'B', // User's answer for question 1
    2 => 'A', // User's answer for question 2
    3 => 'B', // User's answer for question 3
    // Add more user answers for additional questions as needed
);

$score = calculateScore($user_answers, $correct_answers);
echo "Your score: $score";
?>
