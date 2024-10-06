<?php

// retrieving the content of the current PHP file
print_r(file(__FILE__));

// you can retrieve also remote file
print_r(file('https://cdn.wsform.com/wp-content/uploads/2020/06/color_web_safe.csv'));

// if you need to set some header, you can use the "context"
$opts = [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n",
    ],
];
$context = stream_context_create($opts);
print_r(file(
    filename: 'https://cdn.wsform.com/wp-content/uploads/2020/06/color_web_safe.csv',
    context: $context,
));
