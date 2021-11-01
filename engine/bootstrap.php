<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Engine\Cms;
use Engine\DI\DI;

try {
    // Dependency Injection
    $di = new DI();

    $di->set('test', ['db' => 'db_object']);

    $cms = new Cms($di);
    $cms->run();

} catch (\ErrorException $e) {
    echo $e->getMessage();
}