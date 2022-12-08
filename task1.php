<?php

$pattern = "/\+375[ ]{0,1}\((25|33|29)[\-]?\)[ ]{0,1}\d{3}[ |-]{0,1}\d{2}[ |-]{0,1}\d{2}$/";

$testString = '+375(29)777-77-77';

if (preg_match($pattern, $testString)) {
    echo 'телефон задан верно ' . $testString . PHP_EOL;
} else {
    echo 'Ошибка: не соответствует формату!' . PHP_EOL;
}
