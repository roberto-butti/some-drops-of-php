<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/examples',
    ])
    // uncomment to reach your current PHP version
    //->withPhpSets(php82: true)
    ->withTypeCoverageLevel(0);
