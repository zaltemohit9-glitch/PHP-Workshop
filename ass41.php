<?php

// Associative array (student => marks)
$students = array(
    "Krushna" => 97,
    "Mohit" => 95,
    "Khushal" => 76,
    "Sager" => 87,
    "Avinash" => 68
);

// Display student marks
echo "<h2>Student Marks</h2>";

foreach ($students as $name => $marks) {
    echo $name . " : " . $marks . "<br>";
}

// Calculate total marks
$total = array_sum($students);

echo "<h3>Total Marks: $total</h3>";

// Calculate average
$average = $total / count($students);

echo "<h3>Average Marks: $average</h3>";

// Highest scorer
$highestMarks = max($students);
$highestStudent = array_search($highestMarks, $students);

echo "<h3>Highest Scorer: $highestStudent ($highestMarks)</h3>";

// Lowest scorer
$lowestMarks = min($students);
$lowestStudent = array_search($lowestMarks, $students);

echo "<h3>Lowest Scorer: $lowestStudent ($lowestMarks)</h3>";

// Sort in descending order while keeping names
arsort($students);

echo "<h2>Students in Descending Order</h2>";

foreach ($students as $name => $marks) {
    echo $name . " : " . $marks . "<br>";
}

?>