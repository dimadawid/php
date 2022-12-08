<?php

$period = new DatePeriod(
    new DateTime('05/12/1000 19:00'),
    new DateInterval('P1Y'),
    new DateTime('05/12/2022 19:00')
);

$dates = [];

foreach ($period as $key => $value) {

    $dates[] = $value->format('Y/m/d');
}

print_r($dates);
