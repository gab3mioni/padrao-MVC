<?php

require_once '../vendor/autoload.php';

use Core\Router;
use Core\App;

$router = new Router();
$app = new App($router);
$app->run();
