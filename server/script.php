<?php

require __DIR__ . "/CoordinatesValidator.php";
require __DIR__ . "/AreaChecker.php";

@session_start();

if (!isset($_SESSION["results"])) {
    $_SESSION["results"] = array();
}

if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    echo 'Incorrect, try again) Only GET method accepted.';
    return;
}

date_default_timezone_set($_GET["timezone"]);

$x = $_GET['xVal'];
$y = $_GET['yVal'];
$r = $_GET['rVal'];

$validator = new CoordinatesValidator($x, $y, $r);
if ($validator->checkData()) {
    $isInArea = AreaChecker::isInArea($x, $y, $r);
    $coordsStatus = $isInArea
        ? "<span class='result-cell-in'>Hit</span>"
        : "<span class='result-cell-out'>Didn't hit</span>";

    $currentTime = date('Y-m-d H:i:s');
    $benchmarkTime = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

    $newResult = array(
        "x" => $x,
        "y" => $y,
        "r" => $r,
        "coordsStatus" => $coordsStatus,
        "currentTime" => $currentTime,
        "benchmarkTime" => $benchmarkTime
    );

    array_push($_SESSION["results"], $newResult);

    foreach (array_reverse($_SESSION["results"]) as $tableRow) {
        echo "<tr>";
        echo "<td>" . $tableRow["x"] . "</td>";
        echo "<td>" . $tableRow["y"] . "</td>";
        echo "<td>" . $tableRow["r"] . "</td>";
        echo "<td>" . $tableRow["coordsStatus"] . "</td>";
        echo "<td>" . $tableRow["currentTime"] . "</td>";
        echo "<td>" . $tableRow["benchmarkTime"] . "</td>";
        echo "</tr>";
    }
} else {
    http_response_code(422);
    echo 'Invalid data, try again :)';
    return;
}