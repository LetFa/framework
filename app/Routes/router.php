<?php

namespace App\Routes;

use CoffeeCode\Router\Router;

$router =  new Router(ROOT);
$router->namespace("App\Controllers");
$router->group(null);

/* Página index */
$router->get("/", "Home:home");
/* Página sobre */
$router->get("/sobre", "Home:sobre");

$router->dispatch();