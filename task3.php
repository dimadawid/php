<?php

$test = 'dadsada 23 dqwedqw 45 awdqw 67 wqwe 345 qweqw 22 qwe';

preg_match_all("/\d+/", $test, $mass);

print_r($mass);

$summ = 0;

foreach ($mass[0] as $match) {
    $summ += (int) $match;
}
echo $summ;
