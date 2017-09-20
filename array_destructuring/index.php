<?php

$people = [
    ['Mannuel', 'Ferreira'],
    ['John', 'Doe']
];

foreach ($person as $person) {
    [$first, $last] = $person;
    var_dump({$first} {$last});
    //var_dump($person[0] . '' . $person[1]);
}
