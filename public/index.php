<?php
require __DIR__ . '/../vendor/autoload.php';

$sentence = new App\Wcs\Hello();
echo $sentence->talk();