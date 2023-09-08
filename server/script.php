<?php

session_start();

require __DIR__ . '/AreaChecker.php';

if (!isset($_SESSION['results'])) {
    $_SESSION['results'] = array();
}

$x = $_POST['x'];
$y = $_POST['y'];
$r = $_POST['r'];

$result = AreaChecker::isInArea($x, $y, $r) ? "Hits the area" : "Does not hit the area";
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
