<?php

if (!isset($_GET['year'])) {
    return;
}

$year = (int) $_GET['year'];
$year = substr($year, 0, 4);

$period = new DatePeriod(
    new DateTime($year . '-01-01 00:00:00'),
    new DateInterval('P1D'),
    new DateTime($year . '-12-31 23:59:59')
);

foreach ($period as $key => $value) {
    echo $value->format('Y-m-d D') . "<br />";
