<?php

$period = new DatePeriod(
    new DateTime('2021-12-01'),
    new DateInterval('P1D'),
    new DateTime('2022-12-31')
);

foreach ($period as $key => $value) {
    echo $value->format('Y-m-d D') . "\n";
}
