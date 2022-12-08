<?php

$number = (string) readline('Ведите номер машины формата 7777 AB-7, 7777AB-7: ');

function numberAV($number)
{
    $pattern = "/\d{4}[ ]{0,1}[A-Z]{2}\-\d{1}$/";

    if (preg_match($pattern, $number)) {
        return 'Номер введен правильно: ' . $number . PHP_EOL;
    } else {

        return 'Ошибка: не соответствует формату!' . PHP_EOL;
    }
}

echo numberAV($number);
