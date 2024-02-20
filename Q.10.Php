<?php
// Function to truncate article title to 50 characters
function truncateTitle($title) {
    // Check if title length exceeds 50 characters
    if (strlen($title) > 50) {
        // Truncate title to 50 characters
        $truncated_title = substr($title, 0, 50);
        return $truncated_title;
    } else {
        return $title; // Title doesn't need truncation
    }
}

// Example usage:
$article_title = "This is a very long article title that exceeds the 50 characters limit";
$truncated_title = truncateTitle($article_title);
echo "Original Title: $article_title <br>";
echo "Truncated Title: $truncated_title";
?>
