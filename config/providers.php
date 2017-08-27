<?php

use App\Providers;

return [
    // Application Service Providers
    Providers\EventManagerServiceProvider::class,
    Providers\ConfigServiceProvider::class,
    Providers\DatabaseServiceProvider::class,
    Providers\ModelsMetadataServiceProvider::class,
    Providers\TagServiceProvider::class,
    Providers\EscaperServiceProvider::class,
    Providers\MvcDispatcherServiceProvider::class,
    Providers\UrlResolverServiceProvider::class,
    Providers\ResponseServiceProvider::class,
    Providers\RequestServiceProvider::class,
    Providers\ModelManagerServiceProvider::class,
    Providers\RouteServiceProvider::class,
    // Third Party Providers
    \Blog\BlogServiceProvider::class
];
