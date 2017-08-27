<?php

namespace App\Providers;

use Phalcon\Mvc\Router;

/**
 * \App\Providers\ConfigServiceProvider
 *
 * @package App\Providers
 */
class RouteServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'router';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared(
            $this->serviceName,
            function () {
                return new Router(false);
            }
        );
    }
}
