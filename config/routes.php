<?php

/**
 * @var $routes \Phalcon\Mvc\Router\Annotations
 */
$router->setDefaultModule("api");
$router->setDefaultNamespace("Bucksbunny\Api\Controllers");

$router->notFound(array("controller" => "rest", "action" => "route404"));

$router->addModuleResource("api", "Bucksbunny\Api\Controllers\Index");