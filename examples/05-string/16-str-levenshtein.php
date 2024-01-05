<?php

echo levenshtein("hello", "hallo") . PHP_EOL;
// 1

echo levenshtein("hello", "halo") . PHP_EOL;
// 2

echo levenshtein("table", "tablet") . PHP_EOL;
// 1

echo levenshtein("kitten", "sitting") . PHP_EOL;
// 3

echo levenshtein("hello", "halo", replacement_cost: 4) . PHP_EOL;
// 3
