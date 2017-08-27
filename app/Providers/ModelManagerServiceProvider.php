<?php

namespace App\Providers;

use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Mvc\Model\Manager;

/**
 * \App\Providers\DatabaseServiceProvider
 *
 * @package App\Providers
 */
class ModelManagerServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'modelsManager';

    /**
     * Register application service.
     *
     * @return void
     */
    public function register()
    {
        $this->di->set('modelsManager', function() {
            return new Manager();
        });
     }
}
