<?php

echo 'Concatenates String with -- : ' . implode('--', ['aa', 'bb', 'cc']) . PHP_EOL; // "aa--bb--cc"
echo 'Concatenates Strings : ' . implode(' ', ['How', 'are', 'you', '?']) . PHP_EOL; // "How are you ?"

echo 'Without separator: ' . implode(['a', 'b', 'c']) . PHP_EOL; // "abc"
echo 'Not just string: ' . implode('_', ['a', 1, true]) . PHP_EOL;
