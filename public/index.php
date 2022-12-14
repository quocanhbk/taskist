<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

define("APPLICATION_PATH", substr(realpath(dirname(__FILE__)), 0, -6));

require "../Core/Psr4AutoloaderClass.php";

$loader = new \Core\Psr4AutoloaderClass();
$loader->register();

set_error_handler("Core\Error::errorHandler");
set_exception_handler("Core\Error::exceptionHandler");

$router = new Core\Router();
$router->dispatch();
