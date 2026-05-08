<?php
// Program 3: Word Frequency Counter

function wordFrequencyCounter($sentence) {

    // Convert to lowercase (ignore case sensitivity)
    $sentence = strtolower($sentence);

    // Remove punctuation (ignore punctuation)
    $sentence = preg_replace("/[^\w\s]/", "", $sentence);

    // Split sentence into words
    $words = explode(" ", $sentence);

    $frequency = [];

    // Count word frequency
    foreach ($words as $word) {
        if ($word == "") continue;

        if (isset($frequency[$word])) {
            $frequency[$word]++;
        } else {
            $frequency[$word] = 1;
        }
    }

    // Sort by frequency (descending)
    arsort($frequency);

    // Display result
    echo "<h3>Word Frequency (Descending Order)</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Word</th><th>Count</th></tr>";

    foreach ($frequency as $word => $count) {
        echo "<tr>
                <td>$word</td>
                <td>$count</td>
              </tr>";
    }

    echo "</table>";
}


// --------------------
// Example Input
// --------------------
$sentence = "Hello! This is a test. This test is simple, and this test is useful.";

wordFrequencyCounter($sentence);

?>