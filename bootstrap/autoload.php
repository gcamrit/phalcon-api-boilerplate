<?php

use Phalcon\Loader;

/**
 * We're a registering a set of namespaces
 */
$loader = new Loader();
$loader->registerNamespaces([
    'App' => BASE_PATH . '/app/',
    'Blog' => BASE_PATH . '/src/Blog/'
], true);
$loader->register();
