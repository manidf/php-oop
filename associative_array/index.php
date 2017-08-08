<?php

/*
 * Associative arrays are made up of key value pairs
 * seperated by an =>
 **/

$person = [
    'age'    => 34,
    'hair'   => 'black',
    'career' => 'web developer',
];

/*
 * Push a new key value to the existing erray
 **/
$person['name'] = 'Mannuel Ferreira';

/*
 * remove an item from an array
 **/
unset($person['hair']);

die(var_dump($person));

require 'index.view.php';
