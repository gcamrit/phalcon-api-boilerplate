<?php

namespace App;

use App\Providers\ServiceProviderInterface;
use Phalcon\Di;
use Phalcon\DiInterface;
use Phalcon\Mvc\Application;

class Bootstrap
{
    /**
     * The Dependency Injector.
     * @var DiInterface
     */
    protected $di;

    /**
     * The Application path.
     * @var string
     */
    protected $applicationPath;

    /**
     * The Service Providers.
     * @var ServiceProviderInterface[]
     */
    protected $serviceProviders = [];

    /**
     * The Application.
     * @var Application
     */
    protected $app;

    /**
     * Bootstrap constructor.
     *
     * @param $applicationPath
     */
    public function __construct($applicationPath)
    {
        if (!is_dir($applicationPath)) {
            throw new \InvalidArgumentException('The $applicationPath must be a valid application path');
        }

        $this->applicationPath = $applicationPath;
        $this->di = new Di();

        $this->di->setShared('bootstrap', $this);
        Di::setDefault($this->di);

        /**
         * @TODO use Phalcon Config
         */
        $providers = include $applicationPath . '/config/providers.php';
        if (is_array($providers)) {
            $this->initializeServices($providers);
        }

        $this->app = new Application;
        $this->app->setEventsManager($this->di->getShared('eventsManager'));
        $this->app->setDI($this->di);
        $this->app->useImplicitView(false);
        $this->di['app'] = $this->app;
    }

    /**
     * Initialize Services in the Dependency Injector Container.
     *
     * @param string[] $providers
     */
    protected function initializeServices(array $providers)
    {
        foreach ($providers as $name => $class) {
            $this->initializeService(new $class($this->di));
        }
    }

    /**
     * Initialize the Service in the Dependency Injector Container.
     *
     * @param ServiceProviderInterface $serviceProvider
     *
     * @return $this
     */
    protected function initializeService(ServiceProviderInterface $serviceProvider)
    {
        $serviceProvider->register();
        $this->serviceProviders[$serviceProvider->getName()] = $serviceProvider;

        return $this;
    }

    /**
     * Gets the Dependency Injector.
     *
     * @return Di
     */
    public function getDi()
    {
        return $this->di;
    }

    /**
     * Gets the Application path.
     *
     * @return string
     */
    public function getApplicationPath()
    {
        return $this->applicationPath;
    }

    /**
     * Runs the Application
     *
     * @return string
     */
    public function run()
    {
        return $this->getOutput();
    }

    /**
     * Get application output.
     *
     * @return string
     */
    protected function getOutput()
    {
        /**
         * @TODO Handle with Error Handler
         */
        if ($this->app instanceof Application) {
            return $this->app->handle()->getContent();
        }

        return $this->app->handle();
    }
}
