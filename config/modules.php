<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'api' => array(
        'className' => 'Bucksbunny\Api\Module',
        'path' => __DIR__ . '/../apps/api/Module.php'
    )
));
