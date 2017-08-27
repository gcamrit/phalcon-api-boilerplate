<?php

namespace Blog\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->response->setJsonContent([
            'hello' => 'world'
        ]);
    }
}
