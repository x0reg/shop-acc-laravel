<?php

use wataridori\BiasRandom\BiasRandom;

function testRandom()
{
    $data = [
        'first' => 25,
        'second' => 10,
        'third' => 15,
        'forth' => 49,
        'trum' => 1
    ];

    $biasRandom = new BiasRandom();
    $results = [];

    for ($i = 0; $i < 100000000; $i++) {
        $biasRandom->setData($data);
        $randomElements = $biasRandom->random();
        $randomElement = $randomElements[0];
        $results[$randomElement] = isset($results[$randomElement]) ? $results[$randomElement] + 1 : 1;
    }

    foreach ($results as $key => $value) {
        echo $key . ' :' . $value . ' times (' . $value / 100000000 * 100 . "%)\n";
    }
}

function getRandomElement($data)
{
    $biasRandom = new BiasRandom();
    foreach ($data as $key => $weight) {
        $biasRandom->addElement($key, $weight);
    }
    return $biasRandom->random();
}
