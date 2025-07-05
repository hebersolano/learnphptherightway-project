<?php


require_once './transaction.php';
require_once './transaction2.php';
require_once './profile-user.php';

use SoHe;

$newObj = new SoHe\Transaction(100, 'purchase');
// $newObj = new SoHe\Transaction(50, 'test');
var_dump($newObj);

SoHe\fooFunction();
