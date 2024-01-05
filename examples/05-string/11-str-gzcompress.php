<?php

$array = [
    ['product' => 'Desk', 'price' => 200],
    ['product' => 'Chair', 'price' => 100],
    ['product' => 'Bookcase', 'price' => 150],
    ['product' => 'Door', 'price' => 100],
];

$string = serialize($array);
echo 'Size Json : ' . strlen(json_encode($array)) . PHP_EOL;
echo 'Size Json after compress  : ' . strlen(gzcompress(json_encode($array))) . PHP_EOL;
echo 'Size after serialize : ' . strlen($string) . PHP_EOL;
echo 'Size after compress  : ' . strlen(gzcompress($string)) . PHP_EOL;
echo 'Size max compression : ' . strlen(gzcompress($string, 9)) . PHP_EOL;
