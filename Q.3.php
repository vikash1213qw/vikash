<?php
function determineFitnessLevel($steps) {
    if ($steps < 5000) {
        return 'Beginner';
    } elseif ($steps >= 5000 && $steps <= 10000) {
        return 'Intermediate';
    } else {
        return 'Advanced';
    }
}

// Example usage:
$stepsWalked = 7500; // You can change this value to test different scenarios
$fitnessLevel = determineFitnessLevel($stepsWalked);
echo "Number of steps walked: $stepsWalked\n";
echo "Fitness level: $fitnessLevel";
?>
