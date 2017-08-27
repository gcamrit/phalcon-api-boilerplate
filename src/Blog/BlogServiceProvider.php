<?php

namespace Blog;

use App\Providers\AbstractServiceProvider;
use Phalcon\Mvc\Router;

class BlogServiceProvider extends AbstractServiceProvider
{
    protected $serviceName = 'blog:provider';

    public function register()
    {
        /* @var Router $router */
        $router = $this->getDI()->get('router');
        $router->setDefaultNamespace('Blog\Controller');
        $router->addGet('/', [
            'controller' => 'Index',
            'action' => 'index'
        ]);
    }
}
