<?php

require __DIR__ . '/../vendor/autoload.php';

$t = new \Turbo\Tools\CardSerial();

$serial = $t->encodeSerial(20171129111111, 14);

$s = $t->decodeSerial($serial);

var_dump($serial, $s);