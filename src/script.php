<?php
session_start();
if (!isset($_SESSION['results'])) {
    $_SESSION['results'] = array();
}

$x = $_POST['x'];
$y = $_POST['y'];
$r = $_POST['r'];

function isInArea($x, $y, $r) {
    if ($x >= 0 && $y >= 0) { // Check for circle in top-right quadrant
        return ($x * $x + $y * $y) <= ($r * $r) / 4;
    }
    if ($x < 0 && $y >= 0) { // Check for square in top-left quadrant
        return $x >= -$r && $y <= $r;
    }
    if ($x >= 0 && $y < 0) { // Check for triangle in bottom-right quadrant
        return $y >= -$x && $x <= $r;
    }
    return false; // For bottom-left quadrant, always return false
}


$result = isInArea($x, $y, $r) ? "Hits the area" : "Does not hit the area";
$currentTime = date('Y-m-d H:i:s');
$executionTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

$newResult = array(
    'x' => $x,
    'y' => $y,
    'r' => $r,
    'result' => $result,
    'time' => $currentTime,
    'executionTime' => $executionTime
);

array_push($_SESSION['results'], $newResult);

echo "<table border='1'>
<tr>
    <th>X</th>
    <th>Y</th>
    <th>R</th>
    <th>Result</th>
    <th>Time</th>
    <th>Execution Time</th>
</tr>";

foreach ($_SESSION['results'] as $resultRow) {
    echo "<tr>";
    echo "<td>" . $resultRow['x'] . "</td>";
    echo "<td>" . $resultRow['y'] . "</td>";
    echo "<td>" . $resultRow['r'] . "</td>";
    echo "<td>" . $resultRow['result'] . "</td>";
    echo "<td>" . $resultRow['time'] . "</td>";
    echo "<td>" . $resultRow['executionTime'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
