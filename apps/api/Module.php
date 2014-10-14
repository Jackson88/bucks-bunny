<?php

namespace Bucksbunny\Api;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\ModuleDefinitionInterface;


class Module implements ModuleDefinitionInterface
{

    /**
     * Registers the module auto-loader
     */
    public function registerAutoloaders()
    {

        $loader = new Loader();

        $loader->registerNamespaces(array(
            'Bucksbunny\Api\Controllers' => __DIR__ . '/controllers/',
            'Bucksbunny\Api\Models' => __DIR__ . '/models/',
            'Bucksbunny\Api\Services' => __DIR__ . '/services/',
        ));

        $loader->register();
    }

    /**
     * Registers the module-only services
     *
     * @param Phalcon\DI $di
     */
    public function registerServices($di)
    {

        /**
         * Read configuration
         */
        $config = include __DIR__ . "/config/config.php";


        /**
         * Database connection is created based in the parameters defined in the configuration file
         */
        $di['db'] = function () use ($config) {
            return new DbAdapter(array(
                "host" => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname" => $config->database->name
            ));
        };

    }

}
