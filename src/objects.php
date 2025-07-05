<?php

declare(strict_types=1);

require_once 'transaction.php';

$amount = (new Transaction(100, 'eggs'))
  ->addTax(8)
  ->applyDiscount(10)
  ->getAmount();

var_dump($amount);
echo '</br>';

// srt to object
$str = '{"a":1,"b":2,"c":3}';
$srtObj = json_decode($str);
var_dump($srtObj);
echo '</br>';

// custom obj with stdClass
$objStd = new stdClass();
$objStd->a = 1;
$objStd->b = 2;
var_dump($objStd);
echo '</br>';


// array to object
$arr = [1, 2, 3];
$obj = (object) $arr;
var_dump($obj->{1});
