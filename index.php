<?php

require_once 'vendor/autoload.php';

$multiples3 = new \Linio\Multiples3();
$multiples5 = new \Linio\Multiples5();
$multiples3and5 = new \Linio\Multiples3and5($multiples3, $multiples5);

for($number = 1; $number <= 100; $number++) {
    $output = $number;

    $multiples3->setNumber($number)->outputMultiples($output);
    $multiples5->setNumber($number)->outputMultiples($output);
    $multiples3and5->setNumber($number)->outputMultiples($output);

    print $output . PHP_EOL;
}