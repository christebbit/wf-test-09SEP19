<?php
    require('LowestNumberFinder.php');

    $finder = new LowestNumberFinder();

    $test_values = [
        '3, 4, -1, 1',
        '3, 4, -1, 1, 2, 0',
        '3, 4, -1, 1, frog, 9',
        'rabbit, frog, 9',
        'rabbit, frog, nothing',
        '4',
        4,
        false
    ];

    echo "\n";

    foreach ($test_values as $test_value) {
        echo '$finder->getLowest(' . $test_value . '): ' . $finder->getLowest($test_value) . "\n";
    }
?>