<?php

namespace App\Providers;

use Phalcon\Http\Request;

/**
 * \App\Providers\ResponseServiceProvider
 *
 * @package App\Providers
 */
class RequestServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'request';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->serviceName, Request::class);
    }
}
