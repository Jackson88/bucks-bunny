<?php

namespace Bucksbunny\Api\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{

    public function afterExecuteRoute(Dispatcher $dispatcher)
    {
        $data = $dispatcher->getReturnedValue();
        $this->response->setContentType('application/json', 'UTF-8');
        $this->response->setJsonContent($data);
    }

    protected function defineResponseCode($returnData)
    {

    }

}
