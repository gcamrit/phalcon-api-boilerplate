<?php

use App\Bootstrap;

define('BASE_PATH', dirname(dirname(__FILE__)));

require_once BASE_PATH . '/bootstrap/autoload.php';

$bootstrap = new Bootstrap(BASE_PATH);

echo $bootstrap->run();
