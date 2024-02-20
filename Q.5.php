<?php
// Assume the total order amount
$totalOrderAmount = 1200;
if ($totalOrderAmount > 1000) {
    $discountAmount = $totalOrderAmount * 0.1; 
    // 10% discount
    $finalAmount = $totalOrderAmount - $discountAmount;
    echo "Congratulations! You qualify for a discount. Your total order amount is Rs. $finalAmount after a discount of Rs. $discountAmount.";
} else {
    echo "You do not qualify for a discount. Your total order amount is Rs. $totalOrderAmount.";
}
?>
