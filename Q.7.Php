<?php
function getWeatherRecommendation($temperature) {
    if ($temperature > 25) {
        return "It's a sunny day!";
    } else {
        return "Consider taking an umbrella";
    }
}

// Example usage:
$currentTemperature = 30; // Assuming the current temperature is 30°C
$recommendation = getWeatherRecommendation($currentTemperature);
echo $recommendation;
?>