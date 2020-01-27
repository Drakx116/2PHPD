<?php

$accounts = [
    'nom' => [
        'firstname' => 'aaaa',
        'city' => 'eeee',
        'age' => 20
    ],
    'nom2' => [
        'firstname' => 'aaaa',
        'city' => 'eeee',
        'age' => 20
    ],
];

foreach ($accounts as $name => $account) {
    echo $name . $account['city'];
}