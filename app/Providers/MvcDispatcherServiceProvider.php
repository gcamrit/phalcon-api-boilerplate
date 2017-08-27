<?php

namespace App\Providers;

use Phalcon\Mvc\Dispatcher;

/**
 * \App\Providers\MvcDispatcherServiceProvider
 *
 * @package App\Providers
 */
class MvcDispatcherServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'dispatcher';

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
                return new Dispatcher();
            }
        );
    }
}
