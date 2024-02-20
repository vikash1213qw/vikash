<?php
// Simulate the traffic light color (you can change this value to test different scenarios)
$trafficLightColor = "Red";

// Check the current color of the traffic light and log the appropriate message
if ($trafficLightColor === "Green") {
    echo "Green - Go";
} elseif ($trafficLightColor === "Yellow") {
    echo "Yellow - Slow down";
} elseif ($trafficLightColor === "Red") {
    echo "Red - Stop";
} else {
    echo "Invalid traffic light color";
}
?>
