<?php

use Phalcon\Loader;

$loader = new Loader();

$loader->registerNamespaces(array(
    'Bucksbunny\Api\Controllers' => __DIR__ . '/../apps/api/controllers/',
    'Bucksbunny\Api\Models' => __DIR__ . '/../apps/api/models/',
    'Bucksbunny\Api\Services' => __DIR__ . '/../apps/api/services/',
));

$loader->register();