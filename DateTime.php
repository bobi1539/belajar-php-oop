<?php

$dateTime = new DateTime();
$dateTime->setDate(1990, 05, 20);
$dateTime->setTime(10, 10, 34);

$dateTime->add(new DateInterval('P1Y'));

$minusOneMonth = new DateInterval('P1M');
$minusOneMonth->invert = 1;
$dateTime->add($minusOneMonth);

$timeBerlin = new DateTime();
$timeBerlin->setTimezone(new DateTimeZone('America/Toronto'));

// var_dump($dateTime);
// var_dump($timeBerlin);

$timeNow = new DateTime("now");
$dateFormat = $timeNow->format('l, d-M-Y, H:i:s');
echo "Date Format : $dateFormat" . PHP_EOL;

$date = DateTime::createFromFormat("d-m-Y", "20-04-2021");
if ($date) {
    var_dump($date);
} else {
    echo "Format salah" . PHP_EOL;
}
